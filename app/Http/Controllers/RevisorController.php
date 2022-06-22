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
}
