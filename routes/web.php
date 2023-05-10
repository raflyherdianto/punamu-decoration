<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/home', function () {
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

Route::get('/', function () {
    return view('welcome');
});
