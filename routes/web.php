<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [userController::class, 'index']);
Route::get('/signup', [userController::class, 'signupPage']);
Route::post('/signup', [userController::class, 'signup']);
Route::get('/login', [userController::class, 'loginPage']);
Route::post('/login', [userController::class, 'login']);
Route::post('/logout',[userController::class, 'logout']);
Route::get('/booking', [userController::class, 'bookingPage']);
Route::post('/booking',[userController::class, 'booking']);
Route::get('/contact',[userController::class, 'contactPage']);
Route::post('/contact',[userController::class, 'contact']);

// admin routes

Route::group(['prefix'=> 'admin', 'namespace'=> 'App\Http\Controllers'], function (){
    Route::get('/', [AdminController::class, 'dashboard']);
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::get('/signup', [AdminController::class, 'signupForm']);
    Route::post('/signup', [AdminController::class, 'signup'])->name('admin.signup');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
});

