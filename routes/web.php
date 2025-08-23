<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Brends\IndexController as BrendsIndexController;
use App\Http\Controllers\Care\IndexController as CareIndexController;
use App\Http\Controllers\Care\MenController as CareMenController;
use App\Http\Controllers\Care\UnisexController as CareUnisexController;
use App\Http\Controllers\Care\WomenController as CareWomenController;
use App\Http\Controllers\Cosmetic\IndexController as CosmeticIndexController;
use App\Http\Controllers\Main\AboutController;
use App\Http\Controllers\Main\CertificateController;
use App\Http\Controllers\Main\ContactsController;
use App\Http\Controllers\Main\CouponController;
use App\Http\Controllers\Main\DeliveryController;
use App\Http\Controllers\Main\DiscountController;
use App\Http\Controllers\Main\IndexController as MainIndexController;
use App\Http\Controllers\Main\OfferController;
use App\Http\Controllers\Main\PaymentController;
use App\Http\Controllers\Main\PresentsController;
use App\Http\Controllers\Main\RefundController;
use App\Http\Controllers\Main\RulesController;
use App\Http\Controllers\Main\SitemapController;
use App\Http\Controllers\Main\WorktimeController;
use App\Http\Controllers\New\IndexController as NewIndexController;
use App\Http\Controllers\New\MenController  as NewMenController;
use App\Http\Controllers\New\UnisexController  as NewUnisexController;
use App\Http\Controllers\New\WomenController  as NewWomenController;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\Articles\IndexController as ArticlesIndexController;
use App\Http\Controllers\Notes\IndexController as NotesIndexController;
use App\Http\Controllers\Parfum\IndexController as ParfumIndexController;
use App\Http\Controllers\Parfum\MenController as ParfumMenController;
use App\Http\Controllers\Parfum\UnisexController as ParfumUnisexController;
use App\Http\Controllers\Parfum\WomenController as ParfumWomenController;
use App\Http\Controllers\Parfumers\IndexController as ParfumersIndexController;
use App\Http\Controllers\Promo\IndexController as PromoIndexController;
use App\Http\Controllers\Reviews\IndexController as ReviewsIndexController;
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
    Route::get('/rules', [RulesController::class, 'index'])->name('rules');
    Route::get('/offer', [OfferController::class, 'index'])->name('offer');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
    Route::get('/cosmetic', [CosmeticIndexController::class, 'index'])->name('cosmetic');
    Route::get('/promo', [PromoIndexController::class, 'index'])->name('promo');
    Route::get('/brends', [BrendsIndexController::class, 'index'])->name('brends');
    Route::get('/parfumers', [ParfumersIndexController::class, 'index'])->name('parfumers');
    Route::get('/presents', [PresentsController::class, 'index'])->name('presents');
    Route::get('/discounts', [DiscountController::class, 'index'])->name('discounts');
    Route::get('/coupons', [CouponController::class, 'index'])->name('coupons');
    Route::get('/certificates', [CertificateController::class, 'index'])->name('certificates');
    Route::get('/notes', [NotesIndexController::class, 'index'])->name('notes');



    /*CRUD*/
    Route::prefix('/news')->group( function () {
        Route::get('/', NewsController::class)->name('news');
        //Route::get('/create', CreateController::class)->name('news.create');
        //Route::post('/', StoreController::class)->name('news.store');
    });

    Route::prefix('/reviews')->group( function () {
        Route::get('/', [ReviewsIndexController::class, 'index'])->name('reviews');
    });

    Route::prefix('/articles')->group( function () {
        Route::get('/', [ArticlesIndexController::class, 'index'])->name('articles');
    });


    Route::prefix('/new')->group(function (){
        Route::get('/', [NewIndexController::class, 'index'])->name('new');
        Route::get('/men', [NewMenController::class, 'men'])->name('new_men');
        Route::get('/women', [NewWomenController::class, 'women'])->name('new_women');
        Route::get('/unisex', [NewUnisexController::class, 'unisex'])->name('new_unisex');
    });

    Route::prefix('parfum')->group( function () {
        Route::get('/', [ParfumIndexController::class, 'index'])->name('parfum');
        Route::get('/men', [ParfumMenController::class, 'men'])->name('parfum_men');
        Route::get('/women', [ParfumWomenController::class, 'women'])->name('parfum_women');
        Route::get('/unisex', [ParfumUnisexController::class, 'unisex'])->name('parfum_unisex');
    });


    Route::prefix('/care')->group(function () {
        Route::get('/', [CareIndexController::class, 'index'])->name('care');
        Route::get('/men', [CareMenController::class, 'men'])->name('care_men');
        Route::get('/women', [CareWomenController::class, 'women'])->name('care_women');
        Route::get('/unisex', [CareUnisexController::class, 'unisex'])->name('care_unisex');
    });

    Route::prefix('/sale')->group(function () {
        Route::get('/', [SaleIndexController::class, 'index'])->name('sale');
        Route::get('/men', [SaleMenController::class, 'men'])->name('sale_men');
        Route::get('/women', [SaleWomenController::class, 'women'])->name('sale_women');
        Route::get('/unisex', [SaleUnisexController::class, 'unisex'])->name('sale_unisex');
    });

});
