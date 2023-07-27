<?php
/**
 * Title: Striped image, text and button
 * Slug: blue-note/thick-stripes
 * Categories: text button
 */
?>
<!-- wp:image {"width":847,"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|black-orange"}},"className":"is-style-blue-note-thick-stripes"} -->
<figure class="wp-block-image size-full is-resized is-style-blue-note-thick-stripes"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Cab_Calloway_Gottlieb.jpg" alt="" style="aspect-ratio:16/9;object-fit:cover;width:847px" width="847"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"huge"} -->
<p class="has-huge-font-size" style="line-height:1.2"><?php esc_html_e( 'Cab Calloway was another of the original Cotton Club performers.', 'blue-note' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Learn More', 'blue-note' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
