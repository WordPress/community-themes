<?php
/**
 * Title: Blue Image with Quote
 * Slug: blue-note/blue-quote
 * Categories: text
 * Block Types: core/quote
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"contrast","className":"is-style-blue-note-blue-quote","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-blue-note-blue-quote has-contrast-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.3%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.3%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#000000","rgb(75, 153, 248)"]},"border":{"color":"#4b99f8","width":"2px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Louis_Armstrong.jpg" alt="" class="has-border-color" style="border-color:#4b99f8;border-width:2px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.6%","style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:0;padding-left:0;flex-basis:66.6%"><!-- wp:quote {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"300"}},"textColor":"white","className":"is-style-blue-note-blue-quote","fontSize":"large"} -->
<blockquote class="wp-block-quote is-style-blue-note-blue-quote has-white-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:300;text-transform:uppercase"><!-- wp:paragraph {"style":{"color":{"text":"#4b99f8"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"right":"0","left":"0"}}}} -->
<p class="has-text-color" style="color:#4b99f8;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-right:0;padding-left:0"><?php esc_html_e('“Every time I close my eyes blowing that trumpet of mine—I look right in the heart of good old New Orleans… It has given me something to live for"', 'blue-note' );?></p>
<!-- /wp:paragraph --><cite><?php esc_html_e( 'Louis Armstrong', 'blue-note' );?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->