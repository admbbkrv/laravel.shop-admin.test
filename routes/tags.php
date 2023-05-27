<?php

use App\Http\Controllers\Tag\CreateController;
use App\Http\Controllers\Tag\DeleteController;
use App\Http\Controllers\Tag\EditController;
use App\Http\Controllers\Tag\IndexController;
use App\Http\Controllers\Tag\ShowController;
use App\Http\Controllers\Tag\StoreController;
use App\Http\Controllers\Tag\UpdateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tags Routes
|--------------------------------------------------------------------------
*/

Route::prefix('tags')->group(function () {
    Route::get('/', IndexController::class)->name('tag.index');
    Route::get('/create', CreateController::class)->name('tag.create');
    Route::post('/store', StoreController::class)->name('tag.store');
    Route::get('/{tag}', ShowController::class)->name('tag.show');
    Route::get('/{tag}/edit', EditController::class)->name('tag.edit');
    Route::patch('/{tag}', UpdateController::class)->name('tag.update');
    Route::delete('/{tag}', DeleteController::class)->name('tag.delete');
});
