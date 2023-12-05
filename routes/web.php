<?php

use App\Http\Controllers\BleedingRhymesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Bleeding Rhymes  about,contact,index,service
Route::get('/about', [BleedingRhymesController::class, 'about']);

Route::get('/contact', [BleedingRhymesController::class, 'contact']);

Route::get('/', [BleedingRhymesController::class, 'index']);

Route::get('/service', [BleedingRhymesController::class, 'service']);
