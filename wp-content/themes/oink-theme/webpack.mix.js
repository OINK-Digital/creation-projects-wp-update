const mix = require('laravel-mix');

mix.options({ imgLoaderOptions: { enabled: false } })
    .sourceMaps()
    .webpackConfig({
        devtool: 'source-map',
        externals: {
            "jquery": "jQuery"
        }
    })
    .js('main.js', 'js')
    .sass('sass/style.scss', 'css')
    .setPublicPath('./dist')
    .options({
        processCssUrls: false,
    })
    .browserSync({
        proxy: 'localhost/dev/modlock',
        files: [
         'sass/**/*',
         '*.php',
         '*.js',
        ]
    })