<?php

use App\Http\Industry\Controllers\IndustryController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::middleware('auth')->group(function () {
        Route::resource('industries', IndustryController::class);
    });
});
