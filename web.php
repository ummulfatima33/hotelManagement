<?php

use Illuminate\Support\Facades\Route;

// Routeget('/', function () {
//     return:: view('welcome');
// });

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/gallery', function () {
    return view('frontend.gallery');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/room', function () {
    return view('frontend.room');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});


Route::get('/admin', function () {
    return view('admin.dashboard');
});

