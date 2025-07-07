<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Frontend/index');
});
Route::get('/about-company', function () {
    return view('Frontend/AboutCompany');
});
Route::get('/Contact', function () {
    return view('Frontend/Contact');
});
Route::get('/Service', function () {
    return view('Frontend/Service');
});
Route::get('/Team', function () {
    return view('Frontend/Team');
});
Route::get('/Project', function () {
    return view('Frontend/Project');
});
