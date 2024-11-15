@include('layouts.header')

<style>
    /* About Us Styles */
    .card {
        background: #ffffff;
        border: 1px solid #e6e6e6;
        border-radius: 8px;
        margin-bottom: 30px;
        padding: 25px;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.1);
    }

    .golden-hr {
        height: 2px;
        background-color: #ffd700;
        width: 100%;
        margin-top: 20px;
        animation: glow 1s ease-in-out infinite alternate;
    }

    @keyframes glow {
        0% {
            opacity: 0.5;
        }

        100% {
            opacity: 1;
        }
    }
</style>

        <!-- Breadcrumbs -->
        <div class="breadcrumbs overlay">
            <div class="container">
                <div class="bread-inner">
                    <div class="row">
                        <div class="col-12">
                            <h2>Other Pages</h2>
                            <ul class="bread-list">
                                <li><a href="/">Home</a></li>
                                <li><i class="icofont-simple-right"></i></li>
                                <li class="active">Emore</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <section class="blog section" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>About Emore</h2>
                            <img src="img/section-img.png" alt="#">
                            <p>Emore, comprising Emore Designs and Emore Systems, is poised to assist you and your business with comprehensive software and graphic design solutions whenever you need them.</p>
                        </div>
                    </div>
                </div>
                <!-- Start cards Area -->
                <!-- Who We Are Card -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="section-content">
                            <h2 class="section-title">Who We Are</h2>
                            <p>
                                Emore Designs and Emore Systems are driven by a team of experienced professionals dedicated to providing innovative software and graphic design solutions tailored to your specific needs.
                            </p>
                        </div>
                        <div class="golden-hr"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Who We Are Card -->

        <!-- What Drives Us Card -->
        <div class="container" id="mission">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="section-content">
                            <h2 class="section-title">What Drives Us</h2>
                            <p>
                                At Emore, our passion for creativity and technology fuels our drive to exceed expectations and deliver exceptional results with every project we undertake.
                            </p>
                        </div>
                        <div class="golden-hr"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End What Drives Us Card -->

        <!-- Our Mission Card -->
        <div class="container" id="vision">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="section-content">
                            <h2 class="section-title">Our Mission</h2>
                            <p>
                                Our mission at Emore is to empower individuals and businesses through innovative software and graphic design solutions, fostering growth and success in an ever-evolving digital landscape.
                            </p>
                        </div>
                        <div class="golden-hr"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Our Mission Card -->

        <!-- Our Vision Card -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="section-content">
                            <h2 class="section-title">Our Vision</h2>
                            <p>
                                Our vision is to be a leading provider of cutting-edge software and graphic design solutions, recognized for our commitment to excellence, innovation, and client satisfaction.
                            </p>
                        </div>
                        <div class="golden-hr"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Our Vision Card -->         

	</div>
</section>

@include('layouts.footer')

