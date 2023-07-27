<?php
/**
 * Title: Striped image and text
 * Slug: blue-note/thin-stripes
 * Categories: text
 */
?>
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2","fontSize":"2.5rem"}}} -->
<p style="font-size:2.5rem;line-height:1.2"><?php echo wp_kses_post( __( 'Waters held three jobs: in <em>As Thousands Cheer</em>, as a singer for Jack Denny &amp; His Orchestra on a national radio program, and in nightclubs. She became the highest-paid performer on Broadway.', 'blue-note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|black-pink"}},"className":"is-style-blue-note-thin-stripes"} -->
<figure class="wp-block-image size-full is-style-blue-note-thin-stripes"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Ethel-Waters.jpg" alt=""/></figure>
<!-- /wp:image -->
