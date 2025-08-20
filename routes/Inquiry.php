<?php

use App\Http\Inquiry\Controllers\InquiryController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::middleware('auth')->group(function () {
        Route::resource('inquiries', InquiryController::class);
    });
});
