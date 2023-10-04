<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('welcome'); })->name('default');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





// user Routes
Route::middleware(['auth', 'user-access:0'])->group(function () {
    Route::get('user/product' , [ProductController::class , 'userindex'])->name('user.index');
    Route::get('order-index' , [OrderController::class , 'index'])->name('order.index');
    Route::get('order-buy' , [OrderController::class , 'buy'])->name('order.buy');
    Route::post('order-store' , [OrderController::class , 'store'])->name('order.store');
});


// Admin Routes
Route::middleware(['auth' , 'user-access:1'])->group(function (){
    Route::resource('product' , ProductController::class)->except('userindex');
});