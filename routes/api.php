<?php

use App\Applications\Api\Post\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::controller(PostController::class)->prefix('posts')->group(function () {
    Route::get('', 'index')->name('posts.index');
    Route::get('{post}', 'show')->name('posts.show');
    Route::post('', 'store')->name('posts.store');
});
