<?php
/**
 * Register block styles.
 */
function blue_note_register_block_styles() {
	$blocks = array( 'image', 'post-featured-image' );

	foreach( $blocks as $block ) {
		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'blue-note-slant-right',
				'label'        => __( 'Slant right', 'blue-note' ),
				'inline_style' => '.is-style-blue-note-slant-right{ transform: rotate(2deg); }',
			)
		);
		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'blue-note-slant-left',
				'label'        => __( 'Slant left', 'blue-note' ),
				'inline_style' => '.is-style-blue-note-slant-left{ transform: rotate(-2deg); }',
			)
		);
		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'blue-note-thin-stripes',
				'label'        => __( 'Thin Stripes', 'blue-note' ),
			)
		);
		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'blue-note-thick-stripes',
				'label'        => __( 'Thick Stripes', 'blue-note' ),
				'inline_style' => '.is-style-blue-note-thick-stripes{ clip-path: url('. esc_url( get_stylesheet_directory_uri() ) .'/assets/images/thick-stripes.svg#blue-note-thick-stripes); }',
			)
		);
		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'blue-note-rhomboid',
				'label'        => __( 'Rhomboid', 'blue-note' ),
			)
		);
	}

	register_block_style(
		'core/query',
		array(
			'name'  => 'blue-note-query-slant',
			'label' => __( 'Slanted images', 'blue-note' ),
			'inline_style' => '
				.is-style-blue-note-query-slant ul li:nth-child(odd) .wp-block-post-featured-image img {
					transform: rotate(2deg);
				}
				.is-style-blue-note-query-slant ul li:nth-child(even) .wp-block-post-featured-image img {
					transform: rotate(-2deg);
				}
			',
		)
	);

	register_block_style(
		'core/quote',
		array(
			'name'         => 'blue-note-blue-quote',
			'label'        => __( 'Blue Quote', 'blue-note' ),
			'inline_style' => '.is-style-blue-note-blue-quote blockquote { margin: 0; } .is-style-blue-note-blue-quote p { display: inline; } .wp-block-quote.is-style-blue-note-blue-quote cite { display: inline !important; font-style: inherit; text-transform: inherit !important; font-weight: inherit !important; font-size: inherit !important; line-height: inherit !important; }',
		)
	);
}
add_action( 'init', 'blue_note_register_block_styles' );

/**
 * Enqueue style.css file.
 */
if ( ! function_exists( 'blue_note_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @return void
	 */
	function blue_note_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'blue_note-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'blue_note-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'blue_note_styles' );
add_action( 'enqueue_block_editor_assets', 'blue_note_styles' );