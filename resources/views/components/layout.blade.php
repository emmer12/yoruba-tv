<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Youruba - Nation Tv</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="/css/app.css" />
    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('js/EasePack.min.js') }}"></script>
</head>

<body class="">
    <main>
        <x-nav />
        {{ $slot }}

        <x-footer />
    </main>

</body>

</html>
