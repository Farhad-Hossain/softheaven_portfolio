<!-- Single Item -->
<div class="item">
    <div class="thumb">
        <img src="{{asset('storage')}}/{{$testimonial->avatar}}" alt="Author">
    </div>
    <div class="info">
        <p>
            {{ $testimonial->message }}
        </p>
        <h4>{{ $testimonial->name }}</h4>
        <span> {{ $testimonial->designation }}</span>
    </div>
</div>
<!-- End Single Item -->