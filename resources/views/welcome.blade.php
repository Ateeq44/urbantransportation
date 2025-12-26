@extends('layouts.user')

@section('content')

    <!-- Banner Section -->
    <section class="home-banner-section">
        <div class="container banner-section">
            <div class="row banner-row">
                <div class="col-lg-6 ">
                    <div class="row banner-row-two">
                        <div class="col-lg-12">
                            <div class="banner-content">
                                <h1 data-aos="fade-up-right">Safe, Reliable <span> Non-Emergency </span> <br> <span
                                        class="home-banner-span-color"> Medical Transportation</span> in Houston</h1>
                                <p data-aos="fade-up">Available for you 24 Hours 7 Days a week </p>
                                <!-- <p data-aos="fade-up">Available 24/7 for medical appointments, hospital discharges, and everyday needs. Professional drivers, ADA-compliant vans, and care you can trust.</p> -->

                                <div class="banner-btns">
                                    <div class="banner-btn-one" data-aos="fade-up-right">
                                        <a href="{{ url('quote') }}">Get A Quote <i
                                                class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="banner-btn-two" data-aos="fade-up-left">
                                        <a href="tel:+18328442012">Call Now <i class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div><!--banner-content-->
                        </div><!--col lg 12-->

                        <div class="col-lg-7 rating-card-col ">
                            <div class="rating-card  " data-aos="fade-up-right">
                                <div class="d-flex align-items-center ">
                                    <!-- Rounded Images -->
                                    <img src="assets/front_end/image/review-1.png"
                                        class="rounded-circle border me-1" alt="User 1">
                                    <img src="assets/front_end/image/review-2.png"
                                        class="rounded-circle border me-1" alt="User 2">
                                    <img src="assets/front_end/image/review-3.png"
                                        class="rounded-circle border me-1" alt="User 3">
                                    <!-- Plus Button -->
                                    <a href="#" target="_blank"
                                        class="btn rating-btn">+</a>
                                </div>

                                <!-- Rating -->
                                <div class="rating-right-card">
                                    <div class="rating-right-star">
                                        <i class="fa-solid fa-star text-white me-3"></i>
                                    </div>

                                    <div class="rating-right-text">
                                        <h5>5.0</h5>
                                        <p>Average Rating</p>
                                    </div>

                                </div>

                                <!-- Text -->

                            </div>
                        </div><!--col lg 12-->


                    </div><!--row-->

                </div><!--main col lg- 6-->


                <div class="col-lg-6 banner-images-col">
                    <div class="banner-images" data-aos="fade-up-left">
                        <img src="assets/front_end/image/banner-img-5.svg" class="img-fluid" alt="">
                    </div>

                    <div class="banner-rides">
                        <div class="banner-rides-icon">
                            <i class="fa-solid fa-truck-medical"></i>
                        </div>
                        <div class="banner-rides-text">
                            <h6>2500+</h6>
                            <p>Rides Completed</p>
                        </div>
                    </div>

                </div><!--col 6-->

            </div> <!--row-->

            <div class="home-banner-shape-one">
                <img src="assets/front_end/image/shape-right.svg" class="img-fluid" alt="">
            </div>

            <div class="home-banner-shape-two">
                <img src="assets/front_end/image/shape-left.svg" class="img-fluid" alt="">
            </div>

        </div>
    </section>
    <!-- Banner Section end-->


    <!-- abut -->
    <section class="about-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 about-image-col">
                    <div class="about-image" data-aos="fade-up-right">
                        <img src="assets/front_end/image/about-img.png" class="img-fluid" alt="">
                    </div>

                    <div class="about-image-content">
                        <div class="about-image-content-icon">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <div class="about-image-content-text">
                            <h6>5+ Years of Experience</h6>
                            <p>Delivering safe and reliable rides since day one.</p>
                        </div>
                    </div>

                </div><!--col 6-->

                <div class="col-lg-6">
                    <div class="about-content">
                        <h6>About Us</h6>
                        <h1 data-aos="fade-up">Caring Transportation <span> Built On Trust</span> </h1>
                        <p data-aos="fade-up">Founded in 2021 , Royality Medical Transportation was created to fill the gap
                            in reliable transportation for patients and individuals who need help getting to their medical
                            appointments.We believe that access to healthcare is a right — not a privilege — and we work
                            every day to make that access easier.</p>
                        <p data-aos="fade-up">We proudly serve Houston with a team of trained,compassionate professionals
                            dedicated to getting you where you need to go ,safely and on time.</p>
                        <div class="about-btn" data-aos="fade-up-right">
                            <a href="{{ url('about') }}">Know More <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- service -->
    <section class="service-section">
        <div class="container service-bg">
            <div class="row">

                <div class="col-lg-12">
                    <div class="service-head-title">
                        <h6>Services</h6>
                        <h1 data-aos="zoom-in">Compassionate Rides <span>On Time. Every Time.</span></h1>
                        <p data-aos="zoom-in">At Royality we specialize in non-emergency medical transportation for
                            individuals who need safe,timely and professional transport <br>to healthcare appointments and
                            essential services. Whether you're a senior,disabled,recovering from surgery or <br>need a
                            little extra help getting around,we're here to serve with care and compassion.</p>
                    </div>
                </div>

            </div><!--row-->

            <div class="row service-card-row">

                <div class="col-lg-4 col-md-6">
                    <a href="{{ url('service') }}"> 
                        <div class="service-card">
                            <div class="service-icon">
                                <img src="assets/front_end/image/dashboard-service-1.svg" class="img-fluid" alt="">
                            </div>
                            <div class="service-content">
                                <h6>Recurring Appointments</h6>
                                <p>We offer recurring scheduling for a dialysis , physical therapy , chemotherapy,and more - so
                                    you never miss an important visit.</p>
                            </div>
                        </div>
                    </a>
                </div><!--col 4-->
                <!-- card  1 -->

                <div class="col-lg-4 col-md-6">
                    <a href="{{ url('service') }}"> 
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="assets/front_end/image/dashboard-service-2.svg" class="img-fluid"
                                alt="">
                        </div>
                        <div class="service-content">
                            <h6>Stretcher Transportation</h6>
                            <p>Safe and professional transport for patients who must remain lying down.Ideal for hospital
                                discharges or post-surgical appointments.</p>
                        </div>
                    </div>
                    </a>
                </div><!--col 4-->
                <!-- card  2 -->

                <div class="col-lg-4 col-md-6">
                    <a href="{{ url('service') }}"> 
                        <div class="service-card">
                            <div class="service-icon">
                                <img src="assets/front_end/image/dashboard-service-3.svg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="service-content">
                                <h6>Wheelchair Transportation</h6>
                                <p>ADA-Compliant vehicles with secure wheelchair lifts and safety restraints.Our trained drivers
                                    assist every step of the way.</p>
                            </div>
                        </div>
                    </a>
                </div><!--col 4-->
                <!-- card  3 -->

                <div class="col-lg-4 col-md-6">
                    <a href="{{ url('service') }}">
                        <div class="service-card">
                            <div class="service-icon">
                                <img src="assets/front_end/image/dashboard-service-4.svg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="service-content">
                                <h6>Ambulatory Transportation</h6>
                                <p>For Patients who can walk on their own or with minimal assistance.Comfortable and clean
                                    vehicles.</p>
                            </div>
                        </div>
                    </a>
                </div><!--col 4-->
                <!-- card  4 -->

                
                <!--col 4-->
                <!-- card  5 -->

                

                <div class="col-lg-4 col-md-6">
                    <a href="{{ url('service') }}">
                        <div class="service-card">
                            <div class="service-icon">
                                <img src="assets/front_end/image/dashboard-service-6.svg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="service-content">
                                <h6>Long Distance Travel</h6>
                                <p>Our services also includes non emergency long distance travel outside the Houston area.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- card  6 -->
            </div><!--row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="service-btn" data-aos="zoom-in">
                        <a href="{{ url('service') }}">Service Details <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div><!--row btn-->

            <div class="service-shapes-top-right">
                <img src="assets/front_end/image/shape-right.svg" class="img-fluid" alt="">
            </div>

            <div class="service-shapes-top-left">
                <img src="assets/front_end/image/shape-left.svg" class="img-fluid" alt="">
            </div>

            <div class="service-shapes-bottom-right">
                <img src="assets/front_end/image/shape-right.svg" class="img-fluid" alt="">
            </div>

            <div class="service-shapes-bottom-left">
                <img src="assets/front_end/image/shape-left.svg" class="img-fluid" alt="">
            </div>
        </div>
    </section>
    <!-- serviec end -->

    <!-- why choose -->
    <section class="whychoose-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="whychoose-content">
                        <h6 data-aos="zoom-in">Why Choose Us</h6>
                        <h1 data-aos="zoom-in-up">Why Choose <span> Royality Medical Transportation</span> </h1>
                        <p data-aos="zoom-in-up">We provide safe, affordable, and compassionate transportation—available
                            24/7 <br> with trained drivers and accessible vehicles you can always rely on.</p>
                        <div class="why-choose-points">
                            <p data-aos="zoom-in-up"><i class="fa-solid fa-circle-check"></i> Licensed & Insured Drivers
                            </p>
                            <p data-aos="zoom-in-up"><i class="fa-solid fa-circle-check"></i> Safe,Sanitized Vehicles</p>
                            <p data-aos="zoom-in-up"><i class="fa-solid fa-circle-check"></i> On-Time Guarantee</p>
                            <p data-aos="zoom-in-up"><i class="fa-solid fa-circle-check"></i> Door-to-Door Assistance</p>
                            <p data-aos="zoom-in-up"><i class="fa-solid fa-circle-check"></i> Flexible Scheduling</p>
                            <p data-aos="zoom-in-up">Your comfort,safety and peace of mind are our top priorities.</p>
                        </div>
                        <div class="why-choose-btn" data-aos="zoom-in-up">
                            <a href="{{ url('quote') }}">Get A Quote <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 why-choose-img-col">
                    <div class="why-choose-img" data-aos="fade-up-left">
                        <img src="assets/front_end/image/why-choose.png" class="img-fluid"
                            alt="">
                    </div>

                    <div class="whychoose-image-content">
                        <div class="whychoose-image-content-icon">
                            <img src="assets/front_end/image/why-checked.svg" class="img-fluid"
                                alt="">
                        </div>
                        <div class="whychoose-image-content-text">
                            <h6>24/7 Availability</h6>
                            <p>Rides ready whenever you need them.</p>
                        </div>
                    </div>
                </div>
            </div><!--row-->
        </div>
    </section>
    <!-- why end -->

    <!-- how we work -->
    <section class="how-work-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="how-head-title">
                        <h6 data-aos="zoom-in-down">How it Works</h6>
                        <h1 data-aos="zoom-in-down">From Call to Care, <span> Made Easy</span> </h1>
                        <p data-aos="zoom-in-down">Booking a ride with us is simple, fast, and stress-free—designed to get
                            you where <br> you need to be with ease and comfort.</p>
                    </div>
                </div>
            </div>

            <div class="row how-card-row">

                <div class="col-lg-4">
                    <div class="how-card" data-aos="flip-left">
                        <div class="how-card-icon">
                            <img src="assets/front_end/image/idea-1.svg" class="img-fluid"
                                alt="">
                        </div>

                        <div class="how-card-number">
                            <h6>1</h6>
                        </div>

                        <div class="how-card-content">
                            <h6>Book Your Ride</h6>
                            <p>Call us anytime or request a quote online. Our <br> team confirms your ride instantly.</p>
                        </div>
                    </div>
                </div>
                <!-- card 1 -->

                <div class="col-lg-4">
                    <div class="how-card" data-aos="flip-left">
                        <div class="how-card-icon">
                            <img src="assets/front_end/image/idea-2.svg" class="img-fluid"
                                alt="">
                        </div>

                        <div class="how-card-number">
                            <h6>2</h6>
                        </div>

                        <div class="how-card-content">
                            <h6>Get Picked Up</h6>
                            <p>Our drivers arrive on time with a vehicle <br>best suited for your needs.</p>
                        </div>
                    </div>
                </div>
                <!-- card 2 -->

                <div class="col-lg-4">
                    <div class="how-card" data-aos="flip-left">
                        <div class="how-card-icon">
                            <img src="assets/front_end/image/idea-3.svg" class="img-fluid"
                                alt="">
                        </div>

                        <div class="how-card-number">
                            <h6>3</h6>
                        </div>

                        <div class="how-card-content">
                            <h6>Ride with Comfort</h6>
                            <p>Relax and ride with confidence—we’ll get you to <br> your destination safely and on time.</p>
                        </div>
                    </div>
                </div>
                <!-- card 3 -->
                <div class="how-card-row-hr"></div>
            </div><!--row-->
        </div>
    </section>
    <!-- how end -->

    <!-- Commitment -->
    <section class="commitment-section">
        <div class="container commitment-bg">
            <div class="row">
                <div class="col-lg-12">
                    <div class="commitment-head-title">
                        <h1 data-aos="fade-up">Our Commitment to Care</h1>
                        <p data-aos="fade-up">Every decision we make is guided by our promise to deliver safe,
                            compassionate, and reliable <br> transportation for our community.</p>
                    </div>
                </div>
            </div><!--row-->

            <div class="row commitment-card-row">
                <div class="col-lg-4 col-md-6">
                    <div class="commitment-card" data-aos="fade-right">
                        <div class="commitment-card-img">
                            <img src="assets/front_end/image/commitment-2.png" class="img-fluid card-img"
                                alt="">
                        </div>
                        <div class="commitment-card-content">
                            <h6>Safety First</h6>
                            <p>Every ride is led by CPR-certified drivers and backed by strict protocols.</p>
                        </div>
                    </div>
                </div>
                <!-- car 1 -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="commitment-card">
                        <div class="commitment-card-img">
                            <img src="assets/front_end/image/commitment-1.png" class="img-fluid card-img"
                                alt="">
                        </div>
                        <div class="commitment-card-content">
                            <h6>Accessible for All</h6>
                            <p>ADA-compliant vehicles designed for safety, comfort, and ease of use.</p>
                        </div>
                    </div>
                </div>
                <!-- card 2 -->

                <div class="col-lg-4 col-md-6">
                    <div class="commitment-card" data-aos="fade-left">
                        <div class="commitment-card-img">
                            <img src="assets/front_end/image/commitment-3.png" class="img-fluid card-img"
                                alt="">
                        </div>
                        <div class="commitment-card-content">
                            <h6>Trusted by Families</h6>
                            <p>Years of dependable service supporting patients and families across Houston.</p>
                        </div>
                    </div>
                </div>
                <!-- card 3 -->
            </div><!--row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="commitment-btn" data-aos="fade-up">
                        <a href="#"> Know More <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="commitment-shape-top">
                <img src="assets/front_end/image/shape-top.svg" class="img-fluid" alt="">
            </div>

            <div class="commitment-shape-bottom">
                <img src="assets/front_end/image/shape-bottom.svg" class="img-fluid" alt="">
            </div>

            <div class="commitment-shape-top-right">
                <img src="assets/front_end/image/shape-right.svg" class="img-fluid" alt="">
            </div>

            <div class="commitment-shape-top-left">
                <img src="assets/front_end/image/shape-left.svg" class="img-fluid" alt="">
            </div>
        </div>
    </section>
    <!-- commitment end -->

    @include('layouts.testimonials')
    

@endsection