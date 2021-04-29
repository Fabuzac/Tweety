<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
	<meta name="description" content="" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Tweety') }}</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon.png">
    <link rel="mask-icon" href="/favicon/favicon.png" color="#ff2d20">
    <link rel="shortcut icon" href="favicon/favicon.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css"/> --}}
    @yield('head')
</head>
<body>
    <div id="app">
        <section class="px-2">
            <header class="container mx-auto">                
                    <img src="/images/logo.png" alt="Tweety logo" class="logo">
            </header>
        </section>
        @yield('header')

        <section class="p-4">
            <main class="container mx-auto">
                @yield('content')
            </main>
        </section>

        @yield('footer')
        <section>
            <div id="copyright" class="has-text-centered container">
                <p>&copy; 2021. All rights reserved. | Photos by <a href="#">Google</a> | Design by <a href="https://www.novation-web.com/" target="_blank" rel="nofollow">Novation-Web</a>.</p>
            </div>
        </section>
    </div>
</body>
</html>
