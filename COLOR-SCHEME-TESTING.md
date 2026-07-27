# Experimental color scheme test themes

These themes exercise the published stack in
[WordPress/gutenberg#80698](https://github.com/WordPress/gutenberg/pull/80698)
and [WordPress/gutenberg#80746](https://github.com/WordPress/gutenberg/pull/80746),
plus the in-progress `core/color-scheme-toggle` child branch. They require a
Gutenberg build containing the full stack. Their `$schema` URLs intentionally
point at the head branch of the duotone child PR.

## Coverage

| Feature | `light-theme` | `dark-theme` |
| --- | --- | --- |
| Default scheme | Light | Dark |
| Named schemes | Citrus Daylight / Electric Dusk | Midnight Terminal / Paper Morning |
| Opposite scheme | Inline `settings.color.dark` | `lightScheme: "Paper Morning"` |
| Palette overrides | Yes | Yes, from style variation |
| Gradient overrides | Yes | Yes, from style variation |
| Duotone overrides | Yes | Yes, from style variation |
| Unmatched preset fallback | `fixed-accent` | `fixed-accent` |
| Inline beats variation reference | `dark` must beat `Reference Dark` | Not applicable |
| Ignore non-color variation styles | Not applicable | Paper Morning's magenta/green and Comic Sans styles must not leak |
| Core Color Scheme Toggle block | Yes | Yes |
| `data-scheme` force/reset | Core toggle plus System/Light/Dark test helper | Core toggle plus System/Light/Dark test helper |

## Setup

Use this repository's wp-env with a local Gutenberg checkout whose current
branch contains the full stack:

```json
{
	"plugins": [ "../gutenberg" ]
}
```

From the Gutenberg checkout, fetch and check out the latest child branch. Until
the toggle branch is published, start from the duotone child and apply the
in-progress toggle changes:

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
2. Use the Core Color Scheme Toggle. It must render on the front end, expose a
   single switch named "Dark mode", update `aria-checked`, and toggle
   `document.documentElement.dataset.scheme` between `light` and `dark`.
3. Use the three-button test helper to force **Light**, **Dark**, and **System**.
   System must remove the `data-scheme` attribute.
4. Reload the page. Both controls must return to the effective operating-system
   preference because neither control stores anything.
5. Confirm the page background, text, primary card, Signal gradient, and Portrait
   duotone all change together.
6. Confirm the Fixed accent badge does not change. Its slug has no override.
7. In DevTools, confirm the same `--wp--preset--color-*` and
   `--wp--preset--gradient--signal` properties are redefined inside the expected
   `prefers-color-scheme` gate and forced `data-scheme` selector.
8. Confirm a used duotone injects `wp-duotone-portrait--dark` in `light-theme`
   and `wp-duotone-portrait--light` in `dark-theme`, and that
   `--wp--preset--duotone--portrait` points to it in the matching gate.
9. Open the Site Editor. Confirm the Core toggle has a static preview and repeat
   the OS appearance check in the editor canvas.

Theme-specific checks:

- `light-theme`: the dark scheme must use the restrained navy/pink values from
  inline `settings.color.dark`, not the neon green/magenta values in Reference
  Dark. This verifies inline precedence over `darkScheme`.
- `dark-theme`: light mode must use Paper Morning's color presets while retaining
  the theme's Georgia font. A magenta background, green text, or Comic Sans
  indicates that non-color variation data leaked into scheme resolution.

For the toggle block's support-gate negative test, activate a theme without
`settings.color.light` or `settings.color.dark`, insert the block, and confirm
its inspector warning appears and its front-end render is empty.

## Backward compatibility

Deactivate Gutenberg or use a build without #80698. Both themes should remain
usable with their base palettes, and no scheme media-query overrides should be
emitted. Re-enable the stacked build before testing automatic switching.
