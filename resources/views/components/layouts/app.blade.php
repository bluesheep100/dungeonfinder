<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>{{ $title ?? 'DungeonFinder' }}</title>
</head>
<body data-bs-theme="dark">
<header>
    <x-navbar/>
</header>
<div class="container-fluid px-4 pt-3">
    {{ $slot }}
</div>
</body>
</html>
