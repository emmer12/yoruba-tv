<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Youruba - Nation Tv</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="/css/app.css" />

</head>

<body class="">
    <main>
        <x-nav />
        {{ $slot }}
    </main>
</body>

</html>
