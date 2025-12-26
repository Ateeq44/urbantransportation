<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'pickup_address',
        'pickup_place_id',
        'dropoff_address',
        'dropoff_place_id',
        'appointment_date',
        'appointment_time',
        'trip_type',
        'status',
    ];

    protected $casts = [
        'appointment_date' => 'date',
        'appointment_time' => 'datetime:H:i:s',
    ];
}
