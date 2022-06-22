<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function toRevisorDashboard()
    {
        $ad = Ad::where('is_accepted', null)->first();
        return view('revisor.revisorDashboard', compact('ad'));
    }

    public function acceptAd(Ad $ad)
    {
        $ad->setAccepted(true);
        return redirect()->back()->with('message','Annuncio accettato');
    }

    public function rejectAd(Ad $ad)
    {
        $ad->setAccepted(false);
        return redirect()->back()->with('message','Annuncio rifiutato');
    }
}
