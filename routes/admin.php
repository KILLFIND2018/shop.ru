<?php

use App\Http\Controllers\Admin\IndexController;
use Illuminate\Support\Facades\Route;


Route::group([], function () {

    Route::prefix('/admin')->group( function () {
        Route::get('/', IndexController::class)->name('admin');
        /*CRUD*/
        Route::get('/news', \App\Http\Controllers\Admin\News\IndexController::class)->name('admin.index.news');
    });













});
