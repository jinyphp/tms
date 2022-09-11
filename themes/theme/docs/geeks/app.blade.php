<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Geeks is a fully responsive and yet modern premium bootstrap template. Geek is feature-rich components and beautifully designed pages that help you create the best possible website and web application projects." />
    <meta name="keywords"
        content="Geeks UI, bootstrap, bootstrap 5, Course, Sass, landing, Marketing, admin themes, bootstrap admin, bootstrap dashboard, ui kit, web app, multipurpose" />




    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/boot/geeks/images/favicon/favicon.ico')}}">


    <!-- Libs CSS -->
    <link href="{{ asset('assets/boot/geeks/fonts/feather/feather.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/boot/geeks/libs/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/boot/geeks/libs/dragula/dist/dragula.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/boot/geeks/libs/@mdi/font/css/materialdesignicons.min.cs')}}s" rel="stylesheet" />
    <link href="{{ asset('assets/boot/geeks/libs/dropzone/dist/dropzone.cs')}}s" rel="stylesheet" />
    <link href="{{ asset('assets/boot/geeks/libs/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/boot/geeks/libs/bootstrap-select/dist/css/bootstrap-select.min.css')}}"
        rel="stylesheet">
    <link href="{{ asset('assets/boot/geeks/libs/@yaireo/tagify/dist/tagify.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/boot/geeks/libs/tiny-slider/dist/tiny-slider.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/boot/geeks/libs/tippy.js/dist/tippy.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/boot/geeks/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}"
        rel="stylesheet">
    <link href="{{ asset('assets/boot/geeks/libs/prismjs/themes/prism-okaidia.min.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/boot/geeks/css/theme.min.css')}}">
    <title>Accordions | Geeks - Bootstrap 5 Template</title>

</head>

<body class="bg-white">

    <!-- Main wrapper -->
    <div class="docs-main-wrapper">
        <!-- Docs header -->
        @theme('/docs/geeks/headers/header')

        <!-- left sidebar -->
        @theme('/docs/geeks/menu/sidebar')
        <!-- Nav Sidebar -->

        <!-- Wrapper  -->
        <div class="docs-wrapper">
            <div class="container-fluid">
                {{$slot}}
            </div>
        </div>
    </div>

    <!-- Scripts -->

    <!-- Libs JS -->
    <script src="{{ asset('assets/boot/geeks/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/odometer/odometer.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/flatpickr/dist/flatpickr.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/inputmask/dist/jquery.inputmask.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/quill/dist/quill.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/file-upload-with-preview/dist/file-upload-with-preview.min.js')}}">
    </script>
    <script src="{{ asset('assets/boot/geeks/libs/dragula/dist/dragula.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/bs-stepper/dist/js/bs-stepper.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/jQuery.print/jQuery.print.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/prismjs/prism.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/prismjs/components/prism-scss.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/@yaireo/tagify/dist/tagify.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/tiny-slider/dist/min/tiny-slider.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/@popperjs/core/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/tippy.js/dist/tippy-bundle.umd.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/typed.js/lib/typed.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/jsvectormap/dist/js/jsvectormap.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/jsvectormap/dist/maps/world.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}">
    </script>
    <script src="{{ asset('assets/boot/geeks/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}">
    </script>
    <script src="{{ asset('assets/boot/geeks/libs/prismjs/plugins/toolbar/prism-toolbar.min.js')}}"></script>
    <script src="{{ asset('assets/boot/geeks/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js')}}">
    </script>
    <script src="{{ asset('assets/boot/geeks/libs/fullcalendar/main.min.js')}}"></script>


    <!-- CDN File for moment -->
    <script src='https://cdn.jsdelivr.net/npm/moment@2.29.1/min/moment.min.js'></script>



    <!-- Theme JS -->
    <script src="{{ asset('assets/boot/geeks/js/theme.min.js')}}"></script>
</body>

</html>
