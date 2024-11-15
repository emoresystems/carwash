@include('layouts.header')

<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Us</h2>
                    <ul class="bread-list">
                        <li><a href="/">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Contact Us -->
<section class="contact-us section">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-us-left">
                        <!--Start Google-map -->
                        {{-- <div id="myMap"></div> --}}
                        <gmp-map center="-1.2908753156661987,36.82356643676758" zoom="14" map-id="DEMO_MAP_ID">
                            <gmp-advanced-marker position="-1.2908753156661987,36.82356643676758" title="My location"></gmp-advanced-marker>
                        </gmp-map>
                        <!--/End Google-map -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-form">
                        <h2>Contact Us</h2>
                        <p>If you have any questions please feel free to contact us.</p>
                        <!-- Form -->
                        <form class="form" method="post" action="{{ route('contacts.store') }}">
                            @csrf <!-- CSRF Token for security -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Your Message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group login-btn">
                                        <button class="btn" type="submit">Send</button>
                                    </div>
                                    {{-- <div class="checkbox">
                                        <label class="checkbox-inline" for="2">
                                            <input name="subscribe" id="2" type="checkbox">Do you want to subscribe to our Newsletter?
                                        </label>
                                    </div> --}}
                                </div>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-info">
            <div class="row">
                <!-- single-info -->
                <div class="col-lg-4 col-12 ">
                    <div class="single-info">
                        <i class="icofont icofont-ui-call"></i>
                        <div class="content">
                            <h3>+(254) 713 954 944</h3>
                            <p>emoredesigns39@gmail.com</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->
                <!-- single-info -->
                <div class="col-lg-4 col-12 ">
                    <div class="single-info">
                        <i class="icofont-google-map"></i>
                        <div class="content">
                            <h3>P.o box 306 - 60401</h3>
                            <p>Chogoria, Kenya.</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->
                <!-- single-info -->
                <div class="col-lg-4 col-12 ">
                    <div class="single-info">
                        <i class="icofont icofont-wall-clock"></i>
                        <div class="content">
                            <h3>Mon - Friday: 8am - 5pm</h3>
                            <p>Saturday 9am - 1pm</p>
                            <p>Sunday Closed</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->
            </div>
        </div>
    </div>
</section>
<!--/ End Contact Us -->

@include('layouts.footer')
