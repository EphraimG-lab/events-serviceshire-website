<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BleedingUserController;
use App\Http\Controllers\BleedingRhymesController;

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

//BleedingRhymesMain Website Routes
Route::get('/',[BleedingRhymesController::class,'index']);
Route::get('/about',[BleedingRhymesController::class,'about']);

Route::get('/blog',[BleedingRhymesController::class,'blog']);
Route::get('/contact',[BleedingRhymesController::class,'contact']);

Route::get('/cookies',[BleedingRhymesController::class,'cookies']);
Route::get('/events',[BleedingRhymesController::class,'events']);

Route::get('/FAQs',[BleedingRhymesController::class,'FAQs']);
Route::get('/privacy',[BleedingRhymesController::class,'privacy']);

Route::get('/services',[BleedingRhymesController::class,'services']);
Route::get('/speakers',[BleedingRhymesController::class,'speakers']);


//BleedingRhymesUser Routes controllers
Route::get('/sign-up',[BleedingUserController::class,'register']);
Route::post('/sign-up',[BleedingUserController::class,'create']);

Route::get('/sign-in',[BleedingUserController::class,'login']);
Route::post('/sign-in',[BleedingUserController::class,'login']);

Route::get('/cart',[BleedingUserController::class,'cart']);
Route::get('/buy-tickets',[BleedingUserController::class,'buy']);