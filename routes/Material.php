<?php

use App\Http\Material\Controllers\MaterialController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::middleware('auth')->group(function () {
        Route::resource('materials', MaterialController::class);
    });
});
