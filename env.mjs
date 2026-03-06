#!/usr/bin/env node
/**
 * Starts wp-env with an auto-detected free port starting from 8888.
 * Passes all arguments directly to wp-env (e.g. start, stop, --config).
 *
 * Usage:
 *   node env.mjs start [--theme <theme-slug>]
 *   npm run env:start -- --theme blue-note
 */
import { createServer } from 'net';
import { spawn } from 'child_process';

function findFreePort( start = 8888 ) {
	return new Promise( ( resolve ) => {
		const server = createServer();
		server.on( 'error', () => resolve( findFreePort( start + 1 ) ) );
		server.listen( start, () => server.close( () => resolve( start ) ) );
	} );
}

// Extract --theme <slug> from args, pass the rest to wp-env.
const args = process.argv.slice( 2 );
const themeIndex = args.indexOf( '--theme' );
let themeSlug = null;
if ( themeIndex !== -1 ) {
	themeSlug = args[ themeIndex + 1 ];
	args.splice( themeIndex, 2 );
}

const port = await findFreePort();
const testsPort = await findFreePort( port + 1 );

if ( port !== 8888 ) {
	console.log( `Port 8888 is in use, starting on port ${ port } instead.` );
}

const wpEnvEnv = { ...process.env, WP_ENV_PORT: String( port ), WP_ENV_TESTS_PORT: String( testsPort ) };

const child = spawn( 'wp-env', args, { stdio: 'inherit', env: wpEnvEnv } );

child.on( 'exit', ( code ) => {
	if ( code !== 0 || ! themeSlug || ! args.includes( 'start' ) ) {
		process.exit( code ?? 0 );
	}

	console.log( `Activating theme: ${ themeSlug }` );
	const activate = spawn( 'wp-env', [ 'run', 'cli', 'wp', 'theme', 'activate', themeSlug ], {
		stdio: 'inherit',
		env: wpEnvEnv,
	} );
	activate.on( 'exit', ( activateCode ) => process.exit( activateCode ?? 0 ) );
} );
