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


/*mix.sass('resources/sass/app.scss', 'public/css');*/

/*
mix.js('resources/js/libs/bootstrap.js', 'public/js');
mix.js('resources/js/libs/jquery.js', 'public/js');
mix.js('resources/js/libs/metisMenu.js', 'public/js');
mix.js('resources/js/libs/sb-admin-2.js', 'public/js');
mix.js('resources/js/libs/scripts.js', 'public/js');

mix.postCss('resources/css/libs/blog-post.css', 'public/css');
mix.postCss('resources/css/libs/styles.css', 'public/css');
mix.postCss('resources/css/libs/sb-admin-2.css', 'public/css');
mix.postCss('resources/css/libs/metisMenu.css', 'public/css');
*/


/*mix.js('resources/js/app.js', 'public/js')
    .css('resources/css/app.css','public/css')*/


mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        postCss: [
            require('postcss-import'),
            require('tailwindcss'),
        ]
    });

if (mix.inProduction()) {
    mix.version();
}
