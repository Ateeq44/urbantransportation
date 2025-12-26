@extends('layouts.user')

@section('content')
<!-- quote banner -->
<section class="contact-banner-section">
    <div class="container contact-banner-bg quote-banner-bg">
        <div class="row">
            <div class="col-lg-12 contact-banner-content-col ">
                <div class="contact-banner-content">
                    <h6 data-aos="zoom-in">Quote</h6>
                    <h1 data-aos="zoom-in">Get Quote Now !</h1>
                    <p data-aos="zoom-in">Simply fill out the questionnaire below to receive an estimate on your
                    transportation request. </p>
                </div>
            </div>
        </div><!--row-->

        <!-- shape -->
        <div class="quote-banner-shape-left">
            <img src="assets/front_end/image/shape-left.svg" class="img-fluid" alt="">
        </div>

        <div class="quote-banner-shape-right">
            <img src="assets/front_end/image/shape-right.svg" class="img-fluid" alt="">
        </div>

    </div>
</section>
<!-- pages banner end -->


<section class="quote-page-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="quote-form-section">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="container mt-5">
                        <form id="bookingForm" method="POST" action="{{ route('booking.store') }}">
                            @csrf
                           <div class="row mb-4">
                            <div class="col-md-6">
                                <label class="form-label">First Name <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control " name="first_name" value="" placeholder="Enter First Name">
                            </div>
                            <div class="col-md-6 lastname">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control " name="last_name" value="" placeholder="Enter Last Name">
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label class="form-label">Email <span class="text-danger">*</span>
                                </label>
                                <input type="email" class="form-control " name="email" value="" placeholder="Enter Email">
                            </div>
                            <!-- Phone -->
                            <div class="col-md-6 phone">
                                <label class="form-label">Phone Number <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <span class="fi fi-us" style="margin-right:6px;"></span> +1 
                                    </span>
                                    <input type="tel" class="form-control " name="phone" value="" placeholder="Enter phone number">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <!-- Pickup & Dropoff -->
                            <div class="col-md-6">
                                <label class="form-label">Select Pickup Address <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control " name="pickup_address" id="pickup_address" value="" placeholder="Enter Pickup Address">
                                <input type="hidden" name="pickup_place_id" id="pickup_place_id" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Select Drop Address <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control " name="dropoff_address" id="dropoff_address" value="" placeholder="Enter Dropoff Address">
                                <input type="hidden" name="dropoff_place_id" id="dropoff_place_id" value="">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="date" class="form-label"> Appointment Date <span class="text-danger">*</span>
                                </label>
                                <input type="date" id="appointment_date" class="form-control " name="appointment_date" value="2025-12-25">
                            </div>
                            <div class="col-md-6 appointmenttime">
                                <label for="appointment_time" class="form-label">Appointment Time <span class="text-danger">*</span>
                                </label>
                                <div class="d-flex gap-2">
                                    <!-- Hour -->
                                    <select name="hour" class="form-select">
                                        <option value=""> HH </option>
                                        <option value="1"> 01 </option>
                                        <option value="2"> 02 </option>
                                        <option value="3"> 03 </option>
                                        <option value="4"> 04 </option>
                                        <option value="5"> 05 </option>
                                        <option value="6"> 06 </option>
                                        <option value="7"> 07 </option>
                                        <option value="8"> 08 </option>
                                        <option value="9"> 09 </option>
                                        <option value="10"> 10 </option>
                                        <option value="11"> 11 </option>
                                        <option value="12"> 12 </option>
                                    </select>
                                    <!-- Minute -->
                                    <select name="minute" class="form-select ">
                                        <option value=""> MM </option>
                                        <option value="0"> 00 </option>
                                        <option value="5"> 05 </option>
                                        <option value="10"> 10 </option>
                                        <option value="15"> 15 </option>
                                        <option value="20"> 20 </option>
                                        <option value="25"> 25 </option>
                                        <option value="30"> 30 </option>
                                        <option value="35"> 35 </option>
                                        <option value="40"> 40 </option>
                                        <option value="45"> 45 </option>
                                        <option value="50"> 50 </option>
                                        <option value="55"> 55 </option>
                                    </select>
                                    <!-- AM/PM -->
                                    <select name="ampm" class="form-select">
                                        <option value="AM">AM </option>
                                        <option value="PM">PM </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12">
                                <label class="form-label d-block">Choose Your Trip Type <span class="text-danger">*</span>
                                </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input " type="radio" name="trip_type" value="one-way" checked>
                                    <label class="form-check-label">One-Way Trip</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input " type="radio" name="trip_type" value="round">
                                    <label class="form-check-label">Round Trip</label>
                                </div>
                            </div>
                        </div>
                        <!-- Privacy Policy -->
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary"> Submit & Receive a Quote <i class="fa-solid fa-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--col 6-->

        <div class="col-lg-6">
            <div class="quote-image" data-aos="fade-left">
                <img src="assets/front_end/image/quote-img.png" class="img-fluid" alt="">
            </div>
        </div>

    </div>
</div>
</section>

@endsection