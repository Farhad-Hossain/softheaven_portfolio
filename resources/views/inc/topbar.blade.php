<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							<ul class="top-link">
								<li><a href="#">About</a></li>
								<li><a href="#">Doctors</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i>
                                   <a href="tel:{{$gs?$gs->hotline_no:''}}">{{$gs?$gs->hotline_no:''}}</a> 
                                </li>
								<li><i class="fa fa-envelope"></i>
                                    <a href="mailto:{{ $gs ? $gs->contact_email : '' }}">{{ $gs ? $gs->contact_email : '' }}</a>
                                </li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->