<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
class WebsiteController extends Controller
{
    public function dashboard(){
        return view('dashboard.dashboard');
    }
    public function storeProfile(Request $request){
        return $request->all();
        extract($request->all());
        if(!empty(auth()->user()->profile)){
            $profile = new Profile();
            $profile->user_id = auth()->user()->id;
            $profile->country = $country;
             
        }
    }
}
