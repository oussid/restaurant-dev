<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\cartController;

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
Route::get('/cart',[cartController::class, 'cartPage']);
Route::post('/cart_bill_continue',[cartController::class, 'cartBillContinue']);
Route::get('/products',[userController::class, 'searchPage']);
Route::get('/myorders',[userController::class,'myordersPage']);


// admin doesn't have to be authenticated
Route::middleware(['guest'])->group(function () {
    Route::get('admin/login', [AdminController::class, 'loginForm']);
    Route::get('admin/signup', [AdminController::class, 'signupForm']);
    Route::post('admin/signup', [AdminController::class, 'signup'])->name('admin.signup');
    Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login');
});

// admin routes
Route::group(['prefix'=> 'admin', 'namespace'=> 'App\Http\Controllers', 'middleware'=>['admin']], function (){
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('order', OrderController::class);
    Route::resource('delivery', DeliveryManController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('booking', BookingController::class);
    Route::resource('table', TableController::class);
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
});



