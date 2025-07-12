<?php

use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    Route::get('/shop', function () {
        return 'B2C Shop';
    });
});