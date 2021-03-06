const mix = require('laravel-mix')
let tailwindcss = require('tailwindcss')
mix.setPublicPath('../')

mix
    .js('resources/js/app.js', 'js')
    .sass('resources/sass/app.scss', 'css')
    .options({
        processCssUrls: false,
        postCss: [
            tailwindcss('./tailwind.config.js'),
        ],
    }).version()
