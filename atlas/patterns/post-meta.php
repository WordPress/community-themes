<?php
/**
 * Title: Post meta
 * Slug: atlas/post-meta
 * Inserter: no
 */
?><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">

<!-- wp:post-date {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size"><!-- wp:paragraph -->
<p><?php esc_html_e( 'By','atlas' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->