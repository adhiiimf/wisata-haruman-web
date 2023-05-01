<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\AdminController;
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

Route::middleware(['auth:admins'])->group(function () {

    // role admin dashboard page
    Route::get('/adminDashboard', function () {
        return view('pages.admin.dashboard');
    })->name('pages.admin.dasboard');

    // role admin article page
    Route::get('/adminArticle', function () {
        return view('pages.admin.article');
    })->name('pages.admin.article');
    
    // role admin product page
    Route::get('/adminProduct', function () {
        return view('pages.admin.product');
    })->name('pages.admin.product');

    Route::get('/logout',[AdminController::class, 'logout'])->name('auth.admin.logout');
});

Route::middleware(['guest:admins'])->group(function () {
    // landing page route
    Route::get('/', function () {
        return view('main');
    })->name('lp');

    // travel page
    Route::get('/travel', function () {
        return view('pages.guest.travel');
    })->name('pages.guest.travel');

    // product page
    Route::get('/product', function () {
        return view('pages.guest.product');
    })->name('pages.guest.product');

    // article page
    Route::get('/article', function () {
        return view('pages.guest.article');
    })->name('pages.guest.article');

    // login route
    Route::get('/login',[AdminController::class, 'loginpage'])->name('auth.admin.login');
    Route::post('/auth/adminlogin', [AdminController::class, 'authcheck'])->name('auth.admin.logincheck');

    // error 404 pages
    Route::get('/404', function () {
        return view('response.404');
    })->name('404');
    
    // error 503 pages
    Route::get('/maintenance', function () {
        return view('response.503');
    })->name('503');
});