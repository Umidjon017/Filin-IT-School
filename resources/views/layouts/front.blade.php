<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('front/assets/img/logo/logo_nav.png') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('front/style/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" rel="stylesheet">

    <title>{{ $title ?? config('app.name', 'ФИЛИН IT') }}</title>
    @livewireStyles
</head>
<body>

    {{ $slot }}

    <div class="scroll__up">
        <img src="{{ asset('front/assets/img/static/up.svg') }}" alt="">
    </div>
    @livewireScripts

    <script src="{{ asset('front/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
</body>
</html>
