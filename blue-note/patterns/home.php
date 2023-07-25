<?php
/**
 * Title: home
 * Slug: blue-note/home
 * Categories: hidden
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"100px"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<main class="wp-block-group" style="margin-top:100px"><!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"65%","style":{"spacing":{"blockGap":"56px"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:65%"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"180px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.10","letterSpacing":"-0.03em"}},"fontFamily":"old-standard-tt"} -->
<h1 class="wp-block-heading has-old-standard-tt-font-family" style="font-size:180px;font-style:normal;font-weight:400;letter-spacing:-0.03em;line-height:1.10"><?php esc_html_e( 'Learn all about jazz!' , 'blue-note' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"contrast"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-background-color has-background wp-element-button">See Posts</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"35%","style":{"spacing":{"padding":{"top":"32px"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:32px;flex-basis:35%"><!-- wp:image {"align":"right","id":9,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignright size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/vertical-colored-stripes.png" alt="" class="wp-image-9"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->
