<?php
/**
 * Light Theme functions.
 *
 * @package Light_Theme
 */

/**
 * Enqueue the theme styles and non-persistent test control.
 */
function light_theme_enqueue_assets() {
	wp_enqueue_style(
		'light-theme-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'light-theme-scheme-switcher',
		get_theme_file_uri( 'assets/js/scheme-switcher.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'light_theme_enqueue_assets' );
