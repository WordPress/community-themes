# Experimental color scheme test themes

These themes exercise the stack in
[WordPress/gutenberg#80698](https://github.com/WordPress/gutenberg/pull/80698)
and [WordPress/gutenberg#80746](https://github.com/WordPress/gutenberg/pull/80746).
They require a Gutenberg build containing both. Their `$schema` URLs
intentionally point at the head branch of the duotone child PR.

Each theme declares its opposite scheme inline, mirroring the CSS
`prefers-color-scheme` model: the base palette is the default, and
`settings.color.light` / `settings.color.dark` override the other scheme.

## Coverage

| Feature | `light-theme` | `dark-theme` |
| --- | --- | --- |
| Default scheme | Light | Dark |
| Named schemes | Citrus Daylight / Electric Dusk | Midnight Terminal / Paper Morning |
| Opposite scheme | Inline `settings.color.dark` | Inline `settings.color.light` |
| Palette overrides | Yes | Yes |
| Gradient overrides | Yes (`signal`) | Yes (`signal`) |
| Duotone overrides | Yes (`portrait`) | Yes (`portrait`) |
| Unmatched preset fallback | `fixed-accent` | `fixed-accent` |
| `data-scheme` force/reset | System/Light/Dark test helper | System/Light/Dark test helper |

## Setup

Use this repository's wp-env with a local Gutenberg checkout whose current
branch contains the full stack:

```json
{
	"plugins": [ "../gutenberg" ]
}
```

From the Gutenberg checkout, fetch and check out the duotone child branch, which
is stacked on the data model:

```bash
git fetch origin pull/80746/head:try/dark-mode-duotone
git switch try/dark-mode-duotone
```

Then start either theme from this repository:

```bash
npm run env:start:gutenberg -- --theme light-theme
npm run env:start:gutenberg -- --theme dark-theme
```

## Manual checks

Repeat these checks for both themes:

1. With **System** selected, change the operating system appearance. The page
   should update without a reload.
2. Use the three-button test helper to force **Light**, **Dark**, and **System**.
   System must remove the `data-scheme` attribute, and a forced value must win
   over the operating-system preference.
3. Reload the page. The helper must return to the effective operating-system
   preference, because it stores nothing.
4. Confirm the page background, text, primary card, Signal gradient, and Portrait
   duotone all change together.
5. Confirm the Fixed accent badge does not change. Its slug has no override.
6. In DevTools, confirm the same `--wp--preset--color--*` and
   `--wp--preset--gradient--signal` properties are redefined inside the expected
   `prefers-color-scheme` gate and forced `data-scheme` selector.
7. Confirm a used duotone injects `wp-duotone-portrait--dark` in `light-theme`
   and `wp-duotone-portrait--light` in `dark-theme`, and that
   `--wp--preset--duotone--portrait` points to it in the matching gate.
8. Open the Site Editor and repeat the operating-system appearance check in the
   editor canvas. It loads the same generated stylesheet as the front end.

Theme-specific expectations:

- `light-theme`: the dark scheme uses the restrained navy/pink values from
  `settings.color.dark`.
- `dark-theme`: the light scheme uses the mint/green values from
  `settings.color.light`, and the theme's Georgia font is unchanged in both
  schemes — a scheme section carries color presets only.

## Backward compatibility

Deactivate Gutenberg or use a build without #80698. Both themes should remain
usable with their base palettes, and no scheme media-query overrides should be
emitted. Re-enable the stacked build before testing automatic switching.
