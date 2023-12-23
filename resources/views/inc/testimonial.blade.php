
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
                            @foreach($testimonials as $testimonial)
                                @component('components.frontend.testimonials', [
                                    'testimonial' => $testimonial,
                                ])
                                @endcomponent
                            @endforeach
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