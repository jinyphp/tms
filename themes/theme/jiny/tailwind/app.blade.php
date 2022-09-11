<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>JinyERP</title>

        @vite('resources/css/app.css')
        @stack('css')
        @livewireStyles
    </head>
    <body>

        {{ $slot }}

        @livewireScripts
        @stack('scripts')
    </body>
</html>
