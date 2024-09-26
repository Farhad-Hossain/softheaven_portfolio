<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">

			@foreach($sliders as $slider)
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('{{asset("uploaded_images")}}/{{$slider->photo}}')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1> {{ $slider->title }} </h1>
									<p>{{ $slider->title_short_description }}</p>
									<div class="button">
										@if( $slider->first_button_link && $slider->first_button_text )
											<a href="{{ $slider->first_button_link }}" class="btn">{{ $slider->first_button_text }}</a>
										@endif
										@if( $slider->second_button_link && $slider->second_button_text )
											<a href="{{ $slider->second_button_link }}" class="btn primary">{{ $slider->second_button_text }}</a>
										@endif
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			@endforeach
				
			</div>
		</section>
		<!--/ End Slider Area -->