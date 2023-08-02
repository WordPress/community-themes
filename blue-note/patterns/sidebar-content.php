<?php
/**
 * Title: Sidebar Content
 * Slug: blue-note/sidebar-content
 * Categories: uncategorized
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:heading {"style":{"typography":{"fontSize":"22px","textTransform":"uppercase","fontWeight":"700"}}} -->
	<h2 class="wp-block-heading" style="font-size:22px;font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Latest Post', 'blue-note' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:latest-posts /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:heading {"style":{"typography":{"fontSize":"22px","textTransform":"uppercase"}}} -->
	<h2 class="wp-block-heading" style="font-size:22px;text-transform:uppercase"><strong><?php esc_html_e( 'Subscribe to our newsletter', 'blue-note' ); ?></strong></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Get new content delivered directly to your inbox. Never miss a new post!', 'blue-note' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Subscribe', 'blue-note' ); ?></a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:heading {"style":{"typography":{"fontSize":"22px","textTransform":"uppercase","fontWeight":"700"}}} -->
	<h2 class="wp-block-heading" style="font-size:22px;font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Categories', 'blue-note' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:categories {"showPostCounts":true} /-->
</div>
<!-- /wp:group -->
