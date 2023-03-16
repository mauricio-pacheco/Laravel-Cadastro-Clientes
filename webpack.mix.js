const mix = require('laravel-mix');

mix.copy('resources/assets/fonts', 'public/assets/fonts') .copy('resources/assets/img/', 'public/assets/img/') .copy('resources/assets/js/jquery-3.2.1.min.js', 'public/assets/js/jquery-3.2.1.min.js');

mix.styles([ 'resources/assets/css/bootstrap.min.css', 'resources/assets/css/font-awesome.min.css', 'resources/assets/css/dashboard.css', 'resources/assets/css/style.css' ], 'public/assets/css/app.css');

mix.scripts([ 'resources/assets/js/popper.min.js', 'resources/assets/js/bootstrap.min.js', 'resources/assets/js/javascript.js', ], 'public/assets/js/app.js');
