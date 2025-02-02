<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\UserEducation;
class WebsiteController extends Controller
{
    public function dashboard(){
        return view('dashboard.dashboard');
    }
    public function storeProfile(Request $request){
        return $request->all();
        extract($request->all());
        if(empty(auth()->user()->profile)){
            $profile = new Profile();
            $profile->user_id = auth()->user()->id;
            $profile->country = $country;
            $profile->save();
        }   
        $structuredEducation = [];

        foreach ($education as $key => $value) {
            // Extract the index number from the key
            preg_match('/_(\d+)$/', $key, $matches);
            if (!isset($matches[1])) {
                continue;
            }
            
            $index = $matches[1];
            $field = preg_replace('/_\d+$/', '', $key); // Remove the index number

            // Store in a structured array
            $structuredEducation[$index][$field] = $value;
        }

        // Convert array keys to sequential indices
        $structuredEducation = array_values($structuredEducation);
        // return $structuredEducation;
        foreach($structuredEducation as $index=>$item){
            $userEducation = UserEducation::create(['user_id'=>auth()->user()->id,'university'=>$item->university,'country'=>$item->country,'degree'=>$item->degree,'field_of_study'=>$item->field,'start_date'=>$item->start_year,'start_month'=>$item->start_month,'end_date'=>$item->end_year]);
        }die;

    }
}
