<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'EMR System') }}</title>
    @vite('resources/css/app.css') 
</head>
<body class="bg-gray-300 font-mono">
    <main>
        @yield('content')
    </main>
</body>
</html>
