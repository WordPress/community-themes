<?php

/**
 * Register block styles.
 */

 if ( ! function_exists( 'atlas_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function atlas_block_styles() {

		register_block_style(
			'a8c/starscape',
			array(
				'name'         => 'angled',
				'label'        => __( 'Angled', 'atlas' ),
				'inline_style' => "
				.is-style-angled {
					clip-path: polygon(0 0,100% 0,100% 90%,50% 100%,0 90%);
					overflow: hidden;
				}
				",
			)
		);

		register_block_style(
			'core/cover',
			array(
				'name'         => 'angled',
				'label'        => __( 'Angled', 'atlas' ),
				'inline_style' => "
				.is-style-angled {
					clip-path: polygon(0 0,100% 0,100% 90%,50% 100%,0 90%);
					overflow: hidden;
				}
				",
			)
		);
	}
endif;

add_action( 'init', 'atlas_block_styles' );