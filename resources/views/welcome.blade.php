<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies Index</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- Daterangepicker css -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}">

        <!-- Vector Map css -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}">

        <!-- Theme Config Js -->
        <script src="{{ asset('assets/js/hyper-config.js') }}"></script>

        <!-- Icons css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('assets/css/app-modern.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    </head>
    <body class="antialiased">
        <div id="app"></div>

        @vite('resources/js/app.js')
            <!-- Vendor js -->
            <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

            <!-- Dashboard App js -->
            <script src="{{ asset('assets/js/pages/demo.dashboard.js') }}"></script>

            <!-- App js -->
            <script src="{{ asset('assets/js/app.min.js') }}"></script>

            <!-- Daterangepicker js -->
            <script src="assets/vendor/daterangepicker/moment.min.js"></script>
            <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>

            <!-- Apex Charts js -->
            <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>

            <!-- Vector Map js -->
            <script src="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
            <script src="assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        </body>
</html>
