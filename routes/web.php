<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;

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

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        // dd(auth()->user()->petugas),
        // 'title' => 'Dashboard',
    ]);
})->middleware('auth');


Route::post('/login',[AuthController::class,'authenticate']);

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

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

Route::get('/services', function () {
    return view('dashboard.services.service');
});

Route::get('/services', function () {
    return view('dashboard.services.service');
});

Route::get('/services-create', function () {
    return view('dashboard.services.create');
});

Route::get('/services-edit', function () {
    return view('dashboard.services.edit');
});

Route::get('/pegawai', function () {
    return view('dashboard.users.pegawai');
});

Route::get('/customer', function () {
    return view('dashboard.users.customer');
});

Route::get('/user-create', function () {
    return view('dashboard.users.create');
});

Route::get('/user-edit', function () {
    return view('dashboard.users.edit');
});

Route::get('/image-services', function () {
    return view('dashboard.image-services.image-service');
});

Route::get('/image-services-create', function () {
    return view('dashboard.image-services.create');
});

Route::get('/image-services-edit', function () {
    return view('dashboard.image-services.edit');
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

Route::get('/categories', function () {
    return view('dashboard.categories.categories');
});

Route::get('/categories-create', function () {
    return view('dashboard.categories.create');
});

Route::get('/categories-edit', function () {
    return view('dashboard.categories.edit');
});

Route::resource('/dashboard/service', ServicesController::class)->middleware('auth');

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
