<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;



class AdminController extends Controller
{
    public function index()
    {	
    	$bookings = Booking::latest()->take(8)->get();
    	$totalBookings = Booking::count();
    	return view('admin.dashboard', compact('bookings', 'totalBookings'));
    }
    public function booking()
    {	
    	 $bookings = Booking::latest()->paginate(20);
    	return view('admin.booking', compact('bookings'));
    }
}
