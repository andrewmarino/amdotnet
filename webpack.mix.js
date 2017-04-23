let mix = require('laravel-mix');

mix.setPublicPath('app/assets/')
mix.js('src/scripts/main.js', 'app/assets/scripts')
  .sass('src/styles/main.scss', 'app/assets/styles')
  .options({
    postCss: [
      require('postcss-import'),
      require('postcss-custom-media')
    ]
  })
  .disableNotifications();

if (mix.config.inProduction) {
  mix.version();
}
