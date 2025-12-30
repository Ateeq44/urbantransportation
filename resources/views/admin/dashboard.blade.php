@extends('layouts.app')

@section('content')

<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <!-- ============================================================== -->
        <!-- pageheader  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Urban Transportation Dashboard</h2>
                    
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Urban Transportation Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader  -->
        <!-- ============================================================== -->
        <div class="ecommerce-widget">

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted">Total Quotes</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1">{{$totalBookings}}</h1>
                            </div>
                            <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                <!-- <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span> -->
                            </div>
                        </div>
                        <!-- <div id="sparkline-revenue"></div> -->
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted">Total Contacts</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1">3</h1>
                            </div>
                            <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                <!-- <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span> -->
                            </div>
                        </div>
                        <!-- <div id="sparkline-revenue2"></div> -->
                    </div>
                </div>
                <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted">Refunds</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1">0.00</h1>
                            </div>
                            <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                                <span>N/A</span>
                            </div>
                        </div>
                        <div id="sparkline-revenue3"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted">Avg. Revenue Per User</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1">$28000</h1>
                            </div>
                            <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                <span>-2.00%</span>
                            </div>
                        </div>
                        <div id="sparkline-revenue4"></div>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <!-- ============================================================== -->

                <!-- ============================================================== -->

                <!-- recent orders  -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Recent Quotes</h5>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">#</th>
                                            <th class="border-0">Full Name</th>
                                            <th class="border-0">Email</th>
                                            <th class="border-0">Phone</th>
                                            <th class="border-0">Pickup Address</th>
                                            <th class="border-0">Dropoff Address</th>
                                            <th class="border-0">Appointment Date</th>
                                            <th class="border-0">Appointment Time</th>
                                            <th class="border-0">Trip Type</th>
                                            <th class="border-0">Mobility</th>
                                            <th class="border-0">Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($bookings as $key => $book)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $book->first_name }} {{ $book->last_name }}</td>
                                            <td>{{ $book->email }}</td>
                                            <td>{{ $book->phone }}</td>
                                            <td>{{ $book->pickup_address }}</td>
                                            <td>{{ $book->dropoff_address }}</td>
                                            <td>{{ date('d-m-Y', strtotime($book->appointment_date)); }}</td>
                                            <td>{{ date('H:i', strtotime($book->appointment_time)) }}</td>
                                            <td>{{ $book->trip_type }}</td>
                                            <td>{{ $book->mobility }}</td>
                                            <td>{{ date('d-m-Y', strtotime($book->created_at)); }}</td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="10"><a href="{{ url('dashboard/booking') }}" class="btn btn-outline-light float-right">View Details</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end recent orders  -->


                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- customer acquistion  -->
                <!-- ============================================================== -->
                <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Customer Acquisition</h5>
                        <div class="card-body">
                            <div class="ct-chart ct-golden-section" style="height: 354px;"></div>
                            <div class="text-center">
                                <span class="legend-item mr-2">
                                    <span class="fa-xs text-primary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                    <span class="legend-text">Returning</span>
                                </span>
                                <span class="legend-item mr-2">

                                    <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                    <span class="legend-text">First Time</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- ============================================================== -->
                <!-- end customer acquistion  -->
                <!-- ============================================================== -->
            </div>

        </div>
    </div>
</div>

@endsection