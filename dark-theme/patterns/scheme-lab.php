<?php
/**
 * Title: Color scheme test lab
 * Slug: dark-theme/scheme-lab
 * Categories: featured
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"main","align":"full","backgroundColor":"base","textColor":"contrast","className":"scheme-lab","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull scheme-lab has-contrast-color has-base-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"backgroundColor":"fixed-accent","textColor":"contrast","style":{"border":{"radius":"999px"},"spacing":{"padding":{"top":"0.35rem","right":"0.75rem","bottom":"0.35rem","left":"0.75rem"}}},"fontSize":"small"} -->
		<p class="has-contrast-color has-fixed-accent-background-color has-text-color has-background has-small-font-size" style="border-radius:999px;padding-top:0.35rem;padding-right:0.75rem;padding-bottom:0.35rem;padding-left:0.75rem"><?php echo esc_html__( 'Dark-first · variation reference', 'dark-theme' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:color-scheme-toggle /-->

		<!-- wp:html -->
		<div class="scheme-lab__switcher" role="group" aria-label="<?php echo esc_attr__( 'Preview color scheme', 'dark-theme' ); ?>">
			<button type="button" data-scheme-choice="system" aria-pressed="true"><?php echo esc_html__( 'System', 'dark-theme' ); ?></button>
			<button type="button" data-scheme-choice="light" aria-pressed="false"><?php echo esc_html__( 'Light', 'dark-theme' ); ?></button>
			<button type="button" data-scheme-choice="dark" aria-pressed="false"><?php echo esc_html__( 'Dark', 'dark-theme' ); ?></button>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">
		<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
		<h1 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Night is the starting point.', 'dark-theme' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"large"} -->
		<p class="has-large-font-size"><?php echo esc_html__( 'This theme starts dark and resolves its light palette, gradient, and duotone from the Daybreak style variation.', 'dark-theme' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"backgroundColor":"primary","textColor":"base","className":"scheme-lab__card","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group scheme-lab__card has-base-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:heading {"level":2,"textColor":"base"} -->
				<h2 class="wp-block-heading has-base-color has-text-color"><?php echo esc_html__( 'Palette preset', 'dark-theme' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'The light values come from a variation title lookup.', 'dark-theme' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"gradient":"signal","textColor":"contrast","className":"scheme-lab__card","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group scheme-lab__card has-contrast-color has-signal-gradient-background has-text-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:heading {"level":2} -->
				<h2 class="wp-block-heading"><?php echo esc_html__( 'Gradient preset', 'dark-theme' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Non-color styles in Daybreak must not leak into the theme.', 'dark-theme' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","className":"scheme-lab__card","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide scheme-lab__card">
		<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|portrait"}},"className":"scheme-lab__image"} -->
		<figure class="wp-block-image size-full scheme-lab__image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/scheme-lab.jpg" alt="<?php echo esc_attr__( 'An abstract geometric composition used to demonstrate the scheme-aware duotone preset.', 'dark-theme' ); ?>"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"align":"center","textColor":"secondary","fontSize":"small"} -->
	<p class="has-text-align-center has-secondary-color has-text-color has-small-font-size"><?php echo esc_html__( 'The pink “Fixed accent” badge has no light override and should remain unchanged.', 'dark-theme' ); ?></p>
	<!-- /wp:paragraph -->
</main>
<!-- /wp:group -->
