const mix = require('laravel-mix');

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

mix.sass('resources/sass/app.scss', 'public/css/app.css');
mix.minify('public/css/app.css');
mix.scripts(['resources/assets/js/jquery-3.3.1.min.js','resources/assets/js/main.js','resources/assets/js/libs.js'], 'public/js/app.js');
mix.minify('public/js/app.js');
mix.copyDirectory('resources/assets/fonts', 'public/assets/fonts');
mix.copyDirectory('resources/assets/images', 'public/assets/images');
