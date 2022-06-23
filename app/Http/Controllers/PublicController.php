<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home () {
        return view('home');
    }

    public function toIndexAds () {
        $ads=Ad::where('is_accepted',true)->latest()->paginate(12);

        return view('ads.indexAds',compact('ads'));
    }

    public function toCreateAd () {
        return view('ads.createAd');
    }
    
    public function toCategoryAds (Category $category) {

        return view('ads.categoryAds',compact('category'));
    }

    public function toDetailsPage(Ad $ad) {
        return view("ads.details", compact("ad"));
    }

    public function searchAds(Request $request)
    {
        $ads = Ad::search($request->searched)->where('is_accepted',true)->paginate(12);
        return view('ads.indexAds',compact('ads'));
    }


}
