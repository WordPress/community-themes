<?php
/**
 * Title: Post list
 * Slug: blue-note/posts
 * Categories: query posts
 * Block Types: core/query
 */
?>

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list","columns":3},"className":"is-style-blue-note-query-slant has-stacked-featured-images"} -->
<div class="wp-block-query is-style-blue-note-query-slant has-stacked-featured-images">
	<!-- wp:post-template {"layout":{"type":"constrained"}} -->
		<!-- wp:group {"className":"blue-note-stacked-featured-images"} -->
		<div class="wp-block-group blue-note-stacked-featured-images">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"color":{"duotone":"var:preset|duotone|black-pink"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"color":{"duotone":"var:preset|duotone|black-blue"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"color":{"duotone":"var:preset|duotone|black-green"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"right":"0px","left":"0px","top":"40px","bottom":"16px"}}}} /-->
			<!-- wp:post-date {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
			<!-- wp:spacer {"height":"70px"} -->
			<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous /-->
	<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.','blue-note' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->