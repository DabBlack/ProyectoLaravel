<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Tailwind -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="css/welcome.css">
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 fondo">
            <div class="">
                <a href="/">
                    <img src="https://www.freepnglogos.com/uploads/tupac-png/tupac-pac-cartoon-pictures-impremedia-21.png" class="m-auto w-32">
                </a>
            </div>
          
            {{ $slot }}
            
        </div>
    </body>
</html>
