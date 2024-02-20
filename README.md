# WordPress Community Themes

Welcome to the repository for Block Themes built by the WordPress community.

## About

WordPress is in a new era of theming and site creation. This repo encourages both experienced and new WordPress contributors to create more themes — demonstrating what can be done and how. This way we learn from and inspire each other.

The aim of this repo is to submit the block themes to the WordPress.org themes directory under the WordPress user, ensuring the quality of the code and design of said themes. This initiative will help more users without prior theming knowledge or who don't code to create high quality themes by themselves using the new site building tools.

### Getting Started

To get started with development you have a couple of options. You can set up a local environment or you can use the new [WordPress Playground](https://developer.wordpress.org/playground/) and build your theme online without needing to install anything at all on your machine.

**If you prefer to use the Playground:**

1. Visit the [Playground](https://playground.wordpress.net/?theme=twentytwentythree&plugin=gutenberg&plugin=create-block-theme&url=/wp-admin/index.php). This instance has the Create Block Theme plugin installed.
1. Go to Appearance/Site Editor and build your theme!
1. Export it using the Create Block Theme plugin under Appearance/Create Block Theme

The Playground has a few limitations and you won't be able to add new fonts to your theme using it.

**If you want to work locally:**

1. Set up a WordPress instance, here is a [handy guide to install WordPress locally](https://wordpress.org/support/article/installing-wordpress-on-your-own-computer/)
2. Clone / download this repository into your `/wp-content/themes/` directory
3. You may want to install the [Create Block Theme plugin](https://wordpress.org/plugins/create-block-theme/) to help you generate the theme files if you want to build your Theme directly on the Site Editor.

If it's your first time building a Block Theme, we suggest checking the Resources links for more information.

#### Requirements for local setup

- WordPress 6.1+
- PHP 5.6+
- License: [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html) or later

### How to contribute a new theme

You can contribute with code, designs or discussion.

To submit a theme design, include a Figma link or a zip file of your theme created using the Create Block Theme plugin. You can use the [Twenty Twenty-Three Figma Mockups](https://www.figma.com/community/file/1139275543113752375) as a reference.

We will kickstart this initiative by building child themes of Twenty Twenty-Three. The themes can include as many or as few templates as you prefer, and the rest will be inherited from the parent theme.

### Guidelines for new themes

When in doubt, check the [guidelines for the WordPress.org Themes repository](https://make.wordpress.org/themes/handbook/review/required/)!

As a reminder, some of the things to keep in mind when building a theme usually are:

- Paying attention that all strings are translatable. The best way to do this right now is to use block patterns for the areas of your theme that have strings on them. If you don't want that pattern to show in the inserter, you can do this like [TT3 does it for its 404 page](https://github.com/WordPress/twentytwentythree/blob/trunk/patterns/hidden-404.php).
- When deciding a name for your theme, consider [these guidelines](https://make.wordpress.org/themes/2013/02/26/clarifying-guidelines-for-theme-name/). If you want to make sure that the name you chose is available, have a look at the [list of themes on svn](https://themes.svn.wordpress.org/) for the repo.

### How to contribute to an existing theme

There's many ways to contribute to community themes that are a work in progress:

- By reviewing open PRs: test that the changes are working as intended. If the PR is including block markup, check that all translatable strings are wrapped inside translation functions. If the PR is adding new design elements, take into account accesibility concerns such as color contrast, font sizes and size scaling, etc.
- By adding PRs for open issues: some themes will need work on new templates or template parts. Search for the open issues for the theme you want to work on and pick one you wish to work on. Assign yourself to the issue so everyone knows someone is working on them.
- By adding block patterns to the theme. This can be done by extracting parts of the templates into patterns or by creating new ones that would fit the general design of the theme.
- By triaging existing issues and tagging them correctly for other contributors to find and work on.
- By opening new issues whenever you find a bug or a concern with the theme in progress.
- By adding to the discussion on open issues and PRs. Decisions are made by consensus, so please add your voice to the discussion!

### Pattern creation guidelines

[Reference guide for patterns in the handbook](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-patterns/).
A few things to have in mind when building patterns for the default theme:

- **Category selection**

When creating WordPress block patterns, it's important to carefully choose the appropriate category for your pattern. WordPress provides a set of default categories, each serving a specific purpose. Let's stick to using the default categories. We can add multiple of them separating them by commas. The list of the slug is [here](https://github.com/WordPress/gutenberg/blob/c20350c1d246163201375f090b0b7b4ab49b1dad/packages/block-editor/src/components/inserter/block-patterns-tab.js#L35).

- **Hiding patterns from the inserter**

You can control the visibility of your block pattern in the inserter by adding the following line of code when registering the pattern:

We do this for patterns we don't want the user to access via the inserter or the pattern library. This is usually the case for utility patterns that we create for translation purposes such as the 404 pattern.

We do this by adding the following line:

` * Inserter: no`

Let's prefix hidden patterns using `hidden-` when we name the pattern file.

- **Different translation functions and when to use them**

WordPress block patterns should be [internationalized](https://developer.wordpress.org/apis/internationalization/internationalization-guidelines/) to make them accessible to a global audience.

`esc_html_x()`: Employ this function when you need to translate and escape text for display within HTML. It's useful for multilingual websites as it provides translation support while also ensuring HTML safety.

`esc_html__()`: Similar to `esc_html_x()`, use this function for translating and escaping HTML-embedded text. It's a simpler version when context-specific translations are not needed.

`esc_attr__()` and `esc_attr_x()`: Use this function to escape and sanitize text meant for HTML attributes, such as image source URLs or link targets. It helps prevent security vulnerabilities by ensuring that user inputs are safe for use in attributes.

`esc_html_e`: works just like `esc_html__()` but you don't need to use `echo` to output the string

When we have simple HTML tags in our translatable strings we would use `echo wp_kses_post( __( 'Lorem ipsum <em>Hello</em> dolor sit amet.', 'texdomain' ) );`. This syntax is clearer for translators than using `sprintf()` and it allows them to remove the markup if it doesn't work on their own language.

These functions enhance security and support localization efforts in WordPress block patterns, ensuring that text is safe and can be easily translated.

- **Patterns with images**

To create dynamic image links in your block patterns, utilize the `get_template_directory_uri()` function. This function retrieves the URL of the current theme's directory, ensuring that the image links are relative to the theme and work correctly even if the website's directory structure changes or if we are using a child theme. This is essential for maintaining the stability and portability of your patterns.

Make sure to add alt text to your images and to make sure to remove the IDs from them. An example would be:

```
<!-- wp:image {"id":125,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="http://wp-stable.test/wp-content/themes/twentytwentyfour/assets/images/project.webp" alt="" class="wp-image-125"/></figure>
<!-- /wp:image -->
```

would turn into

```
<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/project.webp" alt="<?php echo esc_attr_x( 'Picture of a building', 'Alt text for project picture', 'twentytwentyfour' ); ?>"/></figure>
<!-- /wp:image -->
```

- **Use of Post Types, Block Types and Template Types**

We use Block Types when the pattern uses custom markup for a specific block or one of the default template parts (footer and header). Using this will suggest the pattern when someone inserts said block or template part. This is commonly used for query, post-content block, template or footer.

Template Types is used when we want our pattern as a suggestion for a specific template. In this case we provide the template slug (404, home, single...)

Post Types is used to restrict the post type we want the pattern to be used for. commonly used for full page patterns.

- **Spacing, colors and font sizes**

Using presets for spacing, font sizes, and colors in WordPress block patterns is preferred over hardcoded values for three key reasons:

Consistency: Presets ensure a uniform design across the theme, promoting a cohesive visual identity.

Scalability: They make global design changes easier during development, saving time and effort.

Accessibility: Presets facilitate adherence to accessibility standards, making your patterns more usable and readable for a wider audience.

- **Other tips**

In the same way we remove IDs from image blocks, we need to remove queryId from query blocks too. Also, if any of our template parts have a theme attribute, that needs to remove too.

`<!-- wp:query {"queryId":18,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->`

turns into

`<!-- wp:query {"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->`

and

`<!-- wp:template-part {"slug":"header-portfolio","theme":"twentytwentyfour","area":"header","tagName":"header"} /-->`

turns into

`<!-- wp:template-part {"slug":"header-portfolio","area":"header","tagName":"header"} /-->`

If we are constantly assigning properties to the same block over and over again (ie: border radius to images), consider moving those properties to the theme.json.

When building full page patterns, let's prefix them by using page-

One way to control the order in which patterns are displayed in the inserter is by changing the name of the file (they are sorted alphabetically)

### Theme Utilities

We have a node script which you can use to updated patterns ready for deployment. It does the following steps:

1. Updates text strings to be wrapped in i18n functions.
2. Changes image paths so that they point to the directory that the theme is installed in.

To use it, run `npm run patterns:escape` and confirm the name of the theme that you want to escape.

## Resources

- [Twenty Twenty-Three Figma Mockups](https://www.figma.com/community/file/1139275543113752375)
- [Twenty Twenty-Three Project kickoff post](https://make.wordpress.org/design/2022/08/10/twenty-twenty-three-default-theme-project-kickoff/)
- [Setting up a development environment](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/)
- [Create Block Theme plugin](https://github.com/WordPress/create-block-theme)
- [Block Theme documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview)
- [Global Styles & theme.json documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/)
- [Simple Site Design with Full Site Editing Course](https://learn.wordpress.org/course/simple-site-design-with-full-site-editing/)
- [Low-Code Block Theme Course](https://learn.wordpress.org/course/develop-your-first-low-code-block-theme/)
- [A Developer's guide to Block Themes](https://learn.wordpress.org/course/a-developers-guide-to-block-themes-part-1/)
