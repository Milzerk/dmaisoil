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

/* mix.copyDirectory('node_modules/startbootstrap-agency/dist/assets/img', 'public/assets/img')    
    .styles('node_modules/startbootstrap-agency/dist/css/styles.css', 'public/css/styles.css')
    .styles('resources/css/login.css', 'public/css/login.css')
    .styles('resources/css/light-bootstrap-dashboard.css', 'public/css/light-bootstrap-dashboard.css')
    .styles('resources/css/pe-icon-7-stroke.css', 'public/css/pe-icon-7-stroke.css')
    .styles('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
    .styles('node_modules/animate.css/animate.min.css', 'public/css/animate.min.css')
    .styles('node_modules/@fortawesome/fontawesome-free/css/fontawesome.min.css', 'public/css/fontawesome.min.css')
    
    .scripts('node_modules/jquery/dist/jquery.min.js', 'public/scripts/jquery.min.js')
    .scripts('node_modules/jquery/dist/jquery.slim.min.js', 'public/scripts/jquery.slim.min.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/scripts/bootstrap.bundle.min.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/scripts/bootstrap.min.js')
    .scripts('node_modules/@fortawesome/fontawesome-free/js/all.min.js', 'public/scripts/all.min.js')
    .scripts('node_modules/startbootstrap-agency/dist/assets/mail/jqBootstrapValidation.js', 'public/scripts/jqBootstrapValidation.js')
    .scripts('node_modules/startbootstrap-agency/dist/assets/mail/contact_me.js', 'public/scripts/contact_me.js')
    .scripts('node_modules/startbootstrap-agency/dist/js/scripts.js', 'public/scripts/scripts.js')
    .scripts('resources/js/bootstrap-notify.js', 'public/scripts/bootstrap-notify.js')
    .scripts('resources/js/light-bootstrap-dashboard.js', 'public/scripts/light-bootstrap-dashboard.js')
    .scripts('resources/js/demo.js', 'public/scripts/demo.js')
    .scripts('node_modules/chartist/dist/chartist.min.js', 'public/scripts/chartist.min.js');
 */

 /*----------- Assets site -----------*/
 mix
 /* directory */
    .copyDirectory('node_modules/startbootstrap-agency/dist/assets/img', 'public/site/assets/img')

 /* css */
    .styles('node_modules/startbootstrap-agency/dist/css/styles.css', 'public/site/css/styles.css')

 /* scripts */
    .scripts('node_modules/jquery/dist/jquery.min.js', 'public/site/scripts/jquery.min.js')
    .scripts('node_modules/startbootstrap-agency/dist/assets/mail/jqBootstrapValidation.js', 'public/site/scripts/jqBootstrapValidation.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/site/scripts/bootstrap.bundle.min.js')
    .scripts('node_modules/startbootstrap-agency/dist/assets/mail/contact_me.js', 'public/site/scripts/contact_me.js')
    .scripts('node_modules/startbootstrap-agency/dist/js/scripts.js', 'public/site/scripts/scripts.js')
    .scripts('node_modules/@fortawesome/fontawesome-free/js/all.min.js', 'public/site/scripts/all.min.js');


/*----------- Assets login -----------*/
mix
/* files */
    .copy('storage/images/auth/bg-carro.jpg', 'public/auth/assets/img/bg-carro.jpg')

/* css */
    .styles('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/auth/css/bootstrap.min.css')
    .styles('resources/css/login/login.css', 'public/auth/css/login.css')

/* scripts */
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/auth/scripts/bootstrap.bundle.min.js')
    .scripts('node_modules/jquery/dist/jquery.min.js', 'public/auth/scripts/jquery.min.js');


/*----------- Assets Dashboard -----------*/

mix
/* directory */
    .copyDirectory('resources/fonts/dashboard/fonts', 'public/dash/fonts')
    .copyDirectory('storage/images/dashboard/img', 'public/dash/assets/img')

/* css */
    .styles('resources/css/dash/pe-icon-7-stroke.css', 'public/dash/css/pe-icon-7-stroke.css')
    .styles('resources/css/dash/animate.min.css', 'public/dash/css/animate.min.css')
    .styles('resources/css/dash/light-bootstrap-dashboard.css', 'public/dash/css/light-bootstrap-dashboard.css')
    .styles('resources/css/dash/bootstrap.min.css', 'public/dash/css/bootstrap.min.css')

/* scripts */
    .scripts('resources/js/dash/jquery.3.2.1.min.js', 'public/dash/scripts/jquery.3.2.1.min.js')
    .scripts('resources/js/dash/bootstrap.min.js', 'public/dash/scripts/bootstrap.min.js')
    .scripts('resources/js/dash/chartist.min.js', 'public/dash/scripts/chartist.min.js')
    .scripts('resources/js/dash/bootstrap-notify.js', 'public/dash/scripts/bootstrap-notify.js')
    .scripts('resources/js/dash/light-bootstrap-dashboard.js', 'public/dash/scripts/light-bootstrap-dashboard.js')
    .scripts('resources/js/dash/demo.js', 'public/dash/scripts/demo.js');


/*----------------Froala Editor--------------------*/
mix
    .styles('node_modules/froala-editor/css/froala_editor.pkgd.min.css', 'public/froala/css/froala_editor.pkgd.min.css')
    .styles('node_modules/froala-editor/js/froala_editor.pkgd.min.js', 'public/froala/scripts/froala_editor.pkgd.min.js')
    .scripts('node_modules/froala-editor/js/languages/pt_br.js', 'public/froala/scripts/languages/pt_br.js');