<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function home () {
        return view('home');
    }

    function toIndexAds () {
        $ads=Ad::where('is_accepted',true)->latest()->paginate(12);

        return view('ads.indexAds',compact('ads'));
    }

    function toCreateAd () {
        return view('ads.createAd');
    }
    function toCategoryAds (Category $category) {

        return view('ads.categoryAds',compact('category'));
    }

    function toDetailsPage(Ad $ad) {
        return view("ads.details", compact("ad"));
    }
}
