<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])->prefix('b2b')->group(function () {
    Route::get('/dashboard', function () {
        return 'B2B Dashboard';
    });
});