<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cartController;
use App\Http\Controllers\userController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TableController;

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
Route::get('/test', function () {
    return view('mail.password-reset');
});


Route::get('/', [userController::class, 'index']);
Route::get('/signup', [userController::class, 'signupPage'])->middleware('guest');
Route::post('/signup', [userController::class, 'signup'])->middleware('guest');
Route::get('/login', [userController::class, 'loginPage'])->middleware('guest');
Route::post('/login', [userController::class, 'login'])->middleware('guest');
Route::post('/logout',[userController::class, 'logout'])->middleware('auth');
Route::get('/booking', [userController::class, 'bookingPage']);
Route::post('/booking',[userController::class, 'booking']);
Route::get('/contact',[userController::class, 'contactPage']);
Route::post('/contact',[userController::class, 'contact']);
Route::get('/cart',[cartController::class, 'cartPage']);
Route::post('/cart_bill_continue',[cartController::class, 'cartBillContinue']);
Route::get('/products/{category?}',[userController::class, 'searchPage']);
Route::get('/myorders',[userController::class,'myordersPage']);
Route::post('/create_order',[OrderController::class, 'store']);
Route::post('/cancel_order',[OrderController::class, 'cancelOrder']);
Route::get('/privacy_policy',[userController::class, 'privacyPolicy']);
Route::get('/refund_policy',[userController::class, 'refundPolicy']);
Route::get('/terms_policy',[userController::class, 'termsPolicy']);

Route::get('/pdf',[OrderController::class,'test']);

// user must not be authenticated
Route::middleware(['guest'])->group(function () {
    Route::get('admin/login', [AdminController::class, 'loginForm']);
    Route::get('admin/signup', [AdminController::class, 'signupForm']);
    Route::post('admin/signup', [AdminController::class, 'signup'])->name('admin.signup'); // route for development purposes only
    Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login');
    // password reset routes
    Route::get('/admin/forgot-password', [AdminController::class, 'forgotPasswordForm'])->name('forgotPasswordForm');
    Route::post('/admin/forgot-password', [AdminController::class, 'sendResetPasswordMail'])->name('sendForgotPasswordEmail');
    Route::get('/admin/forgot-password/{token}', [AdminController::class, 'resetPasswordForm'])->name('resetPasswordForm');
    Route::post('/admin/reset-password', [AdminController::class, 'resetPassword'])->name('resetPassword');

});

// admin routes
Route::group(['prefix'=> 'admin', 'namespace'=> 'App\Http\Controllers', 'middleware'=>['admin']], function (){
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('list', [AdminController::class, 'list'])->name('admin.list');
    Route::get('configuration', [AdminController::class, 'config'])->name('admin.config');
    Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::post('order/{order}/print', [OrderController::class, 'print'])->name('order.print');
    Route::put('configuration', [AdminController::class, 'configure'])->name('admin.configure');
    Route::put('order/update-status', [OrderController::class, 'updateStatus'])->name('order.updateStatus');
    Route::post('/admin/change-password', [AdminController::class, 'changePassword'])->name('changePassword');
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('order', OrderController::class);
    Route::resource('delivery', DeliveryManController::class);
    Route::resource('booking', BookingController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('table', TableController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('inbox', InboxController::class);
});



