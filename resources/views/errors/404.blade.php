	@include('layouts.header')
		
		<!-- Error Page -->
		<section class="error-page section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-12">
						<!-- Error Inner -->
						<div class="error-inner">
							<h1>404 <span>Oop's, sorry we can't find that page!</span></h1>
							<p>
								We couldn't find the page you're looking for. It seems like the page you were trying to reach doesn't exist or has been moved. Please check the URL for any mistakes or <a href="/" style="color: rgb(255, 200, 0)">return to the homepage</a>.
							</p>

							{{-- <form class="search-form">
								<input placeholder="Search from Here" type="text">
								<button class="btn" type="submit"><i class="fa fa-search"></i></button>
							</form> --}}
						</div>
						<!--/ End Error Inner -->
					</div>
				</div>
			</div>
		</section>	
		<!--/ End Error Page -->
		
		@include('layouts.footer')