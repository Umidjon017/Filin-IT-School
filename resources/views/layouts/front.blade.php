<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('front/assets/img/logo/logo_nav.png') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('front/style/css/style.css') }}">

    <title>{{ $title ?? config('app.name', 'ФИЛИН IT') }}</title>
</head>
<body>

    {{ $slot }}

    <div class="scroll__up">
        <img src="{{ asset('front/assets/img/static/up.svg') }}" alt="">
    </div>

    <script src="{{ asset('front/js/script.js') }}"></script>
</body>
</html>
