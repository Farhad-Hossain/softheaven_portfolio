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
                        <p>Explore our tech journey in the Blog section. Uncover software marvels, innovation insights, and our commitment to reshaping the digital landscape. Welcome to limitless possibilities!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <!-- Single item -->
                <div class="single-item col-md-4" style="min-height: 700px;">
                    <div class="item">
                        <div class="thumb">
                            <a href="#"><img src="{{asset('storage')}}/{{$blog->thumbnail}}" alt="Thumb" style="height: 230px; width: 100%;"></a>
                            <div class="date"><strong>{{\Carbon\Carbon::parse($blog->publication_date)->format('d')}}</strong> <span>{{\Carbon\Carbon::parse($blog->publication_date)->format('M')}}</span></div>
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
                                <a href="{{route('blog_details', ['slug'=>$blog->slug])}}">{{ substr( $blog->title, 0, 70 )}} </a>
                            </h4>
                            <p>
                                {{ substr(html_entity_decode( strip_tags($blog->content) ), 
                                    0, 100) }} <a href="{{route('blog_details', ['slug'=>$blog->slug])}}" class="text-primary">See More</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Blog -->