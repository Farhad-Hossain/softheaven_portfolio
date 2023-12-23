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
        <a class="navbar-brand" href="/">
            <img src="{{asset('storage')}}/{{$gs ? $gs->logo : ''}}" class="logo" alt="Logo">
        </a>
    </div>
    <!-- End Header Navigation -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-center" data-in="#" data-out="#">
            <li>
                <a class="smooth-menu" href="/">Home</a>
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
            {{--
            <li>
                <a class="smooth-menu" href="#pricing">Pricing</a>
            </li>
            --}}
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