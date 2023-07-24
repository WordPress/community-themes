<?php
/**
 * Title: Post meta & navigation
 * Slug: blue-note/post-meta-nav
 * Categories: text
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"medium"} -->
<div class="wp-block-group has-medium-font-size">
	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Author:', 'blue-note' ); ?> </p>
	<!-- /wp:paragraph -->
	<!-- wp:post-author {"showAvatar":false,"showBio":false} /-->

	<!-- wp:paragraph -->
	<p><?php echo esc_html_x( '/', 'separator', 'blue-note' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Tags:', 'blue-note' ); ?> </p>
	<!-- /wp:paragraph -->

	<!-- wp:post-terms {"term":"post_tag"} /-->
</div>
<!-- /wp:group -->

<!-- wp:columns {"fontSize":"medium"} -->
<div class="wp-block-columns has-medium-font-size">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:separator -->
		<hr class="wp-block-separator has-alpha-channel-opacity"/>
		<!-- /wp:separator -->
		<!-- wp:post-navigation-link {"type":"previous","label":"<em><?php esc_html_e( 'Previous', 'blue-note' ); ?></em>","linkLabel":true,"arrow":"arrow"} /-->
		<!-- wp:post-navigation-link {"type":"previous","label":"","showTitle":true,"style":{"typography":{"textTransform":"uppercase"}}} /-->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:separator -->
		<hr class="wp-block-separator has-alpha-channel-opacity"/>
		<!-- /wp:separator -->
		<!-- wp:post-navigation-link {"textAlign":"right","label":"<em><?php esc_html_e( 'Next', 'blue-note' ); ?></em>","linkLabel":true,"arrow":"arrow"} /-->
		<!-- wp:post-navigation-link {"textAlign":"right","label":"","showTitle":true,"linkLabel":true,"style":{"typography":{"textTransform":"uppercase"}}} /-->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->