<?php

use App\Http\Company\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::middleware('auth')->group(function () {
        Route::resource('companies', CompanyController::class);
    });
});
