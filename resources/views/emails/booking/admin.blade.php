@component('mail::message')
# New Booking Received

@component('mail::panel')
**Name:** {{ $booking->first_name }} {{ $booking->last_name }}  
**Email:** {{ $booking->email }}  
**Phone:** {{ $booking->phone }}  
**Pickup:** {{ $booking->pickup_address }}  
**Pickup Place ID:** {{ $booking->pickup_place_id ?? '—' }}  
**Dropoff:** {{ $booking->dropoff_address }}  
**Dropoff Place ID:** {{ $booking->dropoff_place_id ?? '—' }}  
**Appointment Date:** {{ $booking->appointment_date->format('Y-m-d') }}  
**Appointment Time:** {{ $booking->appointment_time }}  
**Trip Type:** {{ $booking->trip_type }}
@endcomponent

@endcomponent
