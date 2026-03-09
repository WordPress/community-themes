# AGENTS.md

This file provides guidance to AI coding agents working in this repository.

## Repository Overview

Monorepo of WordPress block themes built by the WordPress community, aimed at submission to the WordPress.org themes directory. Themes use the WordPress block editor and Full Site Editing (FSE) capabilities.

**Tech stack**: PHP, JSON (theme.json), HTML (block templates), CSS, Node.js (tooling only)

**Node version**: 20.10.0 (see `.nvmrc`)

## Repository Structure

```
community/
├── <theme-name>/           # Each theme is its own directory
│   ├── style.css           # Theme metadata header + base styles (REQUIRED)
│   ├── theme.json          # Theme config: colors, typography, spacing presets
│   ├── functions.php       # Optional: theme setup, enqueue scripts
│   ├── readme.txt          # Theme documentation for WordPress.org
│   ├── screenshot.png      # Theme preview (1200x900 recommended)
│   ├── templates/          # Full-page block templates (.html)
│   ├── parts/              # Template parts: headers, footers (.html)
│   ├── patterns/           # Reusable block patterns (.php)
│   └── assets/             # Images, fonts, and other media
├── theme-utils.mjs         # Node utility script (pattern escaping, schema validation)
├── package.json
└── .lintstagedrc.json      # Runs schema:validate on theme.json on commit
```

## Commands

```bash
# Install dependencies (first time)
npm install

# Escape pattern strings for i18n and update image paths (run after editing patterns)
npm run patterns:escape

# Validate all theme.json files against JSON schema
npm run schema:validate
```

`schema:validate` runs automatically on every `git commit` via lint-staged for changed `theme.json`, `styles/*.json`, and `assets/fonts/*.json` files. If validation fails, the commit is blocked.

## style.css Header — Required Fields

Every theme MUST have a `style.css` with this header block:

```css
/*
Theme Name: My Theme Name
Theme URI: https://github.com/WordPress/community-themes/tree/trunk/my-theme-name
Author: the WordPress team
Author URI: https://wordpress.org/
Description: Brief description here.
Requires at least: X.X
Tested up to: X.X
Requires PHP: 7.4
Version: 0.0.1
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Template: parentthemeslug (Optional)
Text Domain: my-theme-name
Tags: one-column, custom-colors, ...
*/
```

- **Text Domain MUST match the theme's directory name** (e.g., directory `blue-note` → text domain `blue-note`)
- **Template** field specifies the parent theme slug (most themes here are child themes of `twentytwentythree`)
- **Theme Name MUST be unique** — check https://themes.svn.wordpress.org/ before naming a new theme

## Pattern Development — Critical Rules

Pattern files live in `patterns/`. They can be HTML or PHP files, but if they contain dynamic data (e.g. image paths or translations, they must be `.php` files.

### 1. File Header (required in every pattern file)

```php
<?php
/**
 * Title: My Pattern Name
 * Slug: theme-slug/my-pattern-name
 * Categories: featured, text
 */
```

For utility/hidden patterns:
```php
<?php
/**
 * Title: 404
 * Slug: theme-slug/hidden-404
 * Inserter: no
 */
```

### 2. ALL user-facing strings MUST be wrapped in i18n functions

```php
// HTML content
<?php echo esc_html__( 'Read more', 'theme-name' ); ?>

// HTML content with context
<?php echo esc_html_x( 'Posted in', 'noun: post category label', 'theme-name' ); ?>

// HTML attributes
<img alt="<?php echo esc_attr__( 'Description', 'theme-name' ); ?>">

// Content that may contain HTML tags
<?php echo wp_kses_post( __( 'Visit our <strong>store</strong>', 'theme-name' ) ); ?>
```

The `npm run patterns:escape` script can help automate wrapping strings.

### 3. Image paths MUST use dynamic template directory URI

```php
<!-- CORRECT -->
src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photo.webp"

<!-- WRONG — will break on different installations -->
src="/wp-content/themes/my-theme/assets/images/photo.webp"
```

### 4. Remove block-specific IDs from pattern markup

When copying patterns from the block editor, MUST remove:
- `"id"` from image blocks (`<!-- wp:image {"id":123} -->` → `<!-- wp:image {} -->`)
- `"queryId"` from query blocks
- `"theme"` attribute from template-part blocks
- `"ref"` attribute from navigation blocks


These IDs are environment-specific and will break on other installations.

### 5. Use theme presets, not hardcoded CSS values

```json
// CORRECT — use palette slug
"textColor": "var:preset|color|contrast"

// WRONG — hardcoded value
"style": { "color": { "text": "#000000" } }
```

Use slugs defined in the theme's `theme.json` for colors, font sizes, and spacing.

### 6. Pattern file naming conventions

- Regular patterns: `pattern-name.php`
- Hidden utility patterns (404, navigation, etc.): `hidden-pattern-name.php` + `Inserter: no` header
- Full page patterns: `page-pattern-name.php` + * Post Types: page, wp_template

### 7. Pattern categories

| Category | Use when |
|---|---|
| Default WP categories | General-purpose patterns |
| `Block Types` | Patterns tied to a specific block type |
| `Template Types` | Patterns for 404, home, single templates |
| `Post Types` | Patterns restricted to specific post types |

## theme.json

- Defines the design system: color palette, font sizes, spacing scale, typography settings
- Changes are validated against JSON schema on commit
- Use `"slug"` values for colors and font sizes — these become CSS custom properties

Example structure:
```json
{
  "version": 2,
  "settings": {
    "color": {
      "palette": [
        { "slug": "contrast", "color": "#000", "name": "Contrast" },
        { "slug": "base", "color": "#fff", "name": "Base" }
      ]
    },
    "typography": {
      "fontSizes": [
        { "slug": "small", "size": "0.875rem", "name": "Small" }
      ]
    }
  },
  "styles": {
    "typography": { "fontFamily": "var(--wp--preset--font-family--inter)", "lineHeight": "1.5" },
    "elements": {
      "h1": { "typography": { "fontSize": "var(--wp--preset--font-size--xx-large)" } },
      "link": { ":hover": { "typography": { "textDecoration": "none" } } }
    },
    "blocks": {
      "core/quote": {
        "border": { "color": "var(--wp--preset--color--contrast)", "style": "solid", "width": "0 0 0 2px" }
      }
    }
  }
}
```

- **`styles`** — Global defaults (color, typography, spacing) for the whole site
- **`styles.elements`** — Targets semantic elements (`heading`, `h1`–`h6`, `link`, `button`); supports pseudo-selectors (`:hover`, `:focus`)
- **`styles.blocks`** — Scoped styles for specific block types (e.g. `core/quote`, `core/button`)

## Block Templates and Parts

Templates in `templates/` and parts in `parts/` are `.html` files containing block markup.

Common templates to include: `index.html`, `home.html`, `single.html`, `page.html`, `archive.html`, `404.html`, `search.html`

Common parts: `header.html`, `footer.html`

## Child Themes vs. Standalone Themes

A child theme will inherit styles and templates from its parent. To make a child of TwentyTwentyThree:
- `Template: twentytwentythree` in `style.css`
- Inherit templates, parts, and patterns from the parent
- Override by creating files with the same name in the child theme

To create a standalone block themes, don't include a `Template` field.

## Common Pitfalls

- **Don't hardcode image paths** — always use `get_template_directory_uri()`
- **Don't leave block IDs in patterns** — remove `id`, `queryId`, and `theme` attributes
- **Text domain must match directory name** — mismatches break i18n
- **Don't use hardcoded hex colors** in block attributes — use palette slugs from theme.json
- **Don't edit WordPress core files** — never modify anything outside of the theme directory
- **Don't duplicate theme names** — check themes.svn.wordpress.org first
- **Don't add `.xml`, `.sh`, `.sql` files** to themes — not allowed per WordPress.org guidelines (see `.gitignore`)
- **Don't skip schema validation** — if `theme.json` changes don't validate, the commit will fail

## Accessibility Requirements

- Color contrast must meet WCAG 2.1 AA (4.5:1 for normal text, 3:1 for large text)
- Images in patterns must have descriptive `alt` text
- Font sizes must remain readable (avoid sizes below 14px for body text)
- Interactive elements must have visible focus states

## WordPress.org Submission Guidelines

Themes submitted to WordPress.org must:
- Have a unique theme name
- Include a `readme.txt` with description, changelog, and credits
- Have a `screenshot.png` (1200x900px)
- Pass the Theme Check plugin requirements
- All strings translatable
- No calls to external services without user consent
- GPL-compatible license for all assets

## Development Environment

**WordPress Playground (no local setup required)**: Use the Playground links in `README.md` to preview themes in-browser.

**wp-env (recommended for local development)**: Requires Docker. Boots a sandboxed WordPress instance with all themes from this repo mounted and the Twenty Twenty-Three parent theme pre-installed.

```bash
# Standard WordPress (bundled editor)
npm run env:start

# Activate a specific theme on start
npm run env:start -- --theme blue-note

# WordPress + Gutenberg plugin (latest stable)
npm run env:start:gutenberg -- --theme blue-note

npm run env:stop     # Stop the environment (preserves data)
npm run env:destroy  # Remove containers and volumes (fresh start)
```

Site runs at `http://localhost:8888` (or the next available port if 8888 is taken) — credentials: `admin` / `password`.

Pass `--theme <theme-slug>` to activate a specific theme. The slug must match the theme's directory name (e.g. `blue-note`, `archivist`). If the environment is already running, `env:start --theme <slug>` will skip startup and just switch the active theme.

The active port is stored in `.wp-env-port` (git-ignored) so that `env:stop` and `env:destroy` always target the correct instance.

All theme directories are live-mounted, so changes are reflected immediately without restarting. To use a local Gutenberg checkout instead of the downloaded plugin, add a `.wp-env.override.json` at the repo root:

```json
{
  "plugins": [ "../gutenberg" ]
}
```

**Manual local development**: Clone this repo into your WordPress install's `wp-content/themes/` directory. Each theme directory will appear as a separate theme in the admin.

Recommended plugin: Create Block Theme (helps generate theme files from the editor).
