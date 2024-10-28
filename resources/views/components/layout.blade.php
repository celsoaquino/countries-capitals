<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Countries and Cities' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <div class="flex flex-col mt-6 items-center justify-center">
        <div class="w-full max-w-2xl lg:max-w-7xl">
            <header class="grid grid-cols-1 items-center gap-2 lg:grid-cols-3">
                <div class="flex lg:justify-center lg:col-start-2">
                    <a href="{{ route('home') }}">
                        <img class="size-52" src="{{ Vite::asset('resources/images/logo.png') }}" alt="logo">
                    </a>
                </div>
            </header>
            <main class="mt-6">
                {{ $slot }}
            </main>
            <x-footer/>
        </div>
    </div>
</div>
</body>
</html>
