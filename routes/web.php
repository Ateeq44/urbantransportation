<?php

use Illuminate\Support\Facades\Route;

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