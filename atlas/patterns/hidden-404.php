<?php
/**
 * Title: Hidden 404
 * Slug: atlas/hidden-404
 * Inserter: no
 */
?>
<!-- wp:cover {"minHeight":80,"minHeightUnit":"vh","gradient":"primary","tagName":"main","align":"full","style":{"spacing":{"margin":{"top":"0px"}}}} -->
<main class="wp-block-cover alignfull" style="margin-top:0px;min-height:80vh">
	<span aria-hidden="true"
		class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-primary-gradient-background"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
		<main class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":1,"align":"wide","style":{"typography":{"fontSize":"8rem"}}} -->
			<h1 class="wp-block-heading alignwide has-text-align-center" style="font-size:8rem">
				<?php echo esc_html_x('404', 'Error code for a webpage that is not found.', 'atlas'); ?>
			</h1>
			<!-- /wp:heading -->

			<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"5px"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group alignwide" style="margin-top:5px"><!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">
					<?php echo esc_html_x('You just hit a route that doesn\'t exist... Better get back home.', 'Message to convey that a webpage could not be found', 'atlas'); ?>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:search {"label":"<?php echo esc_html_x('Search', 'label', 'atlas'); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x('Search...', 'placeholder for search field', 'atlas'); ?>","width":100,"widthUnit":"%","buttonText":"<?php esc_attr_e('Search', 'atlas'); ?>","buttonUseIcon":true,"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"base","textColor":"contrast"} /-->
			</div>
			<!-- /wp:group -->
		</main>
		<!-- /wp:group -->
	</div>
</main>
<!-- /wp:cover -->