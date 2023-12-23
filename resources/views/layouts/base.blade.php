<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Softar - Software Landing Page">

    <!-- ========== Page Title ========== -->
    <title>Softheaven - We provide Software for business</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset('storage')}}/{{$gs ? $gs->address_bar_icon : ''}}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('f')}}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('f')}}/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{asset('f')}}/css/themify-icons.css" rel="stylesheet" />
    <link href="{{asset('f')}}/css/elegant-icons.css" rel="stylesheet" />
    <link href="{{asset('f')}}/css/flaticon-set.css" rel="stylesheet" />
    <link href="{{asset('f')}}/css/magnific-popup.css" rel="stylesheet" />
    <link href="{{asset('f')}}/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{asset('f')}}/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="{{asset('f')}}/css/animate.css" rel="stylesheet" />
    <link href="{{asset('f')}}/css/bootsnav.css" rel="stylesheet" />
    <link href="{{asset('f')}}/style.css" rel="stylesheet">
    <link href="{{asset('f')}}/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
    <script src="{{asset('f')}}/js/html5/html5shiv.min.js"></script>
    <script src="{{asset('f')}}/js/html5/respond.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

  <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">
        @include('inc.nav')
    </header>
    <!-- End Header -->
    @yield('content')

    {{-- @component('components.frontend.prizing') --}}

    @include('inc.contact_area')
    @include('inc.footer')
    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{asset('f')}}/js/jquery-1.12.4.min.js"></script>
    <script src="{{asset('f')}}/js/popper.min.js"></script>
    <script src="{{asset('f')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('f')}}/js/jquery.appear.js"></script>
    <script src="{{asset('f')}}/js/jquery.easing.min.js"></script>
    <script src="{{asset('f')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('f')}}/js/modernizr.custom.13711.js"></script>
    <script src="{{asset('f')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('f')}}/js/wow.min.js"></script>
    <script src="{{asset('f')}}/js/progress-bar.min.js"></script>
    <script src="{{asset('f')}}/js/isotope.pkgd.min.js"></script>
    <script src="{{asset('f')}}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('f')}}/js/count-to.js"></script>
    <script src="{{asset('f')}}/js/YTPlayer.min.js"></script>
    <script src="{{asset('f')}}/js/bootsnav.js"></script>
    <script src="{{asset('f')}}/js/main.js"></script>

    <script>
        $(document).ready( ()=> {
            $(document).on('submit', `#contact-form`, (event) => {
                event.preventDefault();
                const url = $(`#contact-form`).attr('action');
                const data = $(`#contact-form`).serialize();
                $.post(url, data ).done( (response) => {
                    $(`#success-message`).removeClass('d-none');
                    $('#contact-form')[0].reset();
                });
            })
        });
    </script>
</body>
</html>