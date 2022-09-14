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
mix
    /*
     |------------------------------------
     | CSS - Style
     |------------------------------------
     | Compilação de todos os arquivos css
     */
    .postCss('resources/css/app.css', 'public/css')
    .postCss('resources/js/lib/magic/dist/magic.css', 'public/css')
    .postCss('node_modules/bootstrap-icons/font/bootstrap-icons.css', 'public/css')
    .postCss('node_modules/primeicons/primeicons.css', 'public/css')
    .combine([
        'public/css/app.css',
        'public/css/magic.css',
        'public/css/bootstrap-icons.css',
        'public/css/primeicons.css',
    ], 'public/css/style.css')
    .minify('public/css/style.css')

    /*
     |------------------------------------
     | JS - JavaScript
     |------------------------------------
     | Compilação de todos os arquivos js
     */
    .scripts([
        'resources/js/lib/jquery.js',
        'resources/js/lib/jquery.form.js',
        'resources/js/lib/maskinput.js',
        'resources/js/lib/maskMoney.js',
        'resources/js/lib/preview-password.js',
        'resources/js/lib/popper.min.js',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
    ], 'public/js/libary.js').minify('public/js/libary.js')

    .scripts([
        'resources/js/script.js',
        'resources/js/components.js',
        'resources/js/ajax.js',
    ], 'public/js/script.js').minify('public/js/script.js')

    /*
    |------------------------------------
    | ASSETS - Images e diversos
    |------------------------------------
    | Compilação de todos os arquivos diversos da app
    */
    .copyDirectory('resources/images', 'public/images')
    .options({
        processCssUrls: false,
        autoprefixer: false
    })
    .version();
