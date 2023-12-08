<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
//Common Resource Routes
// index - Show main page like homepage
// show - Show single page
// create - Show form to crerate new data entry/user register
// edit - show edit form page
// update -update form
// destory delete
// Bleeding Rhymes  about,contact,index,service,sign in ,sign up

Route::get('/about', [BleedingRhymesController::class, 'about']);

Route::get('/contact', [BleedingRhymesController::class, 'contact']);

Route::get('/events', [BleedingRhymesController::class, 'events']);

Route::get('/', [BleedingRhymesController::class, 'index']);

Route::get('/service', [BleedingRhymesController::class, 'service']);


//sign in user Form Page
Route::get('/sign-in', [UserController::class, 'login']);


// Sign User Out
Route::get('/log-out', [UserController::class, 'logout']);

//Sign out User
Route::post('/sign-out', [UserController::class, 'signout']);

//Show user register form page
Route::get('/sign-up', [UserController::class, 'register']);

//post user data to database
Route::post('/register', [UserController::class, 'store']);