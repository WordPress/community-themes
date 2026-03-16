<?php
/**
 * Title: single
 * Slug: poetry/single
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"96px","right":"0","bottom":"96px","left":"0"},"blockGap":"40px"}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal","verticalAlignment":"top","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:96px;padding-right:0;padding-bottom:96px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"96px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:96px"><!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"56px","left":"56px"},"blockGap":"32px"},"border":{"left":{"width":"2px"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-left-width:2px;padding-right:56px;padding-left:56px"><!-- wp:image {"id":15,"width":"56px","height":"56px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/feather-small.png" alt="" class="wp-image-15" style="width:56px;height:56px"/></figure>
<!-- /wp:image -->

<!-- wp:post-title {"style":{"spacing":{"padding":{"right":"24%"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"}}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-link-color"><!-- wp:paragraph {"textColor":"custom-contrast"} -->
<p class="has-custom-contrast-color has-text-color">By</p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"showBio":false,"textColor":"custom-contrast"} /--></div>
<!-- /wp:group -->

<!-- wp:post-content /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:post-navigation-link {"type":"previous","showTitle":true} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-navigation-link {"textAlign":"right","showTitle":true} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->