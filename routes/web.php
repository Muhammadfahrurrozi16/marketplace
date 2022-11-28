<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController; 
use App\Http\Controllers\homecontroller; 
use App\Http\Controllers\jasaController; 
use App\Http\Controllers\Auth\logincontroller; 
use App\Http\Controllers\Auth\signupcontroller; 
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
Route::get('/', [homecontroller::class, 'index']);
Route::get('/Home', [homecontroller::class, 'index1']);
Route::get('/signup', [signupcontroller::class, 'index']);
Route::get('/login', [logincontroller::class, 'index']);
Route::post('/login', [logincontroller::class, 'authentikasi']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::resource('dashboard',dashboardController::class);
Route::resource('jasa',jasaController::class)->middleware('auth');
