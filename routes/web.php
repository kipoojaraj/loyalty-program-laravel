<?php

use App\Http\Controllers\AdminShopController;
use App\Http\Controllers\LoyaltyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopAuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/shops', [AdminShopController::class, 'index'])->name('admin.shops');
    Route::post('/admin/shops', [AdminShopController::class, 'store'])->name('admin.shops.store');
});


Route::middleware(['auth', 'role:shop'])->group(function () {
    Route::get('/shop/dashboard', [ShopController::class, 'dashboard'])->name('shop.dashboard');
    Route::post('/shop/generate-link', [ShopController::class, 'generateLink']);
});

Route::get('/loyalty/{shopName}/{token}', [LoyaltyController::class, 'show']);
Route::get('/wallet/apple', [WalletController::class, 'apple']);
Route::get('/wallet/google', [WalletController::class, 'google']);


require __DIR__ . '/auth.php';
