<!-- Start Overview 
    ============================================= -->
    <div id="overview" class="overview-area relative default-padding-top carousel-shadow" style="background: rgb(235, 246, 255);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Quick Service Overview</h2>
                        <div class="devider"></div>
                        <p>Effortless Efficiency Awaits: Explore Swift and Seamless Solutions for Your Unique Business Needs!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($services as $s)
                <div class="col-md-4 single-item mb-4">
                    <div class="" style="border: 1px solid lightgrey; padding: 20px; text-align: center; border-radius: 5px; height: 280px;">
                        <p style="text-decoration: underline; text-underline-offset: 5px;"><b>- {{ $s->title }} -</b></p>
                        <p>
                            {{ $s->description }}
                        </p>
                    </div>
                </div>
                @endforeach
                
                {{--
                <div class="col-md-12">
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
                --}}
            </div>
        </div>
    </div>
    <!-- End Overview -->