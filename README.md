# GBR Electrical Services, LLC — Website

PHP + Tailwind CSS site for lightsonpa.com.

## CSS build (Tailwind)

Tailwind utility classes are compiled locally into `assets/css/tailwind.css` —
there is no CDN script in production. Whenever you add or change a Tailwind
class in any `.php` file, that compiled CSS file must be regenerated before
deploying, or the new classes won't render.

```bash
npm install        # first time only
npm run watch:css   # rebuilds assets/css/tailwind.css automatically while you edit
npm run build:css   # one-off minified build — run this before committing/deploying
```

`assets/css/tailwind.css` is committed to the repo (the production host
serves static PHP with no Node build step), so always run `build:css` and
commit the updated file as part of any change that touches classes.

Brand colors/fonts live in `tailwind.config.js`. Custom component CSS
(buttons, card-lift, dot-grid, etc.) lives in `assets/css/tailwind-input.css`
under `@layer components`.
