<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Booku') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

        <!-- Tabler Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body { font-family: 'Inter', sans-serif; }
            h1, h2, h3, h4, h5, h6, .heading-font { font-family: 'Plus Jakarta Sans', sans-serif; }
        </style>
    </head>
    <body class="h-full antialiased text-slate-800 dark:text-slate-200 selection:bg-amber-500 selection:text-white bg-slate-50 dark:bg-slate-950 flex flex-col min-h-screen relative overflow-hidden">
        <!-- Background decorative elements (glows) -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_0%_0%,rgba(245,158,11,0.08),transparent_40%)] pointer-events-none"></div>
        <div class="absolute inset-y-0 right-0 w-1/2 bg-gradient-to-l from-amber-500/[0.03] to-transparent pointer-events-none"></div>
        <div class="absolute -bottom-48 -right-48 w-96 h-96 bg-amber-500/5 rounded-full blur-3xl pointer-events-none"></div>

        <div class="min-h-screen flex flex-col justify-center items-center py-12 px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Logo Section -->
            <div class="mb-8">
                <a href="/">
                    <x-application-logo size="lg" class="justify-center hover:opacity-90 transition-opacity" />
                </a>
            </div>

            <!-- Auth Form Card -->
            <div class="w-full sm:max-w-md bg-white dark:bg-slate-800/80 backdrop-blur-md border border-gray-100 dark:border-slate-700/50 rounded-3xl px-8 py-10 shadow-xl shadow-slate-100/50 dark:shadow-none transition-all duration-300">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
