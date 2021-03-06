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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');
mix.sass('resources/assets/sass/home.scss', 'public/frontend/css')
   .sass('resources/assets/sass/video.scss', 'public/frontend/css')
   .sass('resources/assets/sass/news.scss', 'public/frontend/css')
   .sass('resources/assets/sass/post_detail.scss', 'public/frontend/css')
   .sass('resources/assets/sass/key_word_tag.scss', 'public/frontend/css')
   .sass('resources/assets/sass/lo_trinh_hoc.scss', 'public/frontend/css');
mix.sass('resources/assets/fonts/font-awesome-4.7.0/scss/font-awesome.scss', 'public/frontend/css');
