let mix = require('laravel-mix');
let glob = require('glob-all');
let PurgecssPlugin = require('purgecss-webpack-plugin');

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

// Options
mix.options({
  postCss: [
    require('postcss-import'),
    require('postcss-css-variables'),
    require('postcss-custom-media')
  ],
  processCssUrls: false
});

// JavaScript
mix
  .js(
    [`${src}/scripts/lib/modaal.js`, `${src}/scripts/main.js`],
    `${dist}/scripts/main.js`
  )
  .autoload({
    jquery: ['$', 'window.jQuery', 'jQuery']
  });

// PostCSS
mix.sass(`${src}/styles/main.scss`, `${dist}/styles`);

// Images
mix.copyDirectory(`${src}/images`, `${dist}/images`);

// Browsersync
mix.browserSync({
  proxy: 'andrewmarino.test',
  notify: false,
  files: [`${dist}/styles/**/*.css`, `${dist}/styles/**/*.js`, '*.{php|html}']
});

// PurgeCSS extractor for allowing special characters in class names.
// https://github.com/FullHuman/purgecss#extractor
class LaravelMixExtractor {
  static extract(content) {
    return content.match(/[A-Za-z0-9-_:\/]+/g) || [];
  }
}

if (mix.inProduction()) {
  // Hash and version files.
  mix.version();

  // Purge unused CSS.
  mix.webpackConfig({
    plugins: [
      new PurgecssPlugin({
        paths: () =>
          glob.sync([
            path.join(__dirname, 'app/site/templates/**/*.blade.php'),
            path.join(__dirname, 'src/scripts/**/*.js')
          ]),
        extractors: [
          {
            extractor: LaravelMixExtractor,
            extensions: ['html', 'js', 'php']
          }
        ]
      })
    ]
  });
}
