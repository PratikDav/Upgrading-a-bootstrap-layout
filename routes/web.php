<?php

use App\Http\Controllers\websiteController;
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

Route::get('/', [websiteController::class, 'home']);
Route::get('/about', [websiteController::class, 'about']);
Route::get('/contact', [websiteController::class, 'contact']);
Route::get('/service', [websiteController::class, 'service']);
