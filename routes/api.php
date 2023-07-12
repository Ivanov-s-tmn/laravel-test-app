<?php

use App\Http\Controllers\Api\v1\OfferController;
use App\Http\Controllers\Api\v1\OfferItemController;
use Illuminate\Support\Facades\Route;

Route::prefix('/v1')->group(function (){
   Route::post('/offers', [OfferController::class, 'store'])->name('api.v1.offers.store');
   Route::put('/offers/{offer}', [OfferController::class, 'update'])->name('api.v1.offers.update')->whereNumber('offer');

   Route::post('/offers/items', [OfferItemController::class, 'store'])->name('api.v1.offers.items.store');
   Route::delete('/offers/items/{item}', [OfferItemController::class, 'destroy'])->name('api.v1.offers.items.destroy')->whereNumber('item');
});
