<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no, user-scalable=no">
        
        <title></title>

        <!-- CSS Files -->
        @vite(['resources/css/app.css'])

        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/5fae771b98.js" crossorigin="anonymous"></script>
        <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="antialiased h-screen bg-gradient-to-b from-primary-500 via-secondary-300 to-secondary-500">
        <img class="absolute top-0 left-0 w-full h-full object-cover mix-blend-overlay opacity-50 blur-xl" src="https://plus.unsplash.com/premium_photo-1674061111250-7908c02b7878?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Z3Jhc3N8ZW58MHx8MHx8&auto=format&fit=crop&w=1600&q=80" alt="">
        <main class="px-4 h-full w-full bg-pink500 grid place-items-center absolute top-0 left-0">
            <div class="">
                <header>
                    <img class="mb-4 mx-auto object-cover aspect-square w-32 rounded-full" src="https://images.unsplash.com/photo-1615751072497-5f5169febe17?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjJ8fHB1cHB5fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="">
                    <h1 class="text-lg text-center font-bold text-white">Leroy</h1>
                    <p class="text-white text-sm">Voluptate irure laboris labore id ut velit anim.</p>
                </header>
                <div class="mt-8 space-y-4">
                    @foreach ($links as $link)
                        <x-button.puppy href="{{ $link['url'] }}" label="{{ $link['name'] }}"/>
                    @endforeach
                </div>
            </div>
        </main>
    </body>
</html>