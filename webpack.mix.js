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
    'resources/assets/css/libs/sky-forms.css',
    'resources/assets/css/libs/sky-mega-menu.css',
    'resources/assets/css/libs/sky-mega-menu-black.css',
    'resources/assets/css/libs/sky-tabs.css',
    'resources/assets/css/libs/animate.css',
    'resources/assets/css/libs/bootstrap.min.css',

], 'public/css/libs.css');


mix.scripts([
    
    'resources/assets/js/libs/jquery.min.js',  
    'resources/assets/js/libs/jquery-ui.min.js',
    'resources/assets/js/libs/bootstrap.bundle.min.js',  
    'resources/assets/js/libs/toastr.min.js',
    'resources/assets/js/jquery.js',
    'resources/assets/js/datatables.min.js',

], 'public/js/libs.js');

