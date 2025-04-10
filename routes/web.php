<?php

use App\Http\Controllers\Care\IndexController as CareIndexController;
use App\Http\Controllers\Care\MenController as CareMenController;
use App\Http\Controllers\Care\UnisexController as CareUnisexController;
use App\Http\Controllers\Care\WomenController as CareWomenController;
use App\Http\Controllers\Cosmetic\IndexController as CosmeticIndexController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\New\IndexController;
use App\Http\Controllers\New\MenController;
use App\Http\Controllers\New\UnisexController;
use App\Http\Controllers\New\WomenController;
use App\Http\Controllers\Parfum\IndexController as ParfumIndexController;
use App\Http\Controllers\Parfum\MenController as ParfumMenController;
use App\Http\Controllers\Parfum\UnisexController as ParfumUnisexController;
use App\Http\Controllers\Parfum\WomenController as ParfumWomenController;
use App\Http\Controllers\Promo\IndexController as PromoIndexController;
use Illuminate\Support\Facades\Route;


Route::group([], function () {

    Route::get('/', [MainController::class, 'index'])->name('index');

    Route::get('/new', [IndexController::class, 'index'])->name('new');
    Route::get('/new/men', [MenController::class, 'men'])->name('new_men');
    Route::get('/new/women', [WomenController::class, 'women'])->name('new_women');
    Route::get('/new/unisex', [UnisexController::class, 'unisex'])->name('new_unisex');

    Route::get('/parfum', [ParfumIndexController::class, 'index'])->name('parfum');
    Route::get('/parfum/men', [ParfumMenController::class, 'men'])->name('parfum_men');
    Route::get('/parfum/women', [ParfumWomenController::class, 'women'])->name('parfum_women');
    Route::get('/parfum/unisex', [ParfumUnisexController::class, 'unisex'])->name('parfum_unisex');

    Route::get('/care', [CareIndexController::class, 'index'])->name('care');
    Route::get('/care/men', [CareMenController::class, 'men'])->name('care_men');
    Route::get('/care/women', [CareWomenController::class, 'women'])->name('care_women');
    Route::get('/care/unisex', [CareUnisexController::class, 'unisex'])->name('care_unisex');

    Route::get('/cosmetic', [CosmeticIndexController::class, 'index'])->name('cosmetic');

    Route::get('/promo', [PromoIndexController::class, 'index'])->name('promo');
});
