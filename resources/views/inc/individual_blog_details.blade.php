<div id="blog" class="blog-area default-padding-top bg-gray bottom-less">
    <div class="container my-4 py-4">
        <div class="row">
            <div class="single-item col-sm-12 col-md-8">
                <h3>{{ $blog->title }}</h3>
                <p>{!! $blog->content !!}</p>
            </div>

            <div class="col-sm-12 col-md-4">
                <img src="{{asset('storage')}}/{{$blog->thumbnail}}" alt="">
            </div>
        </div>
    </div>
</div>