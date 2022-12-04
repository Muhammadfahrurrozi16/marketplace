<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController; 
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\rolecontroller; 
use App\Http\Controllers\jasacontrollers; 
use App\Http\Controllers\pesanancontrollers; 
use App\Http\Controllers\kategoriController; 
use App\Http\Controllers\jasaController; 
use App\Http\Controllers\infocontrollers; 
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
Route::resource('admin/dashboard/informasi',infocontrollers::class);
Route::get('/Home', [homecontroller::class, 'index1']);
Route::get('/jasa/detail/{id}/{user_id}', [homecontroller::class, 'detailjasa']);
Route::get('/jasa/pemesanan/{id}/{user_id}', [homecontroller::class, 'checkout']);
Route::get('/jasa', [homecontroller::class, 'showjasa']);
Route::get('/jasa/toko/{id}', [homecontroller::class, 'showseller']);
Route::get('/jasa/toko/list/{id}', [homecontroller::class, 'tampiljasa']);
Route::get('/jasa/toko/FAQ/{id}', [homecontroller::class, 'tampilFAQ']);
Route::get('/jasa/toko/review/{id}', [homecontroller::class, 'tampilreview']);
Route::get('/kategori/{id}', [homecontroller::class, 'jasakategori']);
Route::get('/signup', [signupcontroller::class, 'index']);
Route::get('/login', [logincontroller::class, 'index']);
Route::post('/login', [logincontroller::class, 'authentikasi']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::resource('dashboard',dashboardController::class);
Route::resource('vendor/jasa',jasaController::class);
