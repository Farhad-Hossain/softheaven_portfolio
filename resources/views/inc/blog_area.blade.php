<!-- Start Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Our Blog Post About Software Development</h2>
							<img src="{{asset('f')}}/img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					@foreach ($blogs as $blog)
					<!-- Single Blog -->
					<div class="col-lg-4 col-md-6 col-12">
						<div class="single-news">
							<div class="news-head">
								<img src="{{asset('storage')}}/{{ $blog->thumbnail }}" class="blog-thumbnail">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">{{ \Carbon\Carbon::parse($blog->publication_date)->format('d M, Y') }}</div>
									<h2><a href="blog-single.html">{{ $blog->title }}</a></h2>
									<p class="text">{!! shortenText(strip_tags($blog->content), 100) !!}</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Blog -->
					@endforeach
				</div>
			</div>
		</section>
		<!-- End Blog Area -->