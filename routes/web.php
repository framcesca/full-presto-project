<?php

use App\Http\Controllers\PublicController;
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
Route::get('/createAd',[PublicController::class,'toCreateAd'])->middleware('auth')->name('createAd');
