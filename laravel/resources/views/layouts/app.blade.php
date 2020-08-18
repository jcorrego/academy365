<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ url(mix('js/app.js')) }}" defer></script>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>
    <link href="{{ url(mix('css/app.css')) }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://kit.fontawesome.com/874e08b62b.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
<div id="app">
    <div x-data="{ sidebarOpen: true }" class="h-screen flex overflow-hidden bg-gray-100">
        @auth
            @include('layouts.partials.sidebar')
        @endauth
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            @include('layouts.partials.top-header')
            <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
                @yield('content')
            </main>
        </div>
    </div>
</div>
@if (session('status_title'))
    @include('layouts.partials.notification')
@endif
</body>
</html>
