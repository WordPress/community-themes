#!/usr/bin/env node
/**
 * Wraps wp-env with auto-detected ports and theme activation.
 * Saves the active port to .wp-env-port so stop/destroy target the right instance.
 *
 * Usage:
 *   node env.mjs start [--theme <theme-slug>] [--config <file>]
 *   node env.mjs stop
 *   node env.mjs destroy
 *
 *   npm run env:start -- --theme blue-note
 *   npm run env:stop
 *   npm run env:destroy
 */
import { createServer } from 'net';
import { spawn } from 'child_process';
import { readFileSync, writeFileSync, existsSync, unlinkSync } from 'fs';

const PORT_FILE = '.wp-env-port';

function isPortFree( port ) {
	return new Promise( ( resolve ) => {
		const server = createServer();
		server.on( 'error', () => resolve( false ) );
		server.listen( port, () => server.close( () => resolve( true ) ) );
	} );
}

async function findFreePort( start = 8888 ) {
	return ( await isPortFree( start ) ) ? start : findFreePort( start + 1 );
}

function readSavedPort() {
	if ( existsSync( PORT_FILE ) ) {
		const port = parseInt( readFileSync( PORT_FILE, 'utf8' ).trim(), 10 );
		if ( ! isNaN( port ) ) return port;
	}
	return null;
}

function runWpEnv( wpEnvArgs, env ) {
	return new Promise( ( resolve ) => {
		const child = spawn( 'wp-env', wpEnvArgs, { stdio: 'inherit', env } );
		child.on( 'exit', ( code ) => resolve( code ?? 0 ) );
	} );
}

const args = process.argv.slice( 2 );
const command = args[ 0 ];

// --- stop / destroy ---
if ( command === 'stop' || command === 'destroy' ) {
	const savedPort = readSavedPort();
	const wpEnvEnv = { ...process.env };
	if ( savedPort ) {
		wpEnvEnv.WP_ENV_PORT = String( savedPort );
		wpEnvEnv.WP_ENV_TESTS_PORT = String( savedPort + 1 );
	}
	const code = await runWpEnv( args, wpEnvEnv );
	if ( code === 0 && command === 'destroy' ) {
		try { unlinkSync( PORT_FILE ); } catch {}
	}
	process.exit( code );
}

// --- start ---

// Extract --theme <slug> from args, pass the rest to wp-env.
const themeIndex = args.indexOf( '--theme' );
let themeSlug = null;
if ( themeIndex !== -1 ) {
	themeSlug = args[ themeIndex + 1 ];
	args.splice( themeIndex, 2 );
}

const savedPort = readSavedPort();
const alreadyRunning = savedPort && ! ( await isPortFree( savedPort ) );

if ( alreadyRunning ) {
	// Instance is already running — skip wp-env start, just activate the theme.
	console.log( `wp-env is already running on port ${ savedPort }.` );
	if ( themeSlug ) {
		activateTheme( themeSlug, buildEnv( savedPort ) );
	} else {
		process.exit( 0 );
	}
} else {
	const port = await findFreePort();
	const testsPort = await findFreePort( port + 1 );

	if ( port !== 8888 ) {
		console.log( `Port 8888 is in use, starting on port ${ port } instead.` );
	}

	const wpEnvEnv = buildEnv( port, testsPort );
	const child = spawn( 'wp-env', args, { stdio: 'inherit', env: wpEnvEnv } );

	child.on( 'exit', ( code ) => {
		if ( code !== 0 ) {
			process.exit( code );
		}

		// Persist port so stop/destroy can target this instance.
		writeFileSync( PORT_FILE, String( port ) );

		if ( ! themeSlug ) {
			process.exit( 0 );
		}

		activateTheme( themeSlug, wpEnvEnv );
	} );
}

function buildEnv( port, testsPort = port + 1 ) {
	return { ...process.env, WP_ENV_PORT: String( port ), WP_ENV_TESTS_PORT: String( testsPort ) };
}

function activateTheme( slug, wpEnvEnv ) {
	console.log( `Activating theme: ${ slug }` );
	const activate = spawn( 'wp-env', [ 'run', 'cli', 'wp', 'theme', 'activate', slug ], {
		stdio: [ 'inherit', 'pipe', 'pipe' ],
		env: wpEnvEnv,
	} );

	let activateOutput = '';
	activate.stdout.on( 'data', ( data ) => {
		const text = data.toString();
		activateOutput += text;
		process.stdout.write( text );
	} );
	activate.stderr.on( 'data', ( data ) => {
		const text = data.toString();
		activateOutput += text;
		process.stderr.write( text );
	} );

	activate.on( 'exit', ( activateCode ) => {
		if ( activateCode !== 0 || ! activateOutput.includes( 'Success:' ) ) {
			console.error( `Error: Failed to activate theme '${ slug }'. Make sure the theme slug is correct.` );
			process.exit( 1 );
		}
		process.exit( 0 );
	} );
}
