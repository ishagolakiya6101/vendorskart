<?php

use App\Http\VendorCategory\Controllers\VendorCategoryController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::middleware('auth')->group(function () {
        Route::resource('vendor_categories', VendorCategoryController::class);
    });
});
