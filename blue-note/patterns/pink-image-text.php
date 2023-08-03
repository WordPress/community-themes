<?php
/**
 * Title: Pink image and text
 * Slug: blue-note/pink-image-text
 * Categories: text
 */
?>
<!-- wp:columns {"verticalAlignment":"bottom","style":{"color":{"background":"#fd5370"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-bottom has-background" style="background-color:#fd5370;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"bottom","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:70%"><!-- wp:image {"id":179,"aspectRatio":"1/1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#000000","#fd5370"]}},"className":"is-style-blue-note-rhomboid"} -->
<figure class="wp-block-image size-full is-style-blue-note-rhomboid"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Duke_Ellington.jpg" alt="" class="wp-image-179" style="aspect-ratio:1/1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"20%","style":{"spacing":{"padding":{"left":"1rem","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-right:var(--wp--preset--spacing--50);padding-left:1rem;flex-basis:20%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2"},"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}},"fontSize":"large"} -->
<p class="has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--80);line-height:1.2"><?php esc_html_e( 'Duke Ellington at the Hurricane Club, 1943', 'blue-note' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->