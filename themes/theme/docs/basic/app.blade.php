<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Title -->
        <title>JinyDocs</title>

        {{--
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        --}}
        <script src="https://cdn.tailwindcss.com"></script>



        @stack('css')

        <script src="//unpkg.com/alpinejs" defer></script>
        @livewireStyles
    </head>

    <body class="navbar-sidebar-aside-lg">
        {{$slot}}


        @stack('scripts')
        @livewireScripts
    </body>

</html>
