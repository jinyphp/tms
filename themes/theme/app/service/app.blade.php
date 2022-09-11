<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SurfsideMedia - Online Service Provider for your House Needs</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/app/service/img/favicon.png') }}">
    <link href="{{ asset('assets/app/service/css/style.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/app/service/css/chblue.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/app/service/css/theme-responsive.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/app/service/css/dtb/jquery.dataTables.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/app/service/css/select2.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/app/service/css/toastr.min.css') }}" rel="stylesheet" media="screen">
    <script type="text/javascript" src="{{ asset('assets/app/service/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/jquery-ui.1.10.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/modernizr.js') }}"></script>
</head>
<body>
    <div id="layout">
        {{$slot}}
    </div>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/nav/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/totop/jquery.ui.totop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/accordion/accordion.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/maps/gmap3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/fancybox/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/carousel/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/filters/jquery.isotope.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/twitter/jquery.tweet.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/flickr/jflickrfeed.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/theme-options/theme-options.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/theme-options/jquery.cookies.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/bootstrap/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/bootstrap/bootstrap-slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/dtb/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/dtb/jquery.table2excel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/dtb/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/validation-rule.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/bootstrap3-typeahead.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/service/js/main.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 5000,
                startwidth: 1170,
                startheight: 480,
                minHeight: 250,
                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "preview1"
            });
        });
    </script>
</body>
</html>
