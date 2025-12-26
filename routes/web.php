<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {
    return view('about');
});
Route::get('service', function () {
    return view('service');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('quote', function () {
    return view('quote');
});
Route::get('testimonials', function () {
    return view('testimonials');
});

Route::get('/register', function () {
    return redirect()->route('login');
})->name('register');

Route::post('/register', function () {
    return redirect()->route('login');
});

Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/booking', [AdminController::class, 'booking'])->name('dashboard.booking');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
