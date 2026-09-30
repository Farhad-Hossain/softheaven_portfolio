<!-- Start service -->
		<section class="services section" id="service_section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Offer Different Services To Improve Your Business</h2>
							<img src="{{asset('f')}}/img/section-img.png" alt="#">
							<p>Get our top rated services and make your business more efficient</p>
						</div>
					</div>
				</div>

				<div class="row">
					@foreach ($services as $service)
					<div class="col-lg-4 col-12 border rounded-3 shadow my-2">
						<!-- Start Single Service -->
						<div class="single-service ">
							<h4><a href="">{{ $service->title }}</a></h4>
							<p>{{ $service->description }}</p>	
						</div>
						<!-- End Single Service -->
					</div>
					@endforeach
					
				</div>
			</div>
		</section>
		<!--/ End service -->