<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
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

Route::get('/',[PublicController::class,'home'])->name('home');
Route::get('/indexAds',[PublicController::class,'toIndexAds'])->name('indexAds');
Route::get('/indexAds/{category}',[PublicController::class,'toCategoryAds'])->name('categoryAds');
Route::get('/createAd',[PublicController::class,'toCreateAd'])->middleware('auth')->name('createAd');
Route::get('/detailsAd/{ad}', [PublicController::class, "toDetailsPage"])->name("detailsAd");

// revisor
Route::get('/revisor/dashboard', [RevisorController::class, 'toRevisorDashboard'])->middleware('isRevisor')->name('revisorDashboard');
Route::get('/revisor/dashboard/revisorDetailAd/{ad}', [RevisorController::class, 'toRevisorDetailAd'])->middleware('isRevisor')->name('revisorDetailAd');

// accept ad
Route::patch('/accept/ad/{ad}', [RevisorController::class, 'acceptAd'])->middleware('isRevisor')->name('revisorAcceptAd');
// reject ad
Route::patch('/reject/ad/{ad}', [RevisorController::class, 'rejectAd'])->middleware('isRevisor')->name('revisorRejectAd');

// Join US

Route::get('/revisor/request', [RevisorController::class, 'toJoinUs'])->middleware('auth')->name('joinUs');
Route::get('/revisor/request/mail', [RevisorController::class, 'mailbecameRevisor'])->middleware('auth')->name('becameRevisor');

//Set user as revisor
Route::get('/admin/create/revisor/{user}',[RevisorController::class,'createRevisor'])->name('createRevisor');

//Set route for TNT Search

Route::get('/search/announce',[PublicController::class,'searchAds'])->name('searchAds');
Route::get('/search/category/announce',[PublicController::class,'searchCategoryAds'])->name('searchCategoryAds');

// Languages
Route::post("/lingua/{lang}", [PublicController::class, "setLanguage"])->name("set_language_locale");