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

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/style.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/style.scss', 'public/css')
   .copyDirectory('vendor/font-awesome', 'public/vendor/font-awesome')
   .copyDirectory('vendor/simple-line-icons', 'public/vendor/simple-line-icons')
   .copyDirectory('vendor/jquery-easing', 'public/vendor/jquery-easing');
