<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\ImageServicesController;

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

Route::get('/dashboard/payment', [PaymentController::class, 'index'])->middleware('auth');

Route::get('/dashboard/date', [DateController::class, 'index'])->middleware('auth');

Route::resource('/dashboard/transaction', TransactionsController::class)->middleware('auth');

Route::resource('/dashboard/favorite', FavoritesController::class)->middleware('auth');

Route::resource('/dashboard/review', ReviewsController::class)->middleware('auth');

Route::resource('/dashboard/cart', CartsController::class)->middleware('auth');

Route::resource('/dashboard/profile', UserController::class)->middleware('auth');

Route::resource('/dashboard/customer', CustomerController::class)->middleware('auth');

Route::resource('/dashboard/image-service', ImageServicesController::class)->middleware('auth');

Route::resource('/dashboard/category', CategoriesController::class)->middleware('auth');

Route::resource('/dashboard/service', ServicesController::class)->middleware('auth');

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');

Route::post('/login',[AuthController::class,'authenticate']);

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout']);

Route::post('/register',[RegisterController::class,'store']);

Route::get('/register', [RegisterController::class,'index']);

Route::get('/', [HomeController::class,'home']);

Route::get('/contact', [HomeController::class,'contact']);

Route::get('/service/details/{service}', [HomeController::class, 'detail']);

Route::get('/services', [HomeController::class,'service']);

Route::get('/about', [HomeController::class,'about']);

// Route::get('/contact', function () {
//     return view('home.contact');
// });
// Route::get('/product', function () {
//     return view('home.product');
// });
// Route::get('/about', function () {
//     return view('home.about');
// });
