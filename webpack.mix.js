let mix = require('laravel-mix');
let CopyWebpackPlugin = require('copy-webpack-plugin');
let { default: ImageminPlugin } = require('imagemin-webpack-plugin');
let imageminMozjpeg = require('imagemin-mozjpeg');
let glob = require('glob-all');
let PurgecssPlugin = require('purgecss-webpack-plugin');
let LaravelMixExtractor = require('./src/scripts/util/LaravelMixExtractor');

/**
 * Asset directory paths.
 */
const src = 'src';
const dist = 'app/assets';

/**
 * Options, custom image optimization, and Laravel Mix config.
 */
mix
  .options({
    autoprefixer: {
      options: {
        browsers: ['last 2 versions']
      }
    },
    processCssUrls: false,
    postCss: [
      require('postcss-import'),
      require('postcss-css-variables'),
      require('postcss-custom-media')
    ]
  })
  .setPublicPath(`${dist}`)
  .webpackConfig({
    plugins: [
      new CopyWebpackPlugin([
        {
          from: `${src}/images`,
          to: `images`
        }
      ]),
      new ImageminPlugin({
        optipng: { optimizationLevel: 7 },
        gifsicle: { optimizationLevel: 3 },
        pngquant: { quality: '65-90', speed: 4 },
        svgo: { removeUnknownsAndDefaults: false, cleanupIDs: true },
        plugins: [imageminMozjpeg({ quality: 80 })]
      })
    ]
  });

/**
 * Web fonts.
 */
mix.copy(`${src}/fonts`, `${dist}/fonts`);

/**
 * Main assets (JS & CSS).
 */
mix.js(`${src}/scripts/main.js`, `${dist}/scripts`);
mix.sass(`${src}/styles/main.scss`, `${dist}/styles`);

/**
 * Production build.
 */
if (mix.inProduction()) {
  mix.version().webpackConfig({
    plugins: [
      new PurgecssPlugin({
        paths: () =>
          glob.sync([
            path.join(__dirname, 'app/site/templates/**/*.blade.php'),
            path.join(__dirname, 'src/scripts/**/*.js')
          ]),
        extractors: [
          {
            extensions: ['html', 'js', 'php'],
            extractor: LaravelMixExtractor
          }
        ],
        whitelistPatterns: [/^tobi/]
      })
    ]
  });
}
