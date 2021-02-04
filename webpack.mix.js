let mix = require('laravel-mix');
let path = require('path');
require('laravel-mix-purgecss');


mix
    .js('src/js/app.js', 'js')
    .sass('src/scss/app.scss', 'css')
    .setPublicPath('assets')
    .purgeCss({
        enabled: mix.inProduction(),
        content: [path.join(__dirname, '**/*.php')],
    });