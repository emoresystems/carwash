@include('layouts.header')
    
<!-- Start Appointment -->
<section class="appointment">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>Experience Seamless Software Solutions. Book Your Demo Today!</h2>
					<img src="img/section-img.png" alt="#">
					<p>Unlock the full potential of our cutting-edge software solutions tailored to meet your specific needs.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12 col-12">
				<form class="form" action="{{ route('orders.store') }}" method="POST">
					@csrf
											@if ($errors->any())
												<div>
													<ul>
														@foreach ($errors->all() as $error)
															<li class="text-danger">{{ $error }}</li>
														@endforeach
													</ul>
												</div>
											@endif
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<input name="name" type="text" placeholder="Your Name">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<input name="email" type="email" placeholder="Your Email">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<input name="phone" type="text" placeholder="Your Phone">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<input name="service" type="text" placeholder="Software or graphic design">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<input name="budget" type="number" placeholder="Your estimate budget">
							</div>
						</div>
						
						{{-- <div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<div class="nice-select form-control wide" tabindex="0"><span class="current">Service Type</span>
									<ul class="list">
										<li data-value="1" class="option selected ">Personal Website</li>
										<li data-value="2" class="option">Company Website</li>
										<li data-value="3" class="option">Custom Software</li>
										<li data-value="4" class="option">Graphic Design</li>
										<li data-value="5" class="option">General Services</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<div class="nice-select form-control wide" tabindex="0"><span class="current">Pages Range</span>
									<ul class="list">
										<li data-value="1" class="option selected ">0 - 2 Pages</li>
										<li data-value="2" class="option">0 - 4 Pages</li>
										<li data-value="3" class="option">0 - 6 Pages</li>
										<li data-value="4" class="option">0 - Max Pages</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<input type="text" placeholder="Expectation Date" id="datepicker">
							</div>
						</div> --}}
						<div class="col-lg-12 col-md-12 col-12">
							<div class="form-group">
								<label for="message">Message</label>
								<textarea name="message" id="message" > {{ old('message') }} </textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-5 col-md-4 col-12">
							<div class="form-group">
								<div class="button">
									<button type="submit" class="btn" placeholder="Your message">Place Your Order</button>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-md-8 col-12">
							<p>( We will confirm through a Call )</p>
						</div>
					</div>
				</form>

				{{-- @if ($errors->any())
					<div>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif --}}

			</div>
			<div class="col-lg-6 col-md-12 ">
				<div class="appointment-image">
					<img src="img/emorecap.jpg" alt="#" style="border-radius: 5px;">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Appointment -->

@include('layouts.footer')