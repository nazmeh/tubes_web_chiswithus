<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(HomeController::class)->name('home.')->prefix('master-data/home')->group(function (){
    Route::get('/', 'home')->name('home');  
    Route::get('/about', 'about')->name('about');
});

Route::controller(LoginController::class)->name('login.')->prefix('master/login')->group(function (){ 
    Route::get('/login','login')->name('login');
});

Route::controller(RegisterController::class)->name('register.')->prefix('master/register')->group(function (){ 
    Route::get('/register','register')->name('register');
});

Route::controller(ReservationController::class)->name('reservation.')->prefix('master/reservation')->group(function (){ 
    Route::get('/reservation','reservation')->name('reservation');
});
