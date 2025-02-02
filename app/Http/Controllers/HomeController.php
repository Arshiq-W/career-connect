<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $countries = Country::get();
        return view()->share(['countries'=>$countries]);
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($key = null)
    {
        session()->put('key',$key);
        return view('dashboard.dashboard');
    }
    public function aboutUs()
    {
        return view('website.about_us');
    }
    public function faq()
    {
        return view('website.faqs');
    }
}
