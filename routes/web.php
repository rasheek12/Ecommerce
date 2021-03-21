<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentController;




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
Route::get('/',[ HomeController::class, 'index']);
// photo routes 
Route::get('/photo/create',[PhotoController::class,'create']);
Route:: post("/photo/store",[PhotoController:: class, 'store']);

//cart route    
Route::post('/cart/save',[CartController::class,'save']);
Route::get('/cart/summary',[CartController::class,'summary']);
Route::delete('/cart/item/{id}',[CartController::Class,'destroy']);

//checkout route

Route::get('/checkout',[CheckoutController::class,'index']);
Route::post('/checkout',[CheckoutController::class,'saveEmail']);

// payment route

Route::get('/payment',[PaymentController::class,'index']);

Route::get('/photo/{id}',[PhotoController::class,'show']);
Route::view('/a', 'site.pages.home')->name('home');
Route::view('/photo/show', 'site.pages.show-photo');
Route::view('/cart', 'site.pages.cart-summary');
Route::view('/panel/downloads', 'site.pages.panel.downloads');
