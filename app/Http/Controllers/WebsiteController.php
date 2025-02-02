<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Country;
use App\Models\UserEducation;
use App\Models\UserSkill;
class WebsiteController extends Controller
{
    public function __construct()
    {
        $countries = Country::get();
        return view()->share(['countries'=>$countries]);
        // $this->middleware('auth');
    }
    public function dashboard($key = null){
        session()->put('key',$key);
        return view('dashboard.edit_profile');
    }


    public function storeProfile(Request $request){
        // return $request->all();
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
            $userEducation = UserEducation::updateOrCreate(['user_id'=>auth()->user()->id],['university'=>$item['university'],'country'=>$item['country'],'degree'=>$item['degree'],'field_of_study'=>$item['field'],'start_date'=>$item['start_year'],'start_month'=>$item['start_month'],'end_date'=>$item['end_year']]);
        }
        $structuredSkills = [];

        foreach ($skills as $skill => $level) {
            $structuredSkills[] = [
                "skill" => $skill,
                "level" => $level
            ];
            UserSkill::create(['user_id'=>auth()->user()->id],['skills'=>$skill,'level'=>$level]);
        }
        return redirect('profile_summary');

    }
    public function profileSummary(){
        
        return view('dashboard.profile_summary');
    }
    public function profileDashboard(){
        
        return view('dashboard.profile_dashboard');
    }
    public function quiz(){
        
        return view('dashboard.quiz');
    }
    public function job(){
        
        return view('dashboard.jobs');
    }
    public function careerProfile(){
        
        return view('dashboard.career_profile');
    }
}
