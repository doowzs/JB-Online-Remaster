<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/fa.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div id="app">
    @include('auth.includes.navbar')

    <div class="main-content">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.core.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</div>
</body>
</html>
