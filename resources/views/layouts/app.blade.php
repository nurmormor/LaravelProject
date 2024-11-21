<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">
    <title>{{ config('app.name', 'Volare') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen antialiased bg-gray-300 m-0 p-0">
    <div class="flex flex-col h-screen w-full">

        @include('layouts.header')

        @include('layouts.navigation')


        <!-- Page Content -->
        <main id="main-content" class=" h-full w-full ml-0">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
