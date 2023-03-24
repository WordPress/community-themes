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
				'inline_style' => '.is-style-blue-note-slant-right{ transform: rotate(1deg); }',
			)
		);
		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'blue-note-slant-left',
				'label'        => __( 'Slant left', 'blue-note' ),
				'inline_style' => '.is-style-blue-note-slant-left{ transform: rotate(-1deg); }',
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
					transform: rotate(1deg);
					filter: url( "#wp-duotone-black-pink");
				}
				.is-style-blue-note-query-slant ul li:nth-child(even) .wp-block-post-featured-image img {
					transform: rotate(-1deg);
					filter: url( "#wp-duotone-black-blue");
				}
				.is-style-blue-note-query-slant ul li:nth-child(3n) .wp-block-post-featured-image img {
					filter: url( "#wp-duotone-black-green");
				}
			',
		)
	);
}
add_action( 'init', 'blue_note_register_block_styles' );

