<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/destination', function () {
    return view('destination');
});

Route::get('/guide', function () {
    return view('guide');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/package', function () {
    return view('package');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/404', function () {
    return view('response.404');
});

Route::get('/maintenance', function () {
    return view('response.maintenance');
});