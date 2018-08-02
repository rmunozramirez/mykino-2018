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
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([

    'resources/assets/css/libs/parsley.css', 
    'resources/assets/css/libs/select2.css',  
    'resources/assets/css/libs/summernote-bs4.css',   
    'resources/assets/css/libs/toastr.css',   
    'resources/assets/font-awesome/css/font-awesome.css',
    'resources/assets/css/libs/admin.min.css',          

], 'public/css/libs.css');


mix.scripts([

    'resources/assets/js/libs/admin.min.js',
    'resources/assets/js/libs/parsley.min.js',
     'resources/assets/js/libs/select2.min.js',   
    'resources/assets/js/libs/summernote-bs4.js',     
    'resources/assets/js/libs/toastr.min.js',
    'resources/assets/js/jquery.js', 

], 'public/js/libs.js');

