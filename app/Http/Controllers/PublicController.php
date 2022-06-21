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
        $ads=Ad::latest()->paginate(5);

        return view('ads.indexAds',compact('ads'));
    }

    function toCreateAd () {
        return view('ads.createAd');
    }
    function toCategoryAds (Category $category) {

        return view('ads.categoryAds',compact('category'));
    }
}
