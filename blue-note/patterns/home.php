<?php
/**
 * Title: home
 * Slug: blue-note/home
 * Categories: hidden
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"100px","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<main class="wp-block-group" style="margin-top:100px; margin-bottom:var(--wp--preset--spacing--80);"><!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"65%","style":{"spacing":{"blockGap":"56px"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:65%"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"180px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.10","letterSpacing":"-0.03em"}},"fontFamily":"old-standard-tt"} -->
<h1 class="wp-block-heading has-old-standard-tt-font-family" style="font-size:180px;font-style:normal;font-weight:400;letter-spacing:-0.03em;line-height:1.10"><?php esc_html_e( 'Learn all about jazz!' , 'blue-note' ); ?></h1>
<!-- /wp:heading -->
</div>
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

	<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3},"align":"wide","className":"is-style-blue-note-query-slant","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide is-style-blue-note-query-slant">

		<!-- wp:query-pagination -->
		<!-- wp:query-pagination-next {"label":"<?php esc_html_e( 'See Posts','blue-note' ); ?>","className":"wp-element-button","fontSize":"normal"} /-->
		<!-- /wp:query-pagination -->

		<!-- wp:heading {"align":"wide","style":{"spacing":{"margin":{"top":"6.25rem","bottom":"var:preset|spacing|60"}}},"fontSize":"extra-large"} -->
		<h2 class="wp-block-heading alignwide has-extra-large-font-size" style="margin-top:6.25rem;margin-bottom:var(--wp--preset--spacing--60)"><?php esc_html_e( 'Latest Posts','blue-note' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:post-template {"className":"has-stacked-featured-images"} -->
			<!-- wp:group {"className":"blue-note-stacked-featured-images","layout":{"type":"constrained"}} -->
			<div class="wp-block-group blue-note-stacked-featured-images">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"color":{"duotone":"var:preset|duotone|black-pink"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"color":{"duotone":"var:preset|duotone|black-blue"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"color":{"duotone":"var:preset|duotone|black-green"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|60"}}},"fontSize":"xx-large"} /-->

			<!-- wp:post-date /-->
			<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
			<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
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

