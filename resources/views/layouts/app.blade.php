<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kolshi Store</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    {{--
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{--
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

    @livewireStyles
</head>

<body class="font-sans antialiased bg-gray-950">
    <div class="min-h-screen ">
        @auth
            <livewire:layout.navigation />
        @else
            @include('layouts.guestnavbar')
        @endauth


        <!-- Page Content -->
        <main>
            {{ $slot }}
            @livewireScripts
            @livewire('wire-elements-modal')
        </main>
    </div>

</body>

</html>