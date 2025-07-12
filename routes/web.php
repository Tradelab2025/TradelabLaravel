<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return response()->json(['message' => 'Laravel API is running']);
});

Auth::routes();

// Include separate route files
require __DIR__.'/admin.php';
require __DIR__.'/b2b.php';
require __DIR__.'/b2c.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
