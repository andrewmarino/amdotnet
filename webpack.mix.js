const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

/**
 * Asset directory paths.
 */
const src = 'assets/src';
const dist = 'assets/dist';

/**
 * Options and other Laravel Mix configs.
 */
mix
  .options({
    processCssUrls: false,
    postCss: [
      require('postcss-import'),
      require('postcss-css-variables'),
      require('postcss-custom-media'),
      tailwindcss('./tailwind.config.js'),
    ],
  })
  .setPublicPath(`${dist}`);

/**
 * CSS
 */
mix.sass(`${src}/styles/main.scss`, `${dist}/styles`);

/**
 * JavaScript
 */
mix.js(`${src}/scripts/main.js`, `${dist}/scripts`);

/**
 * Images
 */
mix.copy(`${src}/images`, `${dist}/images`);

/**
 * Production build.
 */
if (mix.inProduction()) {
  mix.version();
}
