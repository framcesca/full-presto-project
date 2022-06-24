<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\User;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function toRevisorDashboard()
    {
        return view('revisor.revisorDashboard');
    }

    public function toRevisorDetailAd(Ad $ad)
    {
        return view('revisor.revisorDetailsAd',compact('ad'));
    }

    public function toJoinUs()
    {  
        return view('revisor.joinUs');
    }

    public function mailbecameRevisor()
    {
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message','Complimenti ! Hai richiesto di diventare un revisore');
    }

    public function createRevisor(User $user){
        Artisan::call('presto:makeUserRevisor',['email'=>$user->email]);
        return redirect('/')->with('message','Complimenti! Hai l\'utente è diventato revisore');
    }
    
    public function acceptAd(Ad $ad)
    {
        $ad->setAccepted(true);
        return redirect(route('revisorDashboard'))->with('message','Annuncio accettato');
    }

    public function rejectAd(Ad $ad)
    {
        $ad->setAccepted(false);
        return redirect(route('revisorDashboard'))->with('message','Annuncio rifiutato');
    }
}
