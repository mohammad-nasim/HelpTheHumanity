<!doctype html>
<html class="no-js" lang="en">
  <head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Awesome Themez">
	<meta name="description" content="">
	<meta name="keywords" content="">
    <base href="{{  asset('frontend') }}/ "  target="_blank">
	<!-- Page Title -->
	<title>@yield('title') - Help The Humanity Foundation</title>
    <!-- Favicon Icon -->
  	<link rel="icon" href="img/favicon.png">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/gallery.css">

	<!-- Modernizr -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
  </head>

  <body>
    <!-- Start Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

	<!-- Start Site Header -->
        @include('frontend.include.header')
	<!-- End Site Header -->

        @yield('content')



    <!-- Start Footer -->
        @include('frontend.include.footer')
    <!-- End Footer -->

	<!-- Scripts -->
	<script src="js/vendor/jquery-3.2.0.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>

    <!-- Gallery -->
    <script src="js/gallery.js"></script>
  </body>
</html>
