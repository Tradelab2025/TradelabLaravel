<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

// Example API routes
Route::get('/products', [ProductController::class, 'index']); // Fetch all products
Route::get('/products/{id}', [ProductController::class, 'show']); // Fetch a single product
Route::post('/login', [AuthController::class, 'login']); // User login
Route::post('/register', [AuthController::class, 'register']); // User registration

// Protected routes (require authentication)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/products', [ProductController::class, 'store']); // Create a product
    Route::put('/products/{id}', [ProductController::class, 'update']); // Update a product
    Route::delete('/products/{id}', [ProductController::class, 'destroy']); // Delete a product
});