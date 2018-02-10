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
    'public/css/main.min.css',
    'public/css/fonts.min.css'
], 'public/css/all.css');

mix.scripts([
    'public/js/jquery.appear.js',
    'public/js/jquery.mousewheel.js',
    'public/js/perfect-scrollbar.js',
    'public/js/jquery.matchHeight.js',
    'public/js/svgxuse.js',
    'public/js/imagesloaded.pkgd.js',
    'public/js/Headroom.js',
    'public/js/velocity.js',
    'public/js/ScrollMagic.js',
    'public/js/jquery.waypoints.js',
    'public/js/jquery.countTo.js',
    'public/js/popper.min.js',
    'public/js/material.min.js',
    'public/js/bootstrap-select.js',
    'public/js/smooth-scroll.js',
    'public/js/selectize.js',
    'public/js/swiper.jquery.js',
    'public/js/moment.js',
    'public/js/daterangepicker.js',
    'public/js/simplecalendar.js',
    'public/js/fullcalendar.js',
    'public/js/isotope.pkgd.js',
    'public/js/ajax-pagination.js',
    'public/js/Chart.js',
    'public/js/chartjs-plugin-deferred.js',
    'public/js/circle-progress.js',
    'public/js/loader.js',
    'public/js/run-chart.js',
    'public/js/jquery.magnific-popup.js',
    'public/js/jquery.gifplayer.js',
    'public/js/mediaelement-and-player.js',
    'public/js/mediaelement-playlist-plugin.min.js',
    // 'public/js/base-init.js',
], 'public/js/all.js');