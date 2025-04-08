<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\New\IndexController;
use App\Http\Controllers\New\MenController;
use App\Http\Controllers\New\UnisexController;
use App\Http\Controllers\New\WomenController;
use Illuminate\Support\Facades\Route;


Route::group([], function () {

    Route::get('/', [MainController::class, 'index'])->name('index');

    Route::get('/new', [IndexController::class, 'index'])->name('new');
    Route::get('/new/men', [MenController::class, 'men'])->name('new_men');
    Route::get('/new/women', [WomenController::class, 'women'])->name('new_women');
    Route::get('/new/unisex', [UnisexController::class, 'unisex'])->name('new_unisex');
});
