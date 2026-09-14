<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title',config('app.name','App'))</title>

        <meta name="description" content="@yield('meta_description', 'Default desc')">
        <link rel="icon" href="{{ asset('favicon.icon') }}" type="image/x-icon">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @stack('styles.css')
    </head>
    <body class="font-sans antialiased bg-gray-900 text-gray-900">
        <div class="min-h-screen flex flex-col">

            @include('partials.header')

            @if (session('success'))
                <div class="max-w-7x1 mx-auto mt-4 px-4">
                    <x-alert type="success">{{ session('success') }}</x-alert>
                </div>
            @endif

            @if (session('error'))
                <div class="max-w-7x1 mx-auto mt-4 px-4">
                    <x-alert type="error">{{ session('error') }}</x-alert>
                </div>
            @endif

            <main class="flex-1">
                @yield('content')
            </main>

            @include('partials.footer')
        </div>

        @stack('scripts')
    </body>
</html>
