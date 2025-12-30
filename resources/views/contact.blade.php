@extends('layouts.user')

@section('content')
        <!-- contact banner -->
    <section class="contact-banner-section">
        <div class="container contact-banner-bg">
            <div class="row">
                <div class="col-lg-12 contact-banner-content-col ">
                    <div class="contact-banner-content">
                        <h6 data-aos="zoom-in">Contact Us</h6>
                        <h1 data-aos="zoom-in">Let’s Connect</h1>
                        <p data-aos="zoom-in">Contact Urban Transportation Services</p>
                    </div>
                </div>
            </div><!--row-->

            <div class="row address-card-row">
                <div class="col-lg-3">
                    <a href="tel:+18328442012">
                        <div class="address-card" data-aos="fade-right">
                            <div class="address-card-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="address-card-content">
                                <h6>Call Us</h6>
                                <p>Speak With us </p>
                                <h5>+1 234-567-7890</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- card 1 -->
                <!-- <div class="col-lg-3">
                    <a href="https://maps.app.goo.gl/mhfSkwrjY2RjGsKF8" target="_blank">
                        <div class="address-card" data-aos="fade-up">
                            <div class="address-card-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="address-card-content">
                                <h6>Visit Us</h6>
                                <p>Visit Our HQ </p>
                                <h5><a href="#" target="_blank">View On Google
                                        Maps</a></h5>
                            </div>
                        </div>
                    </a>
                </div> -->
                <!-- card 2 -->

                <div class="col-lg-3">
                    <a href="mailto:info@gmail.com">
                        <div class="address-card" data-aos="fade-left">
                            <div class="address-card-icon">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="address-card-content">
                                <h6>Mail Us</h6>
                                <p>Want Send as mail? </p>
                                <h5>info@gmail.com</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- card 3 -->
            </div>

            <!-- shape -->
            <div class="contact-banner-shape-left">
                <img src="assets/front_end/image/shape-left.svg" class="img-fluid" alt="">
            </div>

            <div class="contact-banner-shape-right">
                <img src="assets/front_end/image/shape-right.svg" class="img-fluid" alt="">
            </div>

            <div class="contact-banner-shape-bottom">
                <img src="assets/front_end/image/shape-bottom.svg" class="img-fluid" alt="">
            </div>
            <!-- card 3 -->
        </div>

        <!-- shape -->
        <!-- <div class="contact-banner-shape-left">
                <img src="https://royaltymedtrans.com/assets/front_end/image/shape-banner.svg" class="img-fluid" alt="">
            </div>

            <div class="contact-banner-shape-right">
                <img src="https://royaltymedtrans.com/assets/front_end/image/shape-banner.svg" class="img-fluid" alt="">
            </div>

            <div class="contact-banner-shape-bottom">
                <img src="https://royaltymedtrans.com/assets/front_end/image/shape-banner.svg" class="img-fluid" alt="">
            </div> -->
        </div>
    </section>
    <!-- pages banner end -->


    <section class="contact-form-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="contact-form-title">
                        <h1>Get <span>in Touch</span> </h1>
                        <p>We’re available 24/7 to assist with scheduling, questions, and medical transportation in Minneapolis, MN.</p>
                    </div>

                    <div class="contact-form">
                        <form action="https://royaltymedtrans.com/form" class="container mt-4 p-0" method="post">
                            <input type="hidden" name="_token" value="xDNF0qaYNhf0RGMsqgBYycb0OffVn85andCu3lOF" autocomplete="off">                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter your name"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" name="phone"
                                        placeholder="Enter your phone number" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email"
                                        required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-12">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" rows="4" name="message" placeholder="Enter your message"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn ">Send <i
                                    class="fa-solid fa-arrow-right ms-2"></i></button>
                        </form>
                    </div><!--contact-form-->

                </div><!--col 6-->

                <div class="col-lg-6 contact-image-col">
                    <div class="contact-image" data-aos="fade-left">
                        <img src="assets/front_end/image/contact-img.html" class="img-fluid"
                            alt="">
                    </div>

                    <div class="contact-image-shape-left">
                        <img src="assets/front_end/image/shape-left.svg" class="img-fluid" alt="">
                    </div>

                </div>
            </div>
        </div><!--row-->
        </div>
    </section>
   @endsection