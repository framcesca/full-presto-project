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
Route::get('/revisor/dashboard', [RevisorController::class, 'toRevisorDashboard'])->name('revisorDashboard');

// accept ad
Route::patch('/accept/ad/{ad}', [RevisorController::class, 'acceptAd'])->name('revisorAcceptAd');
// reject ad
Route::patch('/reject/ad/{ad}', [RevisorController::class, 'rejectAd'])->name('revisorRejectAd');