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

// admin routes
Route::get('/admin/login', [AdminController::class, 'loginForm']);

