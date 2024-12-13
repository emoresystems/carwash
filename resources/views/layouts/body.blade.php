@include('bodylayouts.features')

@include('bodylayouts.funfacts')

@include('bodylayouts.whyus')

<!-- Start Call to action -->
<section class="call-action overlay" data-stellar-bacfkground-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<div class="content">
					<h2>Need Graphic Design Services? Contact Us Today!</h2>
					<p>From logos to website design, we offer a wide range of creative solutions to elevate your brand.</p>
					<div class="button">
						<a href="/contact" class="btn">Contact Now</a>
						<a href="/learn more" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Call to action -->
{{-- 
<!-- Start portfolio -->
<section class="portfolio section" >
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>We Maintain Cleanliness Rules Inside Our Hospital</h2>
					<img src="img/section-img.png" alt="#">
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-12">
				<div class="owl-carousel portfolio-slider">
					<div class="single-pf">
						<img src="img/pf1.jpg" alt="#">
						<a href="/portfolio" class="btn">View Details</a>
					</div>
					<div class="single-pf">
						<img src="img/pf2.jpg" alt="#">
						<a href="portfolio-details.html" class="btn">View Details</a>
					</div>
					<div class="single-pf">
						<img src="img/pf3.jpg" alt="#">
						<a href="/portfolio" class="btn">View Details</a>
					</div>
					<div class="single-pf">
						<img src="img/pf4.jpg" alt="#">
						<a href="/portfolio" class="btn">View Details</a>
					</div>
					<div class="single-pf">
						<img src="img/pf1.jpg" alt="#">
						<a href="/portfolio" class="btn">View Details</a>
					</div>
					<div class="single-pf">
						<img src="img/pf2.jpg" alt="#">
						<a href="/portfolio" class="btn">View Details</a>
					</div>
					<div class="single-pf">
						<img src="img/pf3.jpg" alt="#">
						<a href="/portfolio" class="btn">View Details</a>
					</div>
					<div class="single-pf">
						<img src="img/pf4.jpg" alt="#">
						<a href="/portfolio" class="btn">View Details</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End portfolio -->

@include('bodylayouts.services')

@include('bodylayouts.pricing')

@include('bodylayouts.blogs')




<!-- Start clients -->
<div class="clients overlay">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<div class="owl-carousel clients-slider">
					<div class="single-clients">
						<img src="img/client1.png" alt="#">
					</div>
					<div class="single-clients">
						<img src="img/client2.png" alt="#">
					</div>
					<div class="single-clients">
						<img src="img/client3.png" alt="#">
					</div>
					<div class="single-clients">
						<img src="img/client4.png" alt="#">
					</div>
					<div class="single-clients">
						<img src="img/client5.png" alt="#">
					</div>
					<div class="single-clients">
						<img src="img/client1.png" alt="#">
					</div>
					<div class="single-clients">
						<img src="img/client2.png" alt="#">
					</div>
					<div class="single-clients">
						<img src="img/client3.png" alt="#">
					</div>
					<div class="single-clients">
						<img src="img/client4.png" alt="#">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/Ens clients -->


<!-- Start Newsletter Area -->
<section class="newsletter section">
	<div class="container">
		<div class="row ">
			<div class="col-lg-6  col-12">
				<!-- Start Newsletter Form -->
				<div class="subscribe-text ">
					<h6>Sign up for newsletter</h6>
					<p class="">Subscribe to our newsletter to stay updated with all the latest news, updates, and exclusive offers delivered directly to your inbox.</p>
				</div>
				<!-- End Newsletter Form -->
			</div>
			<div class="col-lg-6  col-12">
				<!-- Start Newsletter Form -->
				<div class="subscribe-form ">
					<form class="form" method="post" action="{{ route('contact.store') }}">
						<input name="EMAIL" placeholder="Your email address" class="common-input" onfocus="this.placeholder = ''"
							onblur="this.placeholder = 'Your email address'" required="" type="email">
						<button class="btn">Subscribe</button>
					</form>
				</div>
				<!-- End Newsletter Form -->
			</div>
		</div>
	</div>
</section> --}}
<!-- /End Newsletter Area -->