@include('layouts.header')

<style>
    /* Service Card Styles */
    .single-service {
        background: #ffffff;
        border: 1px solid #d8d8d8;
        padding: 10px 55px;
        border-radius: 8px;
        margin-bottom: 20px;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

    .single-service:hover {
        transform: translateY(-5px);
        box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.1);
    }

    .service-head {
        overflow: hidden;
    }

    .service-head img {
        width: 100%;
        border-radius: 15px;
        display: block;
        border-bottom: 1px solid #e6e6e6;
    }

    .service-content {
        padding: 20px;
    }

    .service-content h4 {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 10px;
        color: #333333;
    }

    .service-content p {
        font-size: 16px;
        line-height: 24px;
        color: #666666;
    }    
</style>

<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Our Services</h2>
                    <ul class="bread-list">
                        <li><a href="/">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Services Section -->
<section class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
				<div class="section-title">
					<h2>Keep Up With Our Latest Software Services</h2>
					<img src="img/section-img.png" alt="#">
					<p>Stay ahead of the curve with our newest software developments and technological breakthroughs with emore systems</p>
				</div>
			</div>
            <div class="container-fluid">
                <div class="row justify-content-between">
                    @foreach($serviceCards as $serviceCard)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-service">
                                <div class="service-head p-2">
                                    <!-- Generate image URL -->
                                    <img src="{{ asset('storage/images/' . basename($serviceCard->image_url)) }}" alt="service image" />
                                </div>
                                <div class="service-content">
                                    <h4>{{ $serviceCard->heading }}</h4>
                                    <p>{{ $serviceCard->description }}</p>
                                    <a href="/contact" target="_blank">
                                        <button class="btn btn-light-secondary mt-3">More information</button>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            
            
           
        </div>
    </div>
</section>
<!-- End Services Section -->

@include('layouts.footer')
4