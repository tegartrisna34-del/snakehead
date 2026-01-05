<?php

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

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LocationController;

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');
Route::get('/category/{slug}', [ProductController::class, 'category'])->name('category.show');

Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add')->middleware('auth');
Route::delete('/cart/remove', [CartController::class, 'remove'])->name('cart.remove')->middleware('auth');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');
Route::get('/checkout/success/{orderNumber}', [CheckoutController::class, 'success'])->name('checkout.success');
Route::post('/shipping/cost', [CheckoutController::class, 'shippingCost'])->name('shipping.cost');
Route::get('/contact', function () { return view('contact'); })->name('contact');

// Location proxy endpoints
Route::get('/store-info', function () { return view('store_info'); })->name('store.info');
Route::get('/location', function () { return view('store_info'); })->name('location');
// Species reference
Route::view('/species', 'species')->name('species');

Route::get('/api/provinces', [LocationController::class, 'provinces']);
Route::get('/api/regencies/{provId}', [LocationController::class, 'regencies']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    // Product Management
    Route::get('/products', [ProductController::class, 'index'])->name('product.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/products', [ProductController::class, 'store'])->name('product.store');
});
