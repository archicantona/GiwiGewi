<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

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


Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index']);
    Route::post('/', [SesiController::class, 'login'])->name('login');
});
Route::get('/home', function () {
    return view('user/home');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [SesiController::class, 'logout']);
    Route::get('/admin', [ProductController::class, 'index'])->name('admin.dashboard')->middleware(('userAccess:admin'));
    Route::get('/userorder', [OrderController::class, 'index'])->middleware(('userAccess:admin'));
    Route::get('/pelanggan', [AdminController::class, 'pelanggan'])->middleware(('userAccess:pelanggan,admin'));
});
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::get('/about', function () {
    return view('user/about');
});
Route::get('/contact', function () {
    return view('user/contact');
});

Route::get('/register', function () {
    return view('landing/register');
});

Route::get('/tes', function () {
    return view('user/tes');
});

Route::get('/tambahartikel', function () {
    return view('admin/addarticle');
});
