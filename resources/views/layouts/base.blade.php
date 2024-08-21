<!doctype html>
<html class="no-js" lang="zxx">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="{{asset('storage')}}/{{$gs ? $gs->address_bar_icon : ''}}" type="image/x-icon">
        <title>Farhad - A Fullstack Software developer</title>
        <link rel="icon" href="img/favicon.png">
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('f')}}/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{asset('f')}}/css/nice-select.css">
        <link rel="stylesheet" href="{{asset('f')}}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('f')}}/css/icofont.css">
		<link rel="stylesheet" href="{{asset('f')}}/css/slicknav.min.css">
        <link rel="stylesheet" href="{{asset('f')}}/css/owl-carousel.css">
		<link rel="stylesheet" href="{{asset('f')}}/css/datepicker.css">
        <link rel="stylesheet" href="{{asset('f')}}/css/animate.min.css">
        <link rel="stylesheet" href="{{asset('f')}}/css/magnific-popup.css">
        <link rel="stylesheet" href="{{asset('f')}}/css/normalize.css">
        <link rel="stylesheet" href="{{asset('f')}}/style.css">
        <link rel="stylesheet" href="{{asset('f')}}/css/responsive.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<style>
			.single-service {
				padding-left: 0px !important;
			}
		</style>
    </head>

    <body>
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
		
        @include('inc.go_pro_btn')
	
		<!-- Header Area -->
		<header class="header" >
			@include('inc.topbar')
            @include('inc.header_menu')
		</header>
		<!-- End Header Area -->

        @yield('content')
		
		@include('inc.footer')
		
		<!-- jquery Min JS -->
        <script src="{{asset('f')}}/js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="{{asset('f')}}/js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="{{asset('f')}}/js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="{{asset('f')}}/js/easing.js"></script>
		<!-- Color JS -->
		<script src="{{asset('f')}}/js/colors.js"></script>
		<!-- Popper JS -->
		<script src="{{asset('f')}}/js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="{{asset('f')}}/js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="{{asset('f')}}/js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="{{asset('f')}}/js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="{{asset('f')}}/js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="{{asset('f')}}/js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="{{asset('f')}}/js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="{{asset('f')}}/js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="{{asset('f')}}/js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="{{asset('f')}}/js/steller.js"></script>
		<!-- Wow JS -->
		<script src="{{asset('f')}}/js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="{{asset('f')}}/js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('f')}}/js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="{{asset('f')}}/js/main.js"></script>
    </body>
</html>