<?php
/**
 * Title: home
 * Slug: blue-note/home
 * Categories: hidden
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--90); margin-bottom:var(--wp--preset--spacing--70);"><!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
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

<!-- wp:group {"tagName":"main","layout":{"type":"constrained","justifyContent":"center"}} -->
<main class="wp-block-group">

	<!-- wp:heading {"align":"wide"} -->
	<h2 class="wp-block-heading alignwide"><?php esc_html_e( 'Latest Posts', 'blue-note' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3},"align":"wide","className":"is-style-blue-note-query-slant","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide is-style-blue-note-query-slant">
		<!-- wp:post-template -->
			<!-- wp:post-featured-image /-->

			<!-- wp:post-title {"isLink":true} /-->

			<!-- wp:post-date /-->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.','blue-note' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:search {"label":"Search","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search"} /-->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

	<!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

</main>
<!-- /wp:group -->

