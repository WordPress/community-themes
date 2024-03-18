<?php

/**
 * Title: Left Sidebar
 * Slug: purr/left-sidebar
 * Categories: sidebar
 */
?>
<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"var:preset|custom|sidebar|width"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
        <!-- wp:site-logo {"className":"is-style-rounded"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:heading -->
    <h2 class="wp-block-heading"><?php esc_html_e('About', 'purr'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p><?php esc_html_e('Purr is a theme for status updates.', 'purr'); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:archives {"showPostCounts":true} /-->
</div>
<!-- /wp:group -->