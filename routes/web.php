<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/newroute', function () {
    return view('index');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/worker',function () {
    return view('workers.workers');
});