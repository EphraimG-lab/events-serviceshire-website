<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BleedingUserController;
use App\Http\Controllers\BleedingRhymesController;

/*
|--------------------------------------------------------------------------
| Web Routes for Bleeding Rhymes Creatives
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for Bleeding Rhymes Creatives.These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//BleedingRhymesMain Website Routes
Route::get('/', [BleedingRhymesController::class,'index'])->name('index');
Route::get('/about', [BleedingRhymesController::class,'about'])->name('about');

Route::get('/blog', [BleedingRhymesController::class,'blog'])->name('blog');
Route::get('/contact', [BleedingRhymesController::class,'contact'])->name('contact');

Route::get('/cookies', [BleedingRhymesController::class,'cookies'])->name('cookies');
Route::get('/events', [BleedingRhymesController::class,'events'])->name('events');

Route::get('/FAQs', [BleedingRhymesController::class,'FAQs'])->name('FAQs');
Route::get('/privacy', [BleedingRhymesController::class,'privacy'])->name('privacy');

Route::get('/services', [BleedingRhymesController::class,'services'])->name('services');
Route::get('/speakers', [BleedingRhymesController::class,'speakers'])->name('speakers');


//BleedingRhymesUser Routes controllers
// Route::get('/sign-up', [BleedingUserController::class,'register'])->name('register');
// Route::post('/sign-up', [BleedingUserController::class,'store'])->name('store');

// Route::get('/sign-in', [BleedingUserController::class,'login'])->name('login');
// Route::post('/authenticate', [BleedingUserController::class,'authenticate'])->name('authenticate');
// Route::get('/logout', [BleedingUserController::class,'logout'])->name('logout');



Route::controller(BleedingUserController::class)->group(function () {
    Route::get('/sign-up', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/sign-in', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::get('/cart', [BleedingUserController::class,'cart'])->name('cart')->middleware('auth');
Route::get('/buy-tickets', [BleedingUserController::class,'buy'])->name('buy')->middleware('auth');
Route::get('/ticket/{id}', [BleedingUserController::class, 'buyTicket'])->name('buy.ticket')->middleware('auth');
Route::patch('/update-shopping-cart', [BleedingUserController::class, 'updateCart'])->name('update.sopping.cart') ->middleware('auth');
Route::delete('/delete-cart-product', [BleedingUserController::class, 'deleteProduct'])->name('delete.cart.product')->middleware('auth');
Route::get('/order',[BleedingUserController::class, 'order'])->name('order')->middleware('auth');
Route::get('/checkout', [BleedingUserController::class, 'checkout'])->name('checkout')->middleware('auth');