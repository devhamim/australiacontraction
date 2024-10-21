<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Page Title -->
	@if ($setting->first()->title != null)
        <title>{{ $setting->first()->title }}</title>
    @endif
    <!-- favicon icon -->
    @if ($setting->first()->favicon != null)
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
    @endif

	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="{{ asset('frontend') }}/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="{{ asset('frontend') }}/css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/swiper-bundle.min.css">
	<!-- Font Awesome Icon Css-->
	<link href="{{ asset('frontend') }}/css/all.css" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="{{ asset('frontend') }}/css/animate.css" rel="stylesheet">
	<!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/mousecursor.css">
	<!-- Main Custom Css -->
	<link href="{{ asset('frontend') }}/css/custom.css" rel="stylesheet" media="screen">
</head>
<body>

    {{-- <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="{{ asset('frontend') }}/images/loader.svg" alt=""></div>
		</div>
	</div>
	<!-- Preloader End --> --}}

    <!--header start-->
    @include('frontend.layout.header')

    @yield('content')

    <!--footer start-->
    @include('frontend.layout.footer')
    <!-- footer end-->

    <!-- Jquery Library File -->
    <script src="{{ asset('frontend') }}/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="{{ asset('frontend') }}/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('frontend') }}/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('frontend') }}/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="{{ asset('frontend') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('frontend') }}/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="{{ asset('frontend') }}/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('frontend') }}/js/gsap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('frontend') }}/js/SplitText.js"></script>
    <script src="{{ asset('frontend') }}/js/ScrollTrigger.min.js"></script>
    <!-- Wow js file -->
    <script src="{{ asset('frontend') }}/js/wow.js"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('frontend') }}/js/function.js"></script>
</body>

</html>