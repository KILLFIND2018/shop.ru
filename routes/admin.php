<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\News\EditController;
use App\Http\Controllers\Admin\News\IndexController as NewsController;
use App\Http\Controllers\Admin\News\CreateController;
use App\Http\Controllers\Admin\News\ShowController;
use App\Http\Controllers\Admin\News\StoreController;
use App\Http\Controllers\Admin\News\UpdateController;
use Illuminate\Support\Facades\Route;


Route::group([], function () {

    Route::prefix('/admin')->group( function () {
        Route::get('/', IndexController::class)->name('admin');
        /*CRUD*/
        Route::get('/news', NewsController::class)->name('admin.news.index');
        Route::get('/news/create', CreateController::class)->name('admin.news.create');
        Route::post('/news', StoreController::class)->name('admin.news.store');
        Route::get('/news/{news}', ShowController::class)->name('admin.news.show');
        Route::get('/news/{news}/edit', EditController::class)->name('admin.news.edit');
        Route::patch('/news/{news}', UpdateController::class)->name('admin.news.update');
    });













});
