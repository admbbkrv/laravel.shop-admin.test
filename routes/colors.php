<?php

use App\Http\Controllers\Color\CreateController;
use App\Http\Controllers\Color\DeleteController;
use App\Http\Controllers\Color\EditController;
use App\Http\Controllers\Color\IndexController;
use App\Http\Controllers\Color\ShowController;
use App\Http\Controllers\Color\StoreController;
use App\Http\Controllers\Color\UpdateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tags Routes
|--------------------------------------------------------------------------
*/

Route::prefix('colors')->group(function () {
    Route::get('/', IndexController::class)->name('color.index');
    Route::get('/create', CreateController::class)->name('color.create');
    Route::post('/store', StoreController::class)->name('color.store');
    Route::get('/{color}', ShowController::class)->name('color.show');
    Route::get('/{color}/edit', EditController::class)->name('color.edit');
    Route::patch('/{color}', UpdateController::class)->name('color.update');
    Route::delete('/{color}', DeleteController::class)->name('color.delete');
});
