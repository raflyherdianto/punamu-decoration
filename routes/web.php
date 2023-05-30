<?php

use App\Models\Service;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CategoriesController;
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

Route::get('/pegawai', function () {
    return view('dashboard.users.pegawai');
});

Route::get('/customer', function () {
    return view('dashboard.users.customer');
});

Route::get('/user-edit', function () {
    return view('dashboard.users.edit');
});

Route::get('/transactions', function () {
    return view('dashboard.transaction.transaction');
});

Route::get('/transactions-create', function () {
    return view('dashboard.transaction.create');
});

Route::get('/transactions-edit', function () {
    return view('dashboard.transaction.edit');
});

Route::get('/cart', function () {
    return view('dashboard.cart.cart');
});

Route::get('/cart-create', function () {
    return view('dashboard.cart.create');
});

Route::get('/cart-edit', function () {
    return view('dashboard.cart.edit');
});

Route::get('/favorite', function () {
    return view('dashboard.favorite.favorite');
});

Route::get('/favorite-create', function () {
    return view('dashboard.favorite.create');
});

Route::get('/favorite-edit', function () {
    return view('dashboard.favorite.edit');
});

Route::get('/review', function () {
    return view('dashboard.review.review');
});

Route::get('/review-create', function () {
    return view('dashboard.review.create');
});

Route::get('/review-edit', function () {
    return view('dashboard.review.edit');
});

Route::resource('/dashboard/profile', UserController::class)->middleware('auth');

Route::resource('/dashboard/customer', CustomerController::class)->middleware('auth');

Route::resource('/dashboard/image-service', ImageServicesController::class)->middleware('auth');

Route::resource('/dashboard/category', CategoriesController::class)->middleware('auth');

Route::resource('/dashboard/service', ServicesController::class)->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
    ]);
})->middleware('auth');

Route::post('/login',[AuthController::class,'authenticate']);

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout']);

Route::post('/register',[RegisterController::class,'store']);

Route::get('/register', [RegisterController::class,'index']);

Route::get('/', function () {
    return view('home.index');
});

Route::get('/contact', function () {
    return view('home.contact');
});
Route::get('/product', function () {
    return view('home.product');
});
Route::get('/about', function () {
    return view('home.about');
});
