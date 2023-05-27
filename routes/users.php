<?php

use App\Http\Controllers\User\CreateController;
use App\Http\Controllers\User\DeleteController;
use App\Http\Controllers\User\EditController;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\ShowController;
use App\Http\Controllers\User\StoreController;
use App\Http\Controllers\User\UpdateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Users Routes
|--------------------------------------------------------------------------
*/

Route::prefix('users')->group(function () {
    Route::get('/', IndexController::class)->name('user.index');
    Route::get('/create', CreateController::class)->name('user.create');
    Route::post('/store', StoreController::class)->name('user.store');
    Route::get('/{user}', ShowController::class)->name('user.show');
    Route::get('/{user}/edit', EditController::class)->name('user.edit');
    Route::patch('/{user}', UpdateController::class)->name('user.update');
    Route::delete('/{user}', DeleteController::class)->name('user.delete');
});
