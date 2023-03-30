<?php
/**
 * Title: Links Area
 * Slug: tt1-blocks/links-area
 * Categories: tt1-blocks
 * Block Types: core/cover
 * Keywords: links
 * Description: A huge text followed by social networks and email address links.
 * ViewportWidth: 1440
 *
 * @package TT1_Blocks
 * @since 0.4.9
 */

?>
<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|gray","style":"solid"},"right":{"color":"var:preset|color|gray","style":"solid"},"bottom":{"color":"var:preset|color|gray","style":"solid"},"left":{"color":"var:preset|color|gray","style":"solid"}},"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"backgroundColor":"green"} -->
<div class="wp-block-group alignwide has-green-background-color has-background" style="border-top-color:var(--wp--preset--color--gray);border-top-style:solid;border-right-color:var(--wp--preset--color--gray);border-right-style:solid;border-bottom-color:var(--wp--preset--color--gray);border-bottom-style:solid;border-left-color:var(--wp--preset--color--gray);border-left-style:solid;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">
	<!-- wp:spacer {"height":20} --><div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->
	<!-- wp:paragraph {"fontSize":"huge"} --><p class="has-huge-font-size"><?php echo wp_kses_post( __( 'Let&#8217;s Connect.', 'tt1-blocks' ) ); ?></p><!-- /wp:paragraph -->
	<!-- wp:spacer {"height":75} --><div style="height:75px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph --><p><a href="#" data-type="URL"><?php esc_html_e( 'Twitter', 'tt1-blocks' ); ?></a> / <a href="#" data-type="URL"><?php esc_html_e( 'Instagram', 'tt1-blocks' )?> </a> / <a href="#" data-type="URL"> <?php esc_html_e( 'Dribbble', 'tt1-blocks' ); ?></a></p><!-- /wp:paragraph -->
		</div><!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph --><p><a href="#"><?php esc_html_e( 'example@example.com', 'tt1-blocks' ); ?></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:spacer {"height":20} --><div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->
</div>
<!-- /wp:group -->