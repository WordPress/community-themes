<?php
/**
 * Title: Default Footer
 * Slug: blue-note/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
		<!-- wp:site-title {"level":0} /-->
		<!-- wp:paragraph {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"fontSize":"extra-small"} -->
		<p class="has-extra-small-font-size" style="padding-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e( 'Built with WordPress', 'blue-note' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#000000","iconBackgroundColor":"base","iconBackgroundColorValue":"#F5F3EA","showLabels":true,"className":"is-style-default"} -->
	<ul class="wp-block-social-links has-visible-labels has-icon-color has-icon-background-color is-style-default">
		<!-- wp:social-link {"url":"#","service":"instagram"} /-->
		<!-- wp:social-link {"url":"#","service":"twitter"} /-->
	</ul>
	<!-- /wp:social-links -->
</div>
<!-- /wp:group -->
