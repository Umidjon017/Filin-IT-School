<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- admin.blade.php  04 July 2023 22:06:50 GMT +5 -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset("/assets/css/app.min.css") }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/bundles/summernote/summernote-bs4.css") }}">
    @yield('css')
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset("/assets/css/custom.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/css/components.css") }}">
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset("/assets/img/favicon.ico") }}' />
    {{-- <style> .error{border :2px solid red}    </style> --}}
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            {{-- Navbar --}}
            @include('layouts.navbar')

            {{-- Main Sidebar --}}
            @include('layouts.main-sidebar')

                <!-- Main Content -->
                <div class="main-content">

                    {{ $slot }}

                    {{-- Setting sidebar --}}
                    @include('layouts.setting-sidebar')

                </div>

            {{-- Footer --}}
            @include('layouts.footer')

        </div>

    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- JS Libraries -->
    <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/summernote/summernote-bs4.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/index.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @yield('scripts')
</body>


<!-- admin.blade.php  04 July 2023 22:06:50 GMT +5 -->
</html>

