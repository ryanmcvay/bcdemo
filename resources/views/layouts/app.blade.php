<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- <x-analytics/> --}}
        <meta name="googlebot" content="all">
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no, user-scalable=no">
        
        <title></title>
        
        {{-- <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content=" }}">
        <meta property="og:site_name" content=" }}">
        <meta property="og:description" content="') }}">
        <meta property="og:url" content=" }}">
        <link rel="shortlink" href="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('storage/images/favicons/og_image.jpg') }}">
        <link rel="icon" href="{{ asset('storage/images/favicons/32x32.png') }}" sizes="32x32">
        <link rel="icon" href="{{ asset('storage/images/favicons/192x192.png') }}" sizes="192x192">
        <link rel="apple-touch-icon" href="{{ asset('storage/images/favicons/192x192.png') }}" sizes="192x192">
        <meta name="msapplication-TileImage" content="{{ asset('storage/images/favicons/192x192.png') }}" sizes="192x192">
        <meta name="msapplication-TileColor" content="#7D3200"> --}}

        <!-- CSS Files -->
        @vite(['resources/css/app.css'])
        
        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/5fae771b98.js" crossorigin="anonymous"></script>
        <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        
        {{-- @livewireStyles --}}
    </head>
    <body class="antialiased bg-gray-600 text-white">
        <main class="w-full h-screen relative">
            <img class="h-full w-full object-cover absolute top-0 left-0 grayscale" src="https://images.unsplash.com/photo-1655161920449-cd10d9391f44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80">
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-b from-red-600 to-blue-600 mix-blend-overlay"></div>

            <div id="content-container" class="h-full w-full px-6 absolute top-0 left-0 grid place-items-center">
                
                {{ $slot }}

            </div>
        </main>
         

        {{-- @livewireScripts --}}
    </body>
</html>