<div id="blog" class="blog-area default-padding-top bg-gray bottom-less">
    <div class="container my-4 py-4 bg-light rounded">
        <div class="row">
            <div class="single-item col-sm-12 col-md-8">
                <img src="{{asset('storage')}}/{{$blog->thumbnail}}" alt="" style="border-radius: 5px; width: 100%; height: 300px;">
                <p style="text-decoration: underline;">{{ \Carbon\Carbon::parse($blog->published_date)->format('d M, Y') }}</p>
                <h4>{{ $blog->title }}</h4>
                <p>{!! $blog->content !!}</p>
            </div>

            <div class="col-sm-12 col-md-4">
                <img src="{{asset('storage')}}/{{$blog->thumbnail}}" alt="" style="border-radius: 5px; margin-bottom: 10px;">
                <div class="card">
                    <div class="card-header p-2 font-weight-bold">Related Blogs</div>
                    <div class="card-body">
                        @foreach($allBlogs as $b)
                            <a href="{{route('blog_details', ['slug'=>$b->slug])}}" class="blog-link">{{ $b->title }}</a>
                            <hr />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>