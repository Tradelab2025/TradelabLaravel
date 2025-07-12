<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Include separate route files
require __DIR__.'/admin.php';
require __DIR__.'/b2b.php';
require __DIR__.'/b2c.php';
