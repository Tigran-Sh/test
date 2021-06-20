<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/invoice', function () {
    return view('pdf.invoice');
});
Route::get('/email', function () {
    return view('email.email');
});

Route::group(
    ['prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

    Auth::routes(['verify' => true]);

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/packages', [App\Http\Controllers\PackageController::class, 'index'])->name('packages');
    Route::get('/packages/{id}', [App\Http\Controllers\PackageController::class, 'show'])->name('package');

    Route::get('/extra_services', [App\Http\Controllers\ExtraServiceController::class, 'index'])->name('extra_services');
    Route::get('/extra_services/{id}', [App\Http\Controllers\ExtraServiceController::class, 'show'])->name('extra_service');

//    Route::get('/locations/{id}', [App\Http\Controllers\BookingController::class, 'locations'])->name('booking.locations');
    Route::get('/reservation/{id}', [App\Http\Controllers\BookingController::class, 'reservation'])->name('booking.locations');

    Route::get('/extra-service-choose', [App\Http\Controllers\BookingController::class, 'extra_services'])->name('booking.extra_services');

    Route::get('/personal-information', [App\Http\Controllers\BookingController::class, 'personal_information'])->name('booking.personal_information');

    Route::get('/package-information', [App\Http\Controllers\BookingController::class, 'package_information'])->name('booking.package_information');

    Route::get('/pick-dates', [App\Http\Controllers\BookingController::class, 'pick_dates'])->name('booking.pick_dates');

    Route::get('/transfer', function (){
        return view('booking.transfer');
    });
    Route::get('/check-out', function (){
        return view('booking.check-out');
    });

    Route::group(['middleware' => 'auth'], function ()
    {
        Route::group(['prefix' => 'profile'], function ()
        {
            Route::get('/', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
            Route::post('/', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
            Route::post('/image', [App\Http\Controllers\ProfileController::class, 'image'])->name('profile.image');

            Route::get('/bookings',  [App\Http\Controllers\ProfileController::class, 'bookings'])->name('profile.bookings.index');
            Route::get('/bookings/{id}', [App\Http\Controllers\ProfileController::class, 'bookingsDetails'])->name('profile.bookings.show');

            Route::get('/comparison', [App\Http\Controllers\ProfileController::class, 'comparison'])->name('profile.comparison');

            Route::get('/choosed', [App\Http\Controllers\ProfileController::class, 'choosed'])->name('profile.choosed');

            Route::get('/password', [App\Http\Controllers\ProfileController::class, 'password'])->name('profile.password');
            Route::post('/password', [App\Http\Controllers\ProfileController::class, 'passwordUpdate'])->name('profile.password.update');

            Route::get('/notifications', [App\Http\Controllers\ProfileController::class, 'notifications'])->name('profile.notifications');
        });
    });
    Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('pages.contact');
    Route::post('/contact', [App\Http\Controllers\PageController::class, 'contactSubmit'])->name('pages.contact.submit');
    Route::get('/{slug}', [App\Http\Controllers\PageController::class, 'page'])->name('pages');


});

