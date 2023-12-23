<?php
/**
 * Title: Hidden 404
 * Slug: atlas/hidden-404
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"main","style":{"dimensions":{"minHeight":"80vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<main class="wp-block-group" style="min-height:80vh"><!-- wp:heading {"textAlign":"center","level":1,"align":"wide","style":{"typography":{"fontSize":"8rem"}}} -->
	<h1 class="wp-block-heading alignwide has-text-align-center" style="font-size:8rem">
		<?php echo esc_html_x('404', 'Error code for a webpage that is not found.', 'atlas'); ?>
	</h1>
	<!-- /wp:heading -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"5px"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="margin-top:5px"><!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">
			<?php echo esc_html_x('You just hit a route that doesn\'t exist... Better get back home.', 'Message to convey that a webpage could not be found', 'atlas'); ?> </p>
		<!-- /wp:paragraph -->

		<!-- wp:search {"label":"<?php echo esc_html_x('Search', 'label', 'atlas'); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x('Search...', 'placeholder for search field', 'atlas'); ?>","width":100,"widthUnit":"%","buttonText":"<?php esc_attr_e('Search', 'atlas'); ?>","buttonUseIcon":true,"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"base","textColor":"contrast"} /-->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->