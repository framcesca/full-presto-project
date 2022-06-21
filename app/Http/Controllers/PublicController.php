<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    function home () {
        return view('home');
    }

    function toIndexAds () {
        return view('ads.indexAds');
    }

    function toCreateAd () {
        return view('ads.createAd');
    }
}
