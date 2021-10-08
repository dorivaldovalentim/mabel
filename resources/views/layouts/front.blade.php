<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ config('app.name', 'Laravel') }} » @yield('title')</title>

        <!-- Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="DorivaTech" />
        <meta name="keywords" content="dorivatech" />
        <meta name="description" content="DorivaTech" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- link icon -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />

        <!-- CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        @yield('styles')
    </head>

    <body>
        <main id="app">
            @yield('content')
        </main>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>