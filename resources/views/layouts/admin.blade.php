<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ config('app.name', 'Laravel') }} » Admin » @yield('title')</title>

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

        <!-- Vendors -->
        <link href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}" rel="stylesheet">

        <!-- CSS -->
        <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <script src="{{ asset('admin/js/preloader.js') }}"></script>

        <div class="body-wrapper">

            <x-menus.sidebar-menu />

            <div class="main-wrapper mdc-drawer-app-content">

                <x-menus.top-menu />

                <div class="page-wrapper mdc-toolbar-fixed-adjust">

                    <main class="content-wrapper">

                        @yield('content')

                    </main>

                    <x-footer />

                </div>

            </div>

        </div>

        <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
        <script src="{{ asset('admin/js/material.js') }}"></script>
        <script src="{{ asset('admin/js/misc.js') }}"></script>
    </body>
</html>
