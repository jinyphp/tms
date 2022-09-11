<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/shop/templates/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/shop/templates/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/shop/templates/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/shop/templates/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/shop/templates/css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/shop/templates/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/shop/templates/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/shop/templates/css/color-01.css') }}">

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    @livewireStyles
</head>
<body class="home-page home-01 ">

    {{$slot}}


	<script src="{{ asset('assets/shop/templates/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/shop/templates/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/shop/templates/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/shop/templates/js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('assets/shop/templates/js/chosen.jquery.min.js') }}"></script>
	<script src="{{ asset('assets/shop/templates/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/shop/templates/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/shop/templates/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/shop/templates/js/functions.js') }}"></script>

    <!-- Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    @livewireScripts

    @stack('scripts')
</body>
</html>
