<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Softar - Software Landing Page">

    <!-- ========== Page Title ========== -->
    <title>Softar - Software Landing Page</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset('f')}}/img/favicon.png" type="image/x-icon">

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
    <!--[if lt IE 9]>
      <script src="{{asset('f')}}/js/html5/html5shiv.min.js"></script>
      <script src="{{asset('f')}}/js/html5/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-bg navbar-fixed dark no-background bootsnav">

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="button"><a href="#">{{ $gs ? $gs->hotline_no : '' }}</a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{asset('uploaded_images')}}/{{$gs ? $gs->logo : ''}}" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="#" data-out="#">
                        <li class="dropdown active dropdown-right">
                            <a href="#home" class="dropdown-toggle smooth-menu active" data-toggle="dropdown" >Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home Version One</a></li>
                                <li><a href="index-2.html">Home Version Two</a></li>
                                <li><a href="index-3.html">Home Version Three</a></li>
                                <li><a href="index-4.html">Home Version Four</a></li>
                                <li><a href="index-5.html">Home Version Five <span class="badge">New</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#overview">Overview</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#features">Features</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#team">Team</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#pricing">Pricing</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#blog">Blog</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

   <!-- Start Banner 
    ============================================= -->
    <div class="banner-area bg-top text-capitalized text-center top-pad-80 auto-height" style="background-image: url({{asset('f')}}/img/shape/2.png);">
        <div class="container">
            <div class="content-box">
                <div class="row align-center">
                    <div class="col-lg-8 offset-lg-2 info">
                        <h2 class="wow fadeInRight" data-wow-defaul="300ms">{{ $gs ? $gs->title_message : '' }}<strong>to manage business</strong></h2>
                        <p class="wow fadeInLeft" data-wow-delay="500ms">
                            {{ $gs ? $gs->sub_title_message : '' }}
                        </p>
                        <div class="button wow fadeInDown" data-wow-delay="700ms">
                            <a href="{{ $gs ? $gs->promo_video_link : '' }}" class="popup-youtube video-btn"><i class="fas fa-play"></i>Watch Promo</a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="thumb-inner">
                            <img class="wow fadeInRight" data-wow-delay="900ms" src="{{asset('f')}}/img/dashboard/7.png" alt="Thumb">
                            <img class="wow fadeInLeft" data-wow-delay="1100ms" src="{{asset('f')}}/img/dashboard/5.png" alt="Thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Star Clients Area
    ============================================= -->
    <div class="clients-area default-padding-top">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 left-info">
                    <ul class="achivement">
                        <li>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="{{ $gs ? $gs->trusted_clients_count : 0 }}" data-speed="5000">{{ $gs ? $gs->trusted_clients_count : 0 }}</div>
                                    <div class="operator">+</div>
                                </div>
                                <span class="medium">Trusted Users</span>
                            </div>
                        </li>
                        <li>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="{{ $gs ? $gs->rating : 0 }}" data-speed="5000">{{ $gs ? $gs->rating : '' }}</div>
                                    <div class="operator">%</div>
                                </div>
                                <span class="medium">Positive Rating</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 right-info">
                    <h2>Trusted client by over <br>{{ $gs ? $gs->trusted_clients_count : 0 }}+ of the world’s</h2>
                </div>
                <div class="col-lg-12">
                    <div class="partner-carousel owl-carousel owl-theme">
                        <img src="{{asset('f')}}/img/150x80.png" alt="Partner">
                        <img src="{{asset('f')}}/img/150x80.png" alt="Partner">
                        <img src="{{asset('f')}}/img/150x80.png" alt="Partner">
                        <img src="{{asset('f')}}/img/150x80.png" alt="Partner">
                        <img src="{{asset('f')}}/img/150x80.png" alt="Partner">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients Area -->

    <!-- Star Features Area
    ============================================= -->
    <div class="features-area default-padding-top carousel-shadow">
        <!-- Shape -->
        <div class="fixed-shape-bottom">
            <img src="{{asset('f')}}/img/shape/1.png" alt="Shape">
        </div>
        <!-- End Shape -->
        <div class="container">
            <div class="features-box">
                <div class="row align-center">
                    <div class="col-lg-6 left-content">
                        <h4>Amazing Application Features</h4>
                        <h2>A great features for your application interface</h2>
                        <p>
                            Frequently partiality possession resolution at or appearance unaffected he me. Engaged its was evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began. 
                        </p>
                        <a class="btn btn-md btn-gradient">See More <i class="fas fa-angle-right"></i></a>
                    </div>
                    <div class="col-lg-6 right-content">
                        <div class="features-carousel owl-carousel owl-theme">
                            <div class="single-item">
                                <div class="item-inner">
                                    <div class="item">
                                        <div class="icon">
                                            <i class="flaticon-label"></i>
                                        </div>
                                        <div class="info">
                                            <h4>Ticket Manage</h4>
                                            <p>
                                                Family months lasted simple set nature vulgar him. Picture for attempt joy excited ten carried manners talking how. Suspicion neglected he resolving.  
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-inner">
                                    <div class="item">
                                        <div class="icon">
                                            <i class="flaticon-speech-bubble"></i>
                                        </div>
                                        <div class="info">
                                            <h4>Live Messaging</h4>
                                            <p>
                                                Family months lasted simple set nature vulgar him. Picture for attempt joy excited ten carried manners talking how. Suspicion neglected he resolving.  
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="item-inner">
                                    <div class="item">
                                        <div class="icon">
                                            <i class="flaticon-email"></i>
                                        </div>
                                        <div class="info">
                                            <h4>Email Workflow</h4>
                                            <p>
                                                Family months lasted simple set nature vulgar him. Picture for attempt joy excited ten carried manners talking how. Suspicion neglected he resolving.   
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-inner">
                                    <div class="item">
                                        <div class="icon">
                                            <i class="flaticon-file"></i>
                                        </div>
                                        <div class="info">
                                            <h4>File Upload</h4>
                                            <p>
                                                Family months lasted simple set nature vulgar him. Picture for attempt joy excited ten carried manners talking how. Suspicion neglected he resolving.   
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->

    <!-- Start Overview 
    ============================================= -->
    <div id="overview" class="overview-area relative default-padding-top bg-gray carousel-shadow">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Quick Software Overview</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="overview-carousel owl-carousel owl-theme">
                        <!-- Single item -->
                        <div class="item">
                            <img src="{{asset('f')}}/img/2440x1578.png" alt="Thumb">
                            <div class="content">
                                <h4><span>01</span> App Integration</h4>
                            </div>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="item">
                            <img src="{{asset('f')}}/img/2440x1578.png" alt="Thumb">
                            <div class="content">
                                <h4><span>02</span> App Customization</h4>
                            </div>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="item">
                            <img src="{{asset('f')}}/img/2440x1578.png" alt="Thumb">
                            <div class="content">
                                <h4><span>03</span> App Modification</h4>
                            </div>
                        </div>
                        <!-- End Single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview -->

     <!-- Star Advanced Features Area
    ============================================= -->
    <div id="features" class="advanced-features-area text-center default-padding bottom-less">
        <!-- Shape -->
        <div class="right-shape">
            <img src="{{asset('f')}}/img/shape/8.png" alt="Shape">
        </div>
        <!-- Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Advanced features</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fill">
            <div class="af-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                            <div class="icon">
                               <i class="flaticon-website"></i>
                           </div>
                           <div class="info">
                               <h4>Fully Customizable</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted.
                               </p>
                           </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                           <div class="icon">
                               <i class="flaticon-integration"></i>
                           </div>
                           <div class="info">
                               <h4>App Integration</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted
                               </p>
                           </div>
                       </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                           <div class="icon">
                               <i class="flaticon-resolution-1"></i>
                           </div>
                           <div class="info">
                               <h4>High Resolution</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted
                               </p>
                           </div>
                       </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                            <div class="icon">
                               <i class="flaticon-drag"></i>
                           </div>
                           <div class="info">
                               <h4>Drag And Drop</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted.
                               </p>
                           </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Advanced Features Area -->

    <!-- Start Process Area 
    ============================================= -->
    <div id="process" class="process-area default-padding-bottom">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 thumb">
                    <img src="{{asset('f')}}/img/illustration/7.png" alt="Thumb">
                </div>
                <div class="col-lg-6 info ml-auto">
                    <h2>Three Simple Step To Started Working Process</h2>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="flaticon-presentation"></i>
                            </div>
                            <div class="content wow fadeInUp" data-wow-delay="300ms">
                                <h4>Research Project <span>Step - 01</span></h4>
                                <p>
                                    Sometimes furnished collected add for resources attention. Norland an by minuter.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-target"></i>
                            </div>
                            <div class="content wow fadeInUp" data-wow-delay="500ms">
                                <h4>Targeting <span>Step - 02</span></h4>
                                <p>
                                    Bumetimes furnished collected add for resources attention. Norland an minister.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-report"></i>
                            </div>
                            <div class="content wow fadeInUp" data-wow-delay="700ms">
                                <h4>Result <span>Step - 03</span></h4>
                                <p>
                                    Sometimes furnished collected add for resources attention. Norland an by minuter. 
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Process Area -->

    <!-- Start Team 
    ============================================= -->
    <div id="team" class="team-area bg-gray default-padding bottom-less">
        <!-- Shape -->
        <div class="fixed-shape" style="background-image: url({{asset('f')}}/img/shape/5.png);"></div>
        <!-- End Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Innovative Team</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-items">
                <div class="row">
                    @foreach($teamMembers as $member)
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{asset('uploaded_images/'.$member->photo_url)}}"
                                    style="width: 100%; height: 350px;" alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle{{$loop->index}}" class="share-toggle" hidden>
                                    <label for="toggle{{$loop->index}}" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="{{$member->facebook ?? ''}}" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="{{$member->x ?? ''}}" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="{{$member->linkedin ?? ''}}" class="share-icon linkedin">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>{{$member->name}}</h4>
                                <span>{{$member->designation}}</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Testimonials 
    ============================================= -->
    <div class="testimonials-area carousel-shadow default-padding-top">
        <!-- Shape -->
        <div class="fixed-shape-left">
            <img src="{{asset('f')}}/img/shape/9.png" alt="Shape">
        </div>
        <!-- End Shape -->
        <div class="container">
            <div class="testimonial-items">
                <div class="row align-center">
                    <div class="col-lg-7 review">
                        <h2>What people say about us</h2>
                        <div class="testimonial-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{asset('f')}}/img/100x100.png" alt="Author">
                                </div>
                                <div class="info">
                                    <p>
                                        Otherwise concealed favourite frankness on be at dashwoods defective at. Sympathize interested simplicity at do projecting increasing terminated. As edward settle limits at in. Chamber reached do he nothing be. 
                                    </p>
                                    <h4>Ahel Natasha</h4>
                                    <span> Managing Director</span>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{asset('f')}}/img/100x100.png" alt="Author">
                                </div>
                                <div class="info">
                                    <p>
                                        Otherwise concealed favourite frankness on be at dashwoods defective at. Sympathize interested simplicity at do projecting increasing terminated. As edward settle limits at in. Chamber reached do he nothing be. 
                                    </p>
                                    <h4>Ahel Natasha</h4>
                                    <span> Managing Director</span>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                    <div class="col-lg-5 thum">
                        <img src="{{asset('f')}}/img/illustration/12.png" alt="illustration">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->

    <!-- Start Pricing 
    ============================================= -->
    <div id="pricing" class="pricing-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Our Packages</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pricing-items">
                <div class="row">
                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h4>Trial Version</h4>
                                <span>Save 25%</span>
                                <h2><sup>$</sup>0 <sub>/ Monthly</sub></h2>
                            </div>
                            <ul>
                                <li>Demo file</li>
                                <li>Update</li>
                                <li>File compressed</li>
                                <li>Commercial use</li>
                                <li>Support</li>
                            </ul>
                            <div class="footer">
                                <a class="btn circle btn-theme-border btn-sm" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h4>Regular</h4>
                                <span>Save 35%</span>
                                <h2><sup>$</sup>29 <sub>/ Monthly</sub></h2>
                            </div>
                            <ul>
                                <li>Demo file</li>
                                <li>Update</li>
                                <li>File compressed</li>
                                <li>Commercial use</li>
                                <li>Support</li>
                            </ul>
                            <div class="footer">
                                <a class="btn circle btn-theme-effect btn-sm" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h4>Extended</h4>
                                <span>Save 49%</span>
                                <h2><sup>$</sup>59 <sub>/ Monthly</sub></h2>
                            </div>
                            <ul>
                                <li>Demo file</li>
                                <li>Update</li>
                                <li>File compressed</li>
                                <li>Commercial use</li>
                                <li>Support</li>
                            </ul>
                            <div class="footer">
                                <a class="btn circle btn-theme-border btn-sm" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Area -->

    <!-- Start Blog 
    ============================================= -->
    <div id="blog" class="blog-area default-padding-top bg-gray bottom-less">
        <!-- Shape -->
        <div class="fixed-shape-bottom">
            <img src="{{asset('f')}}/img/shape/6.png" alt="Shape">
        </div>
        <!-- End Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Latest News</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!-- Single item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="#"><img src="{{asset('f')}}/img/800x600.png" alt="Thumb"></a>
                            <div class="date"><strong>18</strong> <span>Apr</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user"></i> User</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 26 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="#">Overcame breeding or my concerns removing desirous.</a>
                            </h4>
                            <p>
                                Possession ye no mr unaffected remarkably at. Wrote house in never fruit up. Pasture imagine my garrets.  
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->

                <!-- Single item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="#"><img src="{{asset('f')}}/img/800x600.png" alt="Thumb"></a>
                            <div class="date"><strong>25</strong> <span>Aug</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user"></i> Admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 35 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="#">Considered imprudence of he friendship boisterous.</a>
                            </h4>
                            <p>
                                Possession ye no mr unaffected remarkably at. Wrote house in never fruit up. Pasture imagine my garrets.  
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->

                <!-- Single item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="#"><img src="{{asset('f')}}/img/800x600.png" alt="Thumb"></a>
                            <div class="date"><strong>05</strong> <span>Jul</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user"></i> user</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 12 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="#">Overcame breeding or my concerns removing desirous.</a>
                            </h4>
                            <p>
                                Possession ye no mr unaffected remarkably at. Wrote house in never fruit up. Pasture imagine my garrets.  
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->

            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Contact Area 
    ============================================= -->
    <div id="contact" class="contact-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5 info">
                    <h2>Let's talk?</h2>
                    <p>
                        It's all about the humans behind a brand and those experiencing it, we're right there. In the middle.
                    </p>
                    <ul>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>
                                22 Baker Street, <br> London, United Kingdom, <br> W1U 3BW
                            </p>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <p>
                                {{ $gs ? $gs->contact_no_1 : '' }} <br> {{ $gs ? $gs->contact_no_2 : '' }}
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 offset-lg-1 contact-form-box">
                    <div class="alert alert-success d-none" id="success-message">
                        <span>Your message is reached to us. We will contactwith you soon.</span>
                    </div>
                    <div class="form-box">
                        <form action="{{route('save_contact')}}" method="POST" id="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text" maxlength="20" required>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="message" name="message" placeholder="Tell Us About Project *" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="{{asset('f')}}/img/logo-light.png" alt="Logo">
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing.
                            </p>
                            <form action="#">
                                <input type="email" placeholder="Your Email" class="form-control" name="email">
                                <button type="submit"> <i class="arrow_right"></i></button>  
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Quick LInk</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Home</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> About us</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Compnay History</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Features</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Blog Page</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Community</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Career</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Leadership</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Strategy</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Services</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> History</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Components</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item contact-widget">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Address:</strong>
                                            5919 Trussville Crossings Pkwy, Birmingham
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Email:</strong>
                                            <a href="mailto:{{ $gs ? $gs->contact_email : '' }}">{{ $gs ? $gs->contact_email : '' }}</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Phone:</strong>
                                            <a href="tel:{{ $gs ? $gs->hotline_no : '' }}">{{ $gs ? $gs->hotline_no : '' }}</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright {{date('Y')}}. All Rights Reserved by <a href="https://portfolio.softheaven.org">SoftHeaven</a></p>
                    </div>
                    <div class="col-lg-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
    
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