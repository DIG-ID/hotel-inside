// webpack.mix.js
let mix = require('laravel-mix');

mix.webpackConfig({
  stats: {
    children: true
  }
});

mix
  .setPublicPath('dist')
  .setResourceRoot('./')
  .autoload({
    jquery: ['$', 'window.jQuery']
  })
  .js('assets/js/main.js', 'dist')
  .sass('assets/sass/main.sass', 'dist')
  .sass('assets/sass/admin-login.sass', 'dist')
  //.sass('template-parts/blocks/information-box/information-box.sass', 'dist/blocks/information-box')

  .disableNotifications()
  .browserSync({
    proxy: "localhost/hotel-inside",
    files: ["./**/*.php", "./dist/*.js", "./dist/*.css"]
  });

if (!mix.inProduction()) {
  mix
    .webpackConfig({
      devtool: "source-map"
    })
    .sourceMaps();
}

if (mix.inProduction()) {
  mix.version();
}