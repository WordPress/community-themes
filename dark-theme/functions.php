<?php
/**
 * Dark Theme functions.
 *
 * @package Dark_Theme
 */

/**
 * Enqueue the theme styles and non-persistent test control.
 */
function dark_theme_enqueue_assets() {
	wp_enqueue_style(
		'dark-theme-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'dark-theme-scheme-switcher',
		get_theme_file_uri( 'assets/js/scheme-switcher.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'dark_theme_enqueue_assets' );
