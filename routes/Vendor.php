<?php

use App\Http\Vendor\Controllers\VendorController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::middleware('auth')->group(function () {
        Route::resource('vendor_list', VendorController::class);
    });
});
