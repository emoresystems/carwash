@include('layouts.header')

<style>
    /* Project Page Styles */
    .card {
        background: #ffffff;
        border: 1px solid #e6e6e6;
        border-radius: 8px;
        margin-bottom: 30px;
        overflow: hidden;
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

    .slideshow-container {
        position: relative;
        margin-top: 20px;
    }

    .slides {
        display: none;
    }

    .slide-img {
        width: 100%;
        height: auto;
    }

    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -30px;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    .prev:hover, .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .section-content {
        padding: 25px;
    }

    .section-title {
        color: #333;
        padding: 15px;
        margin-bottom: 15px;
        border-bottom: 1px solid #e6e6e6;        
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .description {
        font-size: 16px;
        line-height: 1.6;
        color: #333;
        margin-bottom: 20px;
    }

    .functionalities {
        margin-top: 30px;
    }

    .functionalities h3 {
        font-size: 20px;
        color: #333;
        margin-bottom: 15px;
    }

    .functionalities ul {
        list-style-type: disc;
        margin-left: 20px;
    }
    .section-header{
        background-color: #ffc400

    }
</style>
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Our Projects</h2>
                    <ul class="bread-list">
                        <li><a href="/">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Projects</li>
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
                    <h2>Our Projects</h2>
                    <img src="img/section-img.png" alt="#">
                    <p>Explore some of our featured projects below.</p>
                </div>
            </div>
        </div>
        <!-- Start Cards Area -->
        <!-- E-commerce System Card -->
        <div class="col-12">
            <div class="card">
                <h2 class="section-title section-header">E-commerce System</h2>
                <!-- Slideshow for E-commerce System -->
                <div class="slideshow-container">
                    <div class="slides">
                        <img class="slide-img" src="img/projects/ecommerce.png" alt="E-commerce System Screenshot">
                    </div>
                    <div class="slides">
                        <img class="slide-img" src="img/projects/ecommerce1.png" alt="E-commerce System Screenshot">
                    </div>
                    <div class="slides">
                        <img class="slide-img" src="img/projects/ecommerce2.png" alt="E-commerce System Screenshot">
                    </div>
                    <div class="slides">
                        <img class="slide-img" src="img/projects/ecommerce3.png" alt="E-commerce System Screenshot">
                    </div>

                    <!-- Navigation buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <!-- Description -->
                <div class="section-content">
                    <p class="description">An advanced e-commerce platform designed to facilitate online buying and selling of products, with features like user authentication, product categorization, shopping cart, and secure payment processing.</p>
                    <div class="golden-hr"></div>
                    <div class="functionalities">
                        <h3>Functionalities:</h3>
                        <ul>
                            <li>User authentication and authorization</li>
                            <li>Product management and categorization</li>
                            <li>Shopping cart functionality</li>
                            <li>Secure payment processing</li>
                            <li>Order tracking and management</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End E-commerce System Card -->
        
        <!-- Real Estate System Card -->
        <div class="col-12">
            <div class="card">
                <h2 class="section-title section-header">Real Estate System</h2>
                <!-- Slideshow for Real Estate System -->
                <div class="slideshow-container">
                    <div class="slides">
                        <img class="slide-img" src="img/realestate-1.jpg" alt="Real Estate System Screenshot">
                    </div>
                    <div class="slides">
                        <img class="slide-img" src="img/realestate-2.jpg" alt="Real Estate System Screenshot">
                    </div>
                    <!-- Navigation buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <!-- Description -->
                <div class="section-content">
                    <p class="description">A comprehensive real estate management system tailored for property listing, sales, and rental management, with features like property search, appointment scheduling, and document management.</p>
                    <div class="golden-hr"></div>
                    <div class="functionalities">
                        <h3>Functionalities:</h3>
                        <ul>
                            <li>Property listing and categorization</li>
                            <li>Search and filter functionality</li>
                            <li>Appointment scheduling</li>
                            <li>Document management</li>
                            <li>Sales and rental management</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Real Estate System Card -->

        <!-- School IMS Card -->
        <div class="col-12">
            <div class="card">
                <h2 class="section-title section-header">School Information Management System</h2>
                <!-- Slideshow for School IMS -->
                <div class="slideshow-container">
                    <div class="slides">
                        <img class="slide-img" src="img/schoolims-1.jpg" alt="School IMS Screenshot">
                    </div>
                    <div class="slides">
                        <img class="slide-img" src="img/schoolims-2.jpg" alt="School IMS Screenshot">
                    </div>
                    <!-- Navigation buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <!-- Description -->
                <div class="section-content">
                    <p class="description">A robust information management system tailored for educational institutions, facilitating student enrollment, attendance tracking, grade management, and communication between stakeholders.</p>
                    <div class="golden-hr"></div>
                    <div class="functionalities">
                        <h3>Functionalities:</h3>
                        <ul>
                            <li>Student enrollment and admission management</li>
                            <li>Attendance tracking and reporting</li>
                            <li>Grade and performance management</li>
                            <li>Teacher and staff management</li>
                            <li>Parent-teacher communication portal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End School IMS Card -->
    </div>
</section>

@include('layouts.footer')

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slides");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }
</script>
