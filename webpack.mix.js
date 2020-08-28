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

mix.copyDirectory('node_modules/startbootstrap-agency/dist/assets/img', 'public/assets/img')
    .styles('node_modules/startbootstrap-agency/dist/css/styles.css', 'public/css/styles.css')
    .styles('resources/css/login.css', 'public/css/login.css')
    .styles('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
    .scripts('node_modules/jquery/dist/jquery.min.js', 'public/scripts/jquery.min.js')
    .scripts('node_modules/jquery/dist/jquery.slim.min.js', 'public/scripts/jquery.slim.min.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/scripts/bootstrap.bundle.min.js')
    .scripts('node_modules/@fortawesome/fontawesome-free/js/all.min.js', 'public/scripts/all.min.js')
    .scripts('node_modules/startbootstrap-agency/dist/assets/mail/jqBootstrapValidation.js', 'public/scripts/jqBootstrapValidation.js')
    .scripts('node_modules/startbootstrap-agency/dist/assets/mail/contact_me.js', 'public/scripts/contact_me.js')
    .scripts('node_modules/startbootstrap-agency/dist/js/scripts.js', 'public/scripts/scripts.js');
