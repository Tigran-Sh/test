<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register dashboard routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('dashboard.index');

Route::resource('users', 'UserController');
Route::resource('hotels', 'HotelController');
Route::resource('meeting_rooms', 'MeetingRoomController');
Route::resource('companies', 'CompanyController');
Route::resource('contacts', 'ContactController');
Route::resource('company_types', 'CompanyTypeController');
Route::resource('regions', 'RegionController');
Route::resource('destinations', 'DestinationController');
Route::resource('extra_services', 'ExtraServiceController');
Route::resource('extra_service_types', 'ExtraServiceTypeController');
Route::resource('packages', 'PackageController');
Route::resource('package_types', 'PackageTypeController');
Route::resource('services', 'ServiceController');
Route::resource('transfers', 'TransferController');
Route::resource('pages', 'PageController');

Route::get('/data-upload', [\App\Http\Controllers\Dashboard\DataExportController::class,'index'])->name('data.upload');
Route::post('/upload', [\App\Http\Controllers\Dashboard\DataExportController::class,'uploadExcel'])->name('excel.upload');

Route::get('/translations', [Barryvdh\TranslationManager\Controller::class, 'getIndex'])->name('translation_manager');
Route::get('/translations/view/{group?}', [Barryvdh\TranslationManager\Controller::class, 'getView'])->name('translation_group');
Route::get('/translations/key-search', [App\Http\Controllers\Dashboard\TranslationController::class, 'searchKey'])->name('translations.search');

