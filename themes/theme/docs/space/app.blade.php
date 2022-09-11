<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Title -->
        <title>JinyDocs</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="../favicon.ico">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="{{ asset('assets/boot/space/vendor/bootstrap-icons/font/bootstrap-icons.css') }}">

        <!-- CSS Space Template -->
        {{--
        <link rel="stylesheet" href="{{ asset('css/space.css') }}">
        --}}


        <link rel="stylesheet" href="{{ asset('assets/boot/space/css/theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/boot/space/css/docs.min.css') }}">


        @stack('css')

        <script src="//unpkg.com/alpinejs" defer></script>

        @livewireStyles
    </head>

    <body class="navbar-sidebar-aside-lg">
        {{$slot}}

        <!-- ========== SECONDARY CONTENTS ========== -->
        <!-- Go To -->
        <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
        "offsetTop": 700,
        "position": {
            "init": {
            "right": "2rem"
            },
            "show": {
            "bottom": "2rem"
            },
            "hide": {
            "bottom": "-2rem"
            }
        }
        }'>
            <i class="bi-chevron-up"></i>
        </a>
        <!-- ========== END SECONDARY CONTENTS ========== -->

        <!-- JS Global Compulsory  -->
        <script src="{{ asset('assets/boot/space/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

        <!-- JS Implementing Plugins -->
        <script src="{{ asset('assets/boot/space/vendor/hs-header/dist/hs-header.min.js')}}"></script>
        <script src="{{ asset('assets/boot/space/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js')}}"></script>
        <script src="{{ asset('assets/boot/space/vendor/list.js/dist/list.min.js')}}"></script>
        <script src="{{ asset('assets/boot/space/vendor/hs-go-to/dist/hs-go-to.min.js')}}"></script>
        <script src="{{ asset('assets/boot/space/vendor/prism/prism.js')}}"></script>

        <!-- JS Space -->
        <script src="{{ asset('assets/boot/space/js/theme.min.js')}}"></script>

        <!-- JS Plugins Init. -->
        <script>
            (function () {
                // INITIALIZATION OF HEADER
                // =======================================================
                new HSHeader('#header').init()


                // INITIALIZATION OF NAV SCROLLER
                // =======================================================
                new HsNavScroller('.js-nav-scroller', {
                    delay: 400,
                    offset: 140
                })


                // INITIALIZATION OF LISTJS COMPONENT
                // =======================================================
                const docsSearch = HSCore.components.HSList.init('#docsSearch');


                // GET JSON FILE RESULTS
                // =======================================================
                fetch('../assets/json/docs-search.json')
                    .then(response => response.json())
                    .then(data => {
                        docsSearch.getItem(0).add(data)
                    })

                // INITIALIZATION OF GO TO
                // =======================================================
                new HSGoTo('.js-go-to')
            })()

        </script>

        @livewireScripts
        @stack('scripts')

    </body>

</html>
