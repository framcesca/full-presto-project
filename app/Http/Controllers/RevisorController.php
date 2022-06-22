<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function toRevisorDashboard()
    {
        return view('revisor.revisorDashboard');
    }
}
