<?php
/**
 * Term functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Term
 * @since Term 1.0
 */

/**
 * Register block styles.
 */
if ( ! function_exists( 'term_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Term 1.0
	 * @return void
	 */
	function term_block_styles() {

		register_block_style(
			'core/social-links', 
			array(
				'name'         => 'social-rounded-icons',
                'label'        => __( 'Rounded icons', 'term' ),
				/*
				 * Styles for the rounded icon style of the Social Links block.
				 */
				'inline_style' => '
				.is-style-social-rounded-icons .wp-block-social-link {
					border-radius: 5px;
				}',
			)
		);

		register_block_style(
            'core/image',
            array(
                'name' => 'bordered',
                'label' => __('Bordered', 'term'),
                'inline_style' => '.wp-block-image.is-style-bordered img{
                    border-radius: .5rem;
                    border: .25rem solid black;
                }'
            )
        );
	}
endif;

add_action( 'init', 'term_block_styles' );