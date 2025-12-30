<?php
namespace App\Http\Controllers;

use App\Mail\AdminNewBooking;
use App\Mail\UserBookingConfirmation;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // 1) Validate
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name'  => ['nullable', 'string', 'max:255'],

            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],

            'pickup_address' => ['required', 'string', 'max:255'],
            'pickup_place_id' => ['nullable', 'string', 'max:255'],

            'dropoff_address' => ['required', 'string', 'max:255'],
            'dropoff_place_id' => ['nullable', 'string', 'max:255'],

            'appointment_date' => ['required', 'date'],
            'hour'   => ['required', 'integer', 'min:1', 'max:12'],
            'minute' => ['required', 'integer', 'min:0', 'max:55'],
            'ampm'   => ['required', 'in:AM,PM'],

            'trip_type' => ['required', 'in:one-way,round'],
            'mobility' => ['required', 'in:Ambulatory,Stretcher,Wheelchair'],
        ]);

        // 2) Build time (HH:MM:SS 24-hour)
        $hour = (int) $validated['hour'];
        $minute = (int) $validated['minute'];
        $ampm = $validated['ampm'];

        // Convert to 24-hour
        if ($ampm === 'PM' && $hour !== 12) $hour += 12;
        if ($ampm === 'AM' && $hour === 12) $hour = 0;

        $appointmentTime = sprintf('%02d:%02d:00', $hour, $minute);

        // 3) Save to DB
        $booking = Booking::create([
            'first_name' => $validated['first_name'],
            'last_name'  => $validated['last_name'] ?? null,
            'email'      => $validated['email'],
            'phone'      => $validated['phone'],

            'pickup_address'   => $validated['pickup_address'],
            'pickup_place_id'  => $validated['pickup_place_id'] ?? null,

            'dropoff_address'  => $validated['dropoff_address'],
            'dropoff_place_id' => $validated['dropoff_place_id'] ?? null,

            'appointment_date' => $validated['appointment_date'],
            'appointment_time' => $appointmentTime,

            'trip_type' => $validated['trip_type'],
            'mobility' => $validated['mobility'],
            'status'    => 'new',
        ]);

        // 4) Send emails
        // User email
        Mail::to($booking->email)->send(new UserBookingConfirmation($booking));

        // Admin email (from config)
        $adminEmail = config('booking.admin_email');
        if (!empty($adminEmail)) {
            Mail::to($adminEmail)->send(new AdminNewBooking($booking));
        }

        // 5) Response
        return back()->with('success', 'Your booking has been submitted successfully. Please check your email.');
    }
}
