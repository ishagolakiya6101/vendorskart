<?php

use App\Http\MaterialCategory\Controllers\MaterialCategoryController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::middleware('auth')->group(function () {
        Route::resource('material_categories', MaterialCategoryController::class);
    });
});
