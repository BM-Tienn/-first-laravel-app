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

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);
mix.postCss('resources/css/myapp.css','public/css');
mix.postCss('resources/themes/web/css/bootstrap.css','public/css/mypage');
mix.postCss('resources/themes/web/css/font-awesome.css','public/css/mypage');
mix.postCss('resources/themes/web/css/skdslider.css','public/css/mypage');
mix.postCss('resources/themes/web/css/style.css','public/css/mypage');
mix.postCss('resources/themes/web/css/admin.css','public/css/mypage');
mix.js('resources/themes/web/js/bootstrap.min.js','public/js/mypage');
mix.js('resources/themes/web/js/easing.js','public/js/mypage');
mix.js('resources/themes/web/js/jquery-1.11.1.min.js','public/js/mypage');
mix.js('resources/themes/web/js/minicart.min.js','public/js/mypage');
mix.js('resources/themes/web/js/move-top.js','public/js/mypage');
mix.js('resources/themes/web/js/responsiveslides.min.js','public/js/mypage');
mix.js('resources/themes/web/js/skdslider.min.js','public/js/mypage');
mix.copyDirectory('resources/themes/web/images','public/images');

mix.copyDirectory('vendor/almasaeed2010/adminlte','public/themes/adminlte')
