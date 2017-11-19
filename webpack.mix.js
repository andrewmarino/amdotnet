let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

const src = 'src';
const dist = 'app/assets';

mix.setPublicPath(`${dist}`);
mix.setResourceRoot('./');

// JavaScript
mix.js(`${src}/scripts/main.js`, `${dist}/scripts`);
mix.autoload({
  jquery: ['$', 'window.jQuery', 'jQuery']
});

// PostCSS
mix.sass(`${src}/styles/main.scss`, `${dist}/styles`);
mix.options({
  processCssUrls: false,
  postCss: [
    require('postcss-import'),
    require('postcss-css-variables'),
    require('postcss-custom-media')
  ]
});

// Images
mix.copyDirectory(`${src}/images`, `${dist}/images`);

// Browsersync
mix.browserSync({
  proxy: 'local.am.dev',
  notify: false,
  files: [`${dist}/styles/**/*.css`, `${dist}/styles/**/*.js`, '*.{php|html}']
});

// Source maps when not in production.
if (!mix.inProduction()) {
  mix.sourceMaps();
}

// Hash and version files in production.
if (mix.inProduction()) {
  mix.version();
}
