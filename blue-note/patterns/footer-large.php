<?php
/**
 * Title: Large footer
 * Slug: blue-note/footer-large
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull"><!-- wp:heading {"align":"wide","fontSize":"large"} -->
	<h2 class="wp-block-heading alignwide has-large-font-size">Jazzy Notes is a volunteer group of passionate jazz listeners and musicians dedicated to learning and teaching improvised music.</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group -->

	<!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:site-title /-->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Built with WordPress', 'blue-note' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:social-links {"iconColor":"base","iconColorValue":"#F5F3EA","iconBackgroundColor":"contrast","iconBackgroundColorValue":"#000000","showLabels":true,"className":"is-style-default"} -->
		<ul class="wp-block-social-links has-visible-labels has-icon-color has-icon-background-color is-style-default">
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->

		<!-- wp:social-link {"url":"#","service":"twitter"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
