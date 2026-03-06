#!/usr/bin/env node
/**
 * Starts wp-env with an auto-detected free port starting from 8888.
 * Passes all arguments directly to wp-env (e.g. start, stop, --config).
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

const port = await findFreePort();
const testsPort = await findFreePort( port + 1 );

if ( port !== 8888 ) {
	console.log( `Port 8888 is in use, starting on port ${ port } instead.` );
}

const child = spawn( 'wp-env', process.argv.slice( 2 ), {
	stdio: 'inherit',
	env: { ...process.env, WP_ENV_PORT: String( port ), WP_ENV_TESTS_PORT: String( testsPort ) },
} );

child.on( 'exit', ( code ) => process.exit( code ?? 0 ) );
