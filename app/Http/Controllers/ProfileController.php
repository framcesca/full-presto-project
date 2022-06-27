<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function toAuthorProfile($id) {
        $author = User::find($id);
        // $ads = Ad::where("user_id", $id)->get();
        return view("profile/authorProfile", compact("author"));
    }
}