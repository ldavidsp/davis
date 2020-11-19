const mix = require('laravel-mix');
mix.sourceMaps();
mix.webpackConfig({devtool: "inline-source-map"});
mix.js('./assets/js/src/script.js', './assets/js')
  .sass('./assets/scss/style.scss', './assets/css', {
    sassOptions: {relativeUrls: false}
  })
  .options({processCssUrls: false});
