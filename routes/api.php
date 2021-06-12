<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/reservation-hotels', [\App\Http\Controllers\BookingController::class, 'reservation'])->name('checkout.store');

Route::get('choose-hotel/{id}', [\App\Http\Controllers\Api\BookingController::class, 'locations']);
