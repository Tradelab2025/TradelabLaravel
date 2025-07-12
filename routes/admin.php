<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::resource('/products', App\Http\Controllers\Admin\ProductController::class);
    Route::resource('/orders', App\Http\Controllers\Admin\OrderController::class);
});