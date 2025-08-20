<?php

use App\Http\Branch\Controllers\BranchController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::middleware('auth')->group(function () {
        Route::resource('branches', BranchController::class);
    });
});
