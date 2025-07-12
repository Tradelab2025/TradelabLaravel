<?php

use Illuminate\Support\Facades\Route;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DispatchServingFilamentEvent;

Route::middleware(['web', Authenticate::class, DispatchServingFilamentEvent::class])
    ->prefix('admin')
    ->group(function () {
        // Filament will handle admin routes here automatically
    });