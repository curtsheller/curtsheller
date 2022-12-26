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

// npx tailwindcss build resources/css/app.css -o public/css/app.css
mix.postCss('resources/css/app.css', 'public/css/app.css', [
        require('postcss-each'),
        require('tailwindcss'),
    ]);


mix.js('resources/js/app.js', 'public/js');
