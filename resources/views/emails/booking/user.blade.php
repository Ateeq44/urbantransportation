@component('mail::message')
# Thank you {{ $booking->first_name }}!

We received your booking request. Here are your details:

@component('mail::panel')
**Name:** {{ $booking->first_name }} {{ $booking->last_name }}  
**Email:** {{ $booking->email }}  
**Phone:** {{ $booking->phone }}  
**Pickup:** {{ $booking->pickup_address }}  
**Dropoff:** {{ $booking->dropoff_address }}  
**Appointment Date:** {{ $booking->appointment_date->format('Y-m-d') }}  
**Appointment Time:** {{ $booking->appointment_time }}  
**Trip Type:** {{ $booking->trip_type }}
@endcomponent

We will contact you soon with a quote.

Thanks,  
{{ config('app.name') }}
@endcomponent
