# Bare Naked

A minimal, opinionated **WordPress starter theme** built on [TailPress](https://tailpress.io/) (Tailwind CSS for WordPress) with [Advanced Custom Fields (ACF)](https://www.advancedcustomfields.com/) wired in. It's the base I reach for when starting a new custom WordPress build — a clean slate with Tailwind, a sensible template hierarchy, and ACF field-group scaffolding already in place.

- **Theme:** Bare Naked · **Version:** 3.0.0 · **License:** MIT
- Built on TailPress (Tailwind CSS + WordPress) with an ACF integration layer.

## What it gives you

- **Tailwind CSS** compiled through the TailPress toolchain (`tailwind.config.js`, `postcss.config.js`, a `safelist.txt` for classes generated at runtime).
- **A full template set** — `header.php`, `footer.php`, `index.php`, `single.php`, `comments.php`, `404.php`, plus `template-parts/` for partials.
- **ACF integration** — helper functions for registering ACF field groups in code (see `functions/` and `functions.php`).
- **Theme structure** — `inc/`, `lib/`, `resources/`, `utilities/`, and `theme.json` for block/theme settings.

## Getting started

```sh
# install build tooling
npm install        # or: yarn

# compile Tailwind for development (watch)
npm run dev

# build for production
npm run build
```

Drop the theme folder into `wp-content/themes/`, then activate **Bare Naked** from the WordPress admin. ACF (free or Pro) should be installed for the field-group helpers to take effect.

## Built on

[TailPress](https://tailpress.io/) by Jeffrey van Rossum (MIT) provides the Tailwind + WordPress foundation. Bare Naked adds the ACF layer, template set, and project conventions on top.

## License

MIT — see [LICENSE](LICENSE).
