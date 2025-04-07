<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::group([], function () {

    Route::get('/', [MainController::class, 'index'])->name('index');

    Route::get('/new', [MainController::class, 'new'])->name('new');
});
