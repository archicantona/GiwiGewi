<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\MessageController;
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
    Route::get('/login', [SesiController::class, 'index']);
    Route::post('/login', [SesiController::class, 'login'])->name('login');
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::get('/', [HalamanController::class, 'getRandomProducts'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [SesiController::class, 'logout']);
    Route::get('/admin', [ProductController::class, 'index'])->name('admin.dashboard')->middleware(('userAccess:admin'));
    Route::get('/userorder', [OrderController::class, 'index'])->middleware(('userAccess:admin'));
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create')->middleware(('userAccess:admin'));
    Route::post('/products', [ProductController::class, 'store'])->name('products.store')->middleware(('userAccess:admin'));
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->middleware(('userAccess:admin'));
    Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware(('userAccess:admin'));
    Route::post('/product/{id}/edit', [ProductController::class, 'update'])->name('products.update')->middleware(('userAccess:admin'));
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store')->middleware(('userAccess:admin'));
    Route::get('/articles', [ArticleController::class, 'addarticle'])->name('articles.addarticles')->middleware(('userAccess:admin'));
    Route::get('/messages', [MessageController::class, 'messages'])->name('messages')->middleware(('userAccess:admin'));
    Route::delete('/message/{id}', [MessageController::class, 'destroy'])->middleware(('userAccess:admin'));
    Route::post('/cart/add', [HalamanController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/update-quantity', [HalamanController::class, 'updateCartQuantity'])->name('cart.updateQuantity');
    Route::get('/cart', [HalamanController::class, 'getCart'])->name('cart.get');
    Route::post('/cart/remove', [HalamanController::class, 'removeFromCart'])->name('cart.remove');
    Route::post('/checkout', [HalamanController::class, 'checkout'])->name('checkout');
    Route::get('/userinfo', [InfoController::class, 'userinfo'])->name('userinfo');
    Route::get('/profile/edit', [SesiController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [SesiController::class, 'update'])->name('profile.update');

    Route::get('/tambahartikel', function () {
        return view('admin/addarticle');
    })->middleware(('userAccess:admin'));

    
    Route::get('/riwayattransaksi', [InfoController::class, 'transactionHistory'])->name('transaction.history');
    Route::post('/cart/remove', [HalamanController::class, 'removeFromCart'])->name('cart.remove');
});

Route::get('/products/search', [HalamanController::class, 'search'])->name('products.search');
Route::get('/produk', [HalamanController::class, 'produk'])->name('produk');
Route::get('/product/{id}', [HalamanController::class, 'detailproduk']);

Route::get('/artikel', [ArticleController::class, 'artikel']);
Route::get('/artikel/{id}', [ArticleController::class, 'isiartikel']);


Route::post('/contact', [MessageController::class, 'store']);

Route::get('/about', function () {
    return view('user/about');
});
Route::get('/contact', function () {
    return view('user/contact');
});


Route::get('/tambahartikel', function () {
    return view('admin/addarticle');
});
