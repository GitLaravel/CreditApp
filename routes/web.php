<?php

use Illuminate\Support\Facades\Route;









Route::prefix('credit')->group(function () {
    Route::get('/create', App\Http\Controllers\CreditResult\CreateController::class)->name('CreditResult.create');
    Route::post('/', App\Http\Controllers\CreditResult\StoreController::class)->name('CreditResult.store');
    //Route::get('/show', App\Http\Controllers\CreditResult\ShowController::class)->name('CreditResult.show');
});
