<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/about-us', function () {
    return view('about');
});
Route::get('/partner-program', function () {
    return view('partnerprogram');
});

Route::get('/contact-us', function () {
    return view('contact');
});

