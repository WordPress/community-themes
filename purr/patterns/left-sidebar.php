<?php
/**
 * Title: Left Sidebar
 * Slug: purr/left-sidebar
 * Categories: sidebar
 */
?>
<!-- wp:group {"style":{"position":{"type":""},"layout":{"selfStretch":"fixed","flexSize":"25%"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><!-- wp:site-logo {"width":94,"className":"is-style-rounded"} /--></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'About', 'purr' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Purr is a theme for status updates.', 'purr' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:archives {"showPostCounts":true} /--></div>
<!-- /wp:group -->
