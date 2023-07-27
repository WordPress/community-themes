<?php
/**
 * Title: Quote with image
 * Slug: blue-note/quote
 * Categories: text
 * Block Types: core/quote
 */
?>
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Cab Calloway was another of the original Cotton Club performers.', 'blue-note' ); ?></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":9,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|black-pink"}},"className":"is-style-blue-note-slant-right"} -->
<figure class="wp-block-image size-full is-style-blue-note-slant-right"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Cab_Calloway_Gottlieb.jpg" alt="" class="wp-image-9"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
