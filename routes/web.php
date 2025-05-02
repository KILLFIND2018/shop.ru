<?php

use App\Http\Controllers\Brends\IndexController as BrendsIndexController;
use App\Http\Controllers\Care\IndexController as CareIndexController;
use App\Http\Controllers\Care\MenController as CareMenController;
use App\Http\Controllers\Care\UnisexController as CareUnisexController;
use App\Http\Controllers\Care\WomenController as CareWomenController;
use App\Http\Controllers\Cosmetic\IndexController as CosmeticIndexController;
use App\Http\Controllers\Main\DeliveryController;
use App\Http\Controllers\Main\IndexController as MainIndexController;
use App\Http\Controllers\Main\PaymentController;
use App\Http\Controllers\Main\RefundController;
use App\Http\Controllers\Main\SitemapController;
use App\Http\Controllers\Main\WorktimeController;
use App\Http\Controllers\New\IndexController as NewIndexController;
use App\Http\Controllers\New\MenController  as NewMenController;
use App\Http\Controllers\New\UnisexController  as NewUnisexController;
use App\Http\Controllers\New\WomenController  as NewWomenController;
use App\Http\Controllers\Parfum\IndexController as ParfumIndexController;
use App\Http\Controllers\Parfum\MenController as ParfumMenController;
use App\Http\Controllers\Parfum\UnisexController as ParfumUnisexController;
use App\Http\Controllers\Parfum\WomenController as ParfumWomenController;
use App\Http\Controllers\Parfumers\IndexController as ParfumersIndexController;
use App\Http\Controllers\Promo\IndexController as PromoIndexController;
use App\Http\Controllers\Sale\IndexController as SaleIndexController;
use App\Http\Controllers\Sale\MenController as SaleMenController;
use App\Http\Controllers\Sale\WomenController as SaleWomenController;
use App\Http\Controllers\Sale\UnisexController as SaleUnisexController;
use Illuminate\Support\Facades\Route;


Route::group([], function () {

    Route::get('/', [MainIndexController::class, 'index'])->name('index');
    Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
    Route::get('/delivery', [DeliveryController::class, 'index'])->name('delivery');
    Route::get('/refund', [RefundController::class, 'index'])->name('refund');
    Route::get('/worktime', [WorktimeController::class, 'index'])->name('worktime');
    Route::get('/sitemap', [SitemapController::class, 'index'])->name('sitemap');



    Route::get('/new', [NewIndexController::class, 'index'])->name('new');
    Route::get('/new/men', [NewMenController::class, 'men'])->name('new_men');
    Route::get('/new/women', [NewWomenController::class, 'women'])->name('new_women');
    Route::get('/new/unisex', [NewUnisexController::class, 'unisex'])->name('new_unisex');

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
    Route::get('/brends', [BrendsIndexController::class, 'index'])->name('brends');
    Route::get('/parfumers', [ParfumersIndexController::class, 'index'])->name('parfumers');


    Route::get('/sale', [SaleIndexController::class, 'index'])->name('sale');
    Route::get('/sale/men', [SaleMenController::class, 'men'])->name('sale_men');
    Route::get('/sale/women', [SaleWomenController::class, 'women'])->name('sale_women');
    Route::get('/sale/unisex', [SaleUnisexController::class, 'unisex'])->name('sale_unisex');
});
