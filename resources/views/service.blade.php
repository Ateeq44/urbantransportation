@extends('layouts.user')

@section('content')
<!-- service banner -->
<section class="service-banner-section">
    <div class="container service-banner-bg">
        <div class="row">

            <div class="col-lg-7 service-banner-content-col ">
                <div class="service-banner-content">
                    <h1 data-aos="zoom-in-down">Non-Emergency Medical Transportation Services in Minneapolis, MN</h1>
                    <p data-aos="zoom-in-down">
                        Ride in Royalty, Arrive on Time. Every Time.
                    </p>

                    <div class="service-banner-btn" data-aos="zoom-in-down">
                        <a href="{{ url('quote') }}">Get A Quote <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>

                </div>
            </div>

            <div class="col-lg-5 service-banner-btn-col">

                    <!-- <div class="service-banner-btn">
                                <a href="https://royaltymedtrans.com/quote">Get Quote <i class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div> -->



                        </div><!--col lg 5-->

                    </div><!--row-->

                    <div class="service-banner-shape-left">
                        <img src="assets/front_end/image/shape-left.svg" class="img-fluid" alt="">
                    </div>

                    <div class="service-banner-shape-right">
                        <img src="assets/front_end/image/shape-right.svg" class="img-fluid" alt="">
                    </div>


                </div>
            </section>
            <!-- pages banner end -->

            <!-- sevice card -->
            <section class="service-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="service-head-tilte">
                                <h6 data-aos="zoom-in">Occasions</h6>
                                <h1 data-aos="zoom-in">What This <span> Service Covers</span> </h1>
                                <p data-aos="zoom-in">Urban Transportation Services offers professional non-emergency medical transportation in Minneapolis <br> designed to meet a variety of mobility and care needs. Our fleet includes wheelchair-accessible rear-entry <br> vans and vehicles operated by trained drivers focused onsafety and comfort.
                                </p>
                            </div>
                        </div>
                    </div><!--row-->

                    <div class="row">
                        <div class="col-lg-4 col-md-6 service-page-card-col">
                            <a href="{{ url('quote') }}">
                                <div class="service-card h-100">
                                    <div class="service-card-image">
                                        <img src="assets/front_end/image/service-3.svg" class="img-fluid card-img"
                                        alt="">
                                    </div>
                                    <div class="service-card-content">
                                        <h6>Wheelchair Transportation</h6>
                                        <p>We provide secure wheelchair transportation in Minneapolis using rear-entry
                                            wheelchair-accessible vehicles designed for safe loading, secure transport, and comfortable
                                            travel to medical appointments and essential destinations.
                                        </p>

                                        <a class="service-page-btn" href="{{ url('quote') }}">Get A Quote <i class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 service-page-card-col">
                            <a href="{{ url('quote') }}">
                                <div class="service-card h-100">
                                    <div class="service-card-image">
                                        <img src="assets/front_end/image/commitment-1.png" class="img-fluid card-img"
                                        alt="">
                                    </div>
                                    <div class="service-card-content">
                                        <h6>Ambulatory Transportation</h6>
                                        <p>Our ambulatory transportation service is ideal for individuals who can walk independently or
                                            need minimal assistance. We provide reliable rides to clinics, therapy appointments, and routine
                                            healthcare visits throughout Minneapolis.
                                        </p>

                                        <a class="service-page-btn" href="{{ url('quote') }}">Get A Quote <i class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 service-page-card-col">
                            <a href="{{ url('quote') }}">
                                <div class="service-card h-100">
                                    <div class="service-card-image">
                                        <img src="assets/front_end/image/stretcher.jpg" class="img-fluid card-img"
                                        alt="">
                                    </div>
                                    <div class="service-card-content">
                                        <h6>Stretcher Transportation</h6>
                                        <p>Urban Transportation Services offers professional stretcher transportation in Minneapolis for
                                            individuals who must remain lying down during transport. Safety, comfort, and proper handling
                                            are our top priorities.
                                        </p>

                                        <a class="service-page-btn" href="{{ url('quote') }}">Get A Quote <i class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 service-page-card-col">
                            <a href="{{ url('quote') }}">
                                <div class="service-card h-100">
                                    <div class="service-card-image">
                                        <img src="assets/front_end/image/service-im-1.png" class="img-fluid card-img"
                                        alt="">
                                    </div>
                                    <div class="service-card-content ">
                                        <h6>Recurring Appointments</h6>
                                        <p>We provide consistent transportation for recurring appointments such as dialysis, chemotherapy,
                                            physical therapy, behavioral health visits, and follow-up care throughout Minneapolis and
                                            surrounding areas.
                                        </p>

                                        <a class="service-page-btn" href="{{ url('quote') }}">Get A Quote <i class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </div>

                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 service-page-card-col">
                            <a href="{{ url('quote') }}">
                                <div class="service-card h-100">
                                    <div class="service-card-image">
                                        <img src="assets/front_end/image/long.png" class="img-fluid card-img"
                                        alt="">
                                    </div>
                                    <div class="service-card-content">
                                        <h6>Long Distance Travel</h6>
                                        <p>For planned long-distance trips within Minnesota or to neighboring states, we offer
                                            non-emergency medical transportation with careful scheduling and a focus on comfort and
                                        safety.</p>

                                        <a class="service-page-btn" href="{{ url('quote') }}">Get A Quote <i class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 service-page-card-col">
                            <a href="{{ url('quote') }}">
                                <div class="service-card h-100" style="display: flex;align-items: center;">
                                    <div class="service-card-image">
                                        <!-- <img src="assets/front_end/image/long.png" class="img-fluid card-img" 
                                        alt="">-->
                                    </div>
                                    <div class="service-card-content">

                                        <h6>Services Compliance Note</h6>
                                        <p>Urban Transportation Services operates in accordance with applicable Minnesota safety, accessibility, and insurance requirements for medical transportation providers.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- card 6  -->

                    </div><!--row-->
                </div>
            </section>
            <!-- service card end -->

            

            <section class="how-work-section about-how-work-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="how-head-title">
                                <h6 data-aos="zoom-in">How it Works</h6>
                                <h1 data-aos="zoom-in">From Call to Care, <span> Made Easy</span> </h1>
                                <p data-aos="zoom-in">Booking a ride with us is simple, fast, and stress-free—designed to get you
                                    where <br> you need to be with ease and comfort.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row how-card-row">

                            <div class="col-lg-4">
                                <div class="how-card" data-aos="flip-left">
                                    <div class="how-card-icon">
                                        <img src="assets/front_end/image/idea-1.svg" class="img-fluid" alt="">
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
                                        <img src="assets/front_end/image/idea-2.svg" class="img-fluid" alt="">
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

                <section class="about-counter-section">
                    <div class="container about-counter-bg">
                        <div class="row about-counter-row">

                            <div class="col-lg-4 col-md-4 ">
                                <div class="about-counter-card" data-aos="zoom-in-down">
                                    <div class="about-counter-card-icon">
                                        <img src="assets/front_end/image/counter-1.png" class="img-fluid"
                                        alt="">
                                    </div>
                                    <div class="about-counter-card-content">
                                        <h6>2500+</h6>
                                        <p>Safe Trips Completed</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 1 -->

                            <div class="col-lg-4 col-md-4 ">
                                <div class="about-counter-card" data-aos="zoom-in-down">
                                    <div class="about-counter-card-icon">
                                        <img src="assets/front_end/image/counter-2.png" class="img-fluid"
                                        alt="">
                                    </div>
                                    <div class="about-counter-card-content">
                                        <h6>24/7</h6>
                                        <p>Service Availability</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 2 -->

                            <div class="col-lg-4 col-md-4 ">
                                <div class="about-counter-card" data-aos="zoom-in-down">
                                    <div class="about-counter-card-icon">
                                        <img src="assets/front_end/image/counter-3.png" class="img-fluid"
                                        alt="">
                                    </div>
                                    <div class="about-counter-card-content">
                                        <h6>100%</h6>
                                        <p>ADA-Compliant Vehicles</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 3 -->


                            <!-- shape -->
                            <div class="counter-shape-top">
                                <img src="assets/front_end/image/shape-top.svg" class="img-fluid" alt="">
                            </div>

                            <div class="counter-shape-right">
                                <img src="assets/front_end/image/shape-right.svg" class="img-fluid" alt="">
                            </div>

                            <div class="counter-shape-left">
                                <img src="assets/front_end/image/shape-left.svg" class="img-fluid" alt="">
                            </div>

                            <div class="counter-shape-bottom">
                                <img src="assets/front_end/image/shape-bottom.svg" class="img-fluid" alt="">
                            </div>
                            <!-- shape -->

                        </div><!--row-->



                    </div>
                </section>

                <!-- FAQ -->
                <section class="accordion-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="accordion-head-title">
                                    <h6 data-aos="fade-up">FAQ</h6>
                                    <h1 data-aos="fade-up"><span>Questions </span> We Hear Often</h1>
                                    <p data-aos="fade-up">Find quick answers to some of the most common questions about our <br>
                                    transportation services.</p>
                                </div>
                            </div>
                        </div><!--row-->

                        <div class="row accordion-content-row">
                            <div class="col-lg-7">
                                <div class="container my-3">
                                    <div class="accordion" id="faqAccordion">

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                What areas do you serve?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p>We currently provide non-emergency medical transportation across Houston and
                                            surrounding areas.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- item 1 -->


                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What types of transportation services do you provide?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>We offer safe, reliable non-emergency medical transportation (NEMT) across
                                            Houston, including hospital discharges, doctor’s appointments, dialysis visits,
                                            therapy sessions, and everyday needs like family gatherings or social outings.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- item 2 -->


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Are your vehicles wheelchair accessible?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Yes. All of our vans are ADA-compliant and equipped with wheelchair lifts and
                                ramps to ensure safe and comfortable travel for all passengers.</p>
                            </div>
                        </div>
                    </div>
                    <!-- item 3 -->

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false"
                            aria-controls="collapseFour">
                            Are your drivers trained to handle medical situations?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>Absolutely. Our drivers are CPR-certified, professionally trained, and
                        experienced in assisting passengers with special mobility and medical needs.</p>
                    </div>
                </div>
            </div>
            <!-- item 4 -->

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false"
                    aria-controls="collapseFive">
                    Do I need to book in advance, or are same-day rides available?
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
                <p>We’re available 24/7, and while advanced bookings are recommended to secure your
                    preferred time, we also accommodate same-day transportation whenever possible.
                </p>
            </div>
        </div>
    </div>
    <!-- item 5 -->

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            How much does a trip cost?
        </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            <p>We strive to keep our services affordable and transparent. Rates vary depending
                on distance and type of assistance needed. Please contact us for a personalized
            quote.</p>
        </div>
    </div>
</div>
<!-- item 6 -->

<div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapseSeven" aria-expanded="false"
        aria-controls="collapseSeven">
        Do you Accept insurance ?
    </button>
</h2>
<div id="collapseSeven" class="accordion-collapse collapse"
data-bs-parent="#faqAccordion">
<div class="accordion-body">
    <p>We don’t accept insurance</p>
</div>
</div>
</div>
<!-- item 7 -->

</div><!--accordion id-->
</div>
</div>
</div><!--row-->
</div>
</section>
<!-- FAQ end-->
@include('layouts.testimonials')

@endsection