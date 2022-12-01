<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController; 
use App\Http\Controllers\homecontroller; 
use App\Http\Controllers\rolecontroller; 
use App\Http\Controllers\jasacontrollers; 
use App\Http\Controllers\pesanancontrollers; 
use App\Http\Controllers\kategoriController; 
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
Route::resource('admin/dashboard/user',rolecontroller::class);
Route::resource('admin/dashboard/kategori',kategoriController::class);
Route::get('/Home', [homecontroller::class, 'index1']);
Route::get('/jasa/detail/{id}/{user_id}', [homecontroller::class, 'detailjasa']);
Route::get('/jasa', [homecontroller::class, 'showjasa']);
Route::get('/kategori/{id}', [homecontroller::class, 'jasakategori']);
Route::get('/signup', [signupcontroller::class, 'index']);
Route::get('/login', [logincontroller::class, 'index']);
Route::resource('admin/dashboard',dashboardController::class);
