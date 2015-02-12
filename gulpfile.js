var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.sass([
        'app.scss'
    ], null, 'public/css');

    mix.styles([
        'libs/select2.min.css'
    ]);

    mix.scripts([
        'libs/jquery.min.js',
        'libs/bootstrap.min.js',
        'libs/select2.min.js'
    ]);

    //mix.styles([
    //    'vendor/normalize.css',
    //    'app.css'
    //], null, 'public/css');

    //mix.version('public/css/all.css');

    //mix.sass('app.scss').coffee();

    //mix.phpUnit();

    //mix.styles([
    //    'vendor/normalize.css',
    //    'app.css'
    //], 'public/output/final.css', 'public/css');

    //mix.scripts([
    //    'vendor/jquery.js',
    //    'main.js',
    //    'coupon.js'
    //], 'public/output/scripts.js', 'public/js');

});
