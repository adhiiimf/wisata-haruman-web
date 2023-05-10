<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TravelController;

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

    // start of admin dashboard feature
    Route::get('/adminDashboard',[AdminController::class,'dashboard'])->name('pages.admin.dasboard');
    // end of admin dashboard feature

    // start of admin article feature
    Route::get('/adminArticle', [ArticleController::class,'show'])->name('pages.admin.article');

    Route::get('/adminCreateArticle', function () {
        return view('pages.admin.createarticle');
    })->name('pages.admin.createarticle');
    
    Route::post('post/article',[ArticleController::class,'postArticle'])->name('post.article');
    // end of admin article feature

    // start of admin product feature
    Route::get('/adminProduct', [ProductController::class,'show'])->name('pages.admin.product');

    Route::get('/adminCreateProduct', function () {
        return view('pages.admin.createproduct');
    })->name('pages.admin.createproduct');

    Route::post('post/product',[ProductController::class,'postProduct'])->name('post.product');
    // end of product feauture

    // start of admin travel feature
    Route::get('/adminTravel', [TravelController::class,'show'])->name('pages.admin.travel');

    Route::get('/adminCreateTravel', function () {
        return view('pages.admin.createtravel');
    })->name('pages.admin.createtravel');

    Route::post('post/travel',[TravelController::class,'postTravel'])->name('post.travel');
    // end of travel feauture

    // logout routes
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