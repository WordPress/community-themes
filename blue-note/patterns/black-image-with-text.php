<?php
/**
 * Title: Black Image with Text
 * Slug: blue-note/black-image-text
 * Categories: text
 * Block Types: core/quote
 */
?>
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"base"} -->
<div class="wp-block-columns has-base-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Ethel-Waters.jpg","id":1888,"dimRatio":0,"minHeightUnit":"vh","contentPosition":"center center","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"1em","left":"1em"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--80);padding-right:1em;padding-bottom:var(--wp--preset--spacing--80);padding-left:1em"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1888" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Ethel-Waters.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"500px"} -->
<div style="height:500px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"huge"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color has-huge-font-size" style="text-transform:uppercase"><?php esc_html_e( "Ethel", 'blue-note' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"1em","bottom":"var:preset|spacing|80","left":"1em"}}}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-top:var(--wp--preset--spacing--80);padding-right:1em;padding-bottom:var(--wp--preset--spacing--80);padding-left:1em"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"huge"} -->
<h2 class="wp-block-heading has-text-align-center has-huge-font-size" style="text-transform:uppercase"><?php esc_html_e( "Waters", 'blue-note' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->