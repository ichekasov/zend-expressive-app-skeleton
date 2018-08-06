let mix = require('laravel-mix');

mix
    .setPublicPath('public/build')
    .setResourceRoot('/build/')
    .js('assets/js/app.js', 'js')
    .sass('assets/sass/app.scss', 'css');