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