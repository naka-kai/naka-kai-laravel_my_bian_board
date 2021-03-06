const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/pref.js', 'public/js')
    .js('resources/js/morePosts.js', 'public/js')
    .js('resources/js/messageAcd.js', 'public/js')
    .js('resources/js/searchReset.js', 'public/js')
    .sass('resources/sass/pref.scss', 'public/css')
    .css('resources/css/board-index.css', 'public/css')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .webpackConfig(require('./webpack.config'));

if (mix.inProduction()) {
    mix.version();
}
