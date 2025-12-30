@extends('layouts.app')

@section('content')

<div class="container-fluid dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Quote Booking</h2>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#" class="breadcrumb-link">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="breadcrumb-link">Quote Booking</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- ============================================================== -->
        <!-- basic table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Quote Booking</h5>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first" id="bookingsTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Pickup Address</th>
                                    <th>Dropoff Address</th>
                                    <th>Appointment Date</th>
                                    <th>Appointment Time</th>
                                    <th>Trip Type</th>
                                    <th>Mobility</th>
                                    <th>Created At</th>
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
                                    <td><?= $book->trip_type == 'one-way' ? 'One-Way Trip' : 'Round Trip'; ?></td>
                                    <td>{{ $book->mobility }}</td>
                                <td>{{ date('d-m-Y', strtotime($book->created_at)); }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white">
                <div class="d-flex justify-content-center">
                    {{ $bookings->links('pagination::bootstrap-4') }}
                </div>

            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end data table  -->
<!-- ============================================================== -->
</div>
</div>

@endsection