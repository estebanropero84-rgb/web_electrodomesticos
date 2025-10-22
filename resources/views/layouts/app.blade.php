<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Electrodomésticos SENA') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-fondo text-texto font-sans antialiased">
        <div class="min-h-screen flex flex-col">
            <!-- Navegación superior -->
            @include('layouts.navigation')

            <!-- Encabezado de página -->
            @isset($header)
                <header class="bg-white shadow-md border-b">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <h1 class="text-3xl font-bold text-primary">
                            {{ $header }}
                        </h1>
                    </div>
                </header>
            @endisset

            <!-- Contenido principal -->
            <main class="flex-grow px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </main>

            <!-- Pie de página -->
            <footer class="bg-white border-t text-center py-4 text-sm text-gray-500">
                © 2025 Electrodomésticos SENA — Proyecto académico desarrollado por Johan Ropero
            </footer>
        </div>
    </body>
</html>
