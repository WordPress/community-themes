<?php
/**
 * Title: Blue Note Call to Action
 * Slug: blue-note/call-to-action
 * Categories: call-to-action
 * Block Types: core/group core/image core/paragraph core/heading core/buttons
 */
?>
<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color"><!-- wp:image {"id":163,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/trumpet.jpg" alt="" class="wp-image-163"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-link-color" style="text-transform:uppercase">Don't Miss a Beat</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Jazz up your inbox with exclusive news, swinging surprises, and the freshest jives for all the coolest cats.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"width":"2px"}},"borderColor":"base","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color has-link-color has-border-color has-base-border-color wp-element-button" href="#" style="border-width:2px">Sign up</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->