<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\MainController;
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
    Route::get('/adminDashboard',[AdminController::class,'dashboard'])->name('pages.admin.Dasboard');
    // end of admin dashboard feature

    // start of admin article feature
    Route::get('/adminArticle', [ArticleController::class,'show'])->name('pages.admin.Article');

    Route::get('/adminCreateArticle', function () {
        return view('pages.admin.CreateArticle');
    })->name('pages.admin.CreateArticle');

    Route::get('/adminViewArticle/{article_id}',[ArticleController::class,'showIndex'])->name('pages.admin.ViewArticle');
    
    Route::post('post/article',[ArticleController::class,'postArticle'])->name('post.article');
    // end of admin article feature

    // start of admin product feature
    Route::get('/adminProduct', [ProductController::class,'show'])->name('pages.admin.Product');

    Route::get('/adminCreateProduct', function () {
        return view('pages.admin.CreateProduct');
    })->name('pages.admin.CreateProduct');

    Route::get('/adminViewProduct/{product_id}',[ProductController::class,'showIndex'])->name('pages.admin.ViewProduct');

    Route::get('/adminEditProduct/{product_id}',[ProductController::class,'edit'])->name('pages.admin.EditProduct');

    Route::post('post/product/update/{product_id}',[ProductController::class,'update'])->name('pages.admin.UpdateProduct');

    Route::get('/adminDelProduct/{product_id}',[ProductController::class,'isDelete'])->name('pages.admin.DeleteProduct');

    Route::post('/adminDelProduct/del/{product_id}',[ProductController::class,'deleteNow'])->name('pages.admin.DeleteProduct.Fix');

    Route::post('post/product',[ProductController::class,'postProduct'])->name('post.product');
    // end of product feauture

    // start of admin travel feature
    Route::get('/adminTravel', [TravelController::class,'show'])->name('pages.admin.Travel');

    Route::get('/adminCreateTravel', [TravelController::class,'createForm'])->name('pages.admin.CreateTravel');

    Route::get('/adminViewTravel/{travel_id}',[TravelController::class,'showIndex'])->name('pages.admin.ViewTravel');

    Route::get('/adminEditTravel/{travel_id}',[TravelController::class,'edit'])->name('pages.admin.EditTravel');

    Route::post('post/travel/update/{travel_id}',[TravelController::class,'update'])->name('pages.admin.UpdateTravel');

    Route::post('post/travel',[TravelController::class,'postTravel'])->name('post.travel');
    // end of travel feauture

    // logout routes
    Route::get('/logout',[AdminController::class, 'logout'])->name('auth.admin.logout');
});

Route::middleware(['guest:admins'])->group(function () {
    // landing page route
    Route::get('/',[MainController::class, 'landingpage'])->name('lp');

    // travel page
    Route::get('/travel',[TravelController::class,'guestShowAll'])->name('pages.guest.Travel');

    Route::get('/travel/{travel_id}',[TravelController::class,'guestShowPage'])->name('pages.guest.ViewTravel');

    // product page
    Route::get('/product',[ProductController::class,'guestShowAll'])->name('pages.guest.Product');

    Route::get('/product/{product_id}',[ProductController::class,'guestShowPage'])->name('pages.guest.ViewProduct');

    // article page
    Route::get('/article', function () {
        return view('pages.guest.Article');
    })->name('pages.guest.Article');

    // login route
    Route::get('/login',[AdminController::class, 'loginpage'])->name('auth.admin.Login');
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