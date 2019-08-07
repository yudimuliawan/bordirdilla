<!DOCTYPE html>
<html>
<head>
	<title>@yield('pagetitle')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
	<link rel="stylesheet" href="{{ asset('vendor/colo/styles/responsive.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/colo/styles/main_styles.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/colo/plugins/OwlCarousel2-2.2.1/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/colo/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/colo/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/colo/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('vendor/colo/styles/bootstrap4/bootstrap.min.css') }}">
</head>
<body>

	@yield('header')
			
	@yield('menubar')
	
	@yield('content')
</body>

	@yield('footer')

 <!-- Scripts -->
<script src="{{ asset('vendor/colo/js/app.js') }}" defer></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</html>