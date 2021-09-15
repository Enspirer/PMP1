<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Portfolio;
use App\Models\MyProfileDetails;

class MyProfileController extends Controller
{
    public function index() {
        $user_id = Auth::id();

        $portfolios = Portfolio::where('user_id', $user_id)->get();

        $profile_details = MyProfileDetails::where('user_id', $user_id)->first();

        // $special = json_decode($profile_details->specialized_on)[0]->name;
        // $special_description = json_decode($profile_details->specialized_on)[0]->description;

        return view('frontend.user.my_profile.my_profile', ['portfolios' => $portfolios, 'profile_details' => $profile_details]);
    }


    public function portfolioStore(Request $request) {
        
        $user_id = Auth::id();

        $image = $request->file('image');
        $imageName = time().'_'.rand(1000,10000).'.'.$image->getClientOriginalExtension();


        $image->move(public_path('files'),$imageName);

        $addportfolio = new Portfolio;

        $addportfolio->title = $request->title;
        $addportfolio->image = $imageName;
        $addportfolio->description = $request->description;
        $addportfolio->user_id = $user_id;
        $addportfolio->link = $request->link;
        $addportfolio->client_name = $request->client_name;

        
        $addportfolio->save();
        

        return back();
    }


    public function portfolioUpdate(Request $request) {


        $user_id = Auth::id();

        $image = $request->file('new_image');

        if($image != null) {

            $imageName = time().'_'.rand(1000,10000).'.'.$image->getClientOriginalExtension();

            $image->move(public_path('files'),$imageName);
        }
        else {
            $imageName = $request->old_image;
        }

        $portfolio = DB::table('portfolios')->where('id', $request->hid_id)->where('user_id', $user_id)->update([
            'title' => $request->title,
            'image' => $imageName,
            'description' => $request->description,
            'user_id' => $user_id,
            'link' => $request->link,
            'client_name' => $request->client_name
        ]);

        return back();
    }


    public function portfolioDelete($id) {

        $portfolio = Portfolio::where('id', $id)->delete();

        return back();
    }


    public function getPortfolio($id) {

        $portfolio = Portfolio::where('id', $id)->first();

        $port = json_encode($portfolio);

        return $port;
    }


    public function profileStore(Request $request) {

        $user_id = Auth::id();

        $addprofile = new MyProfileDetails;

        $addprofile->profile_name = $request->profile_name;
        $addprofile->profile_description = $request->profile_description;
        $addprofile->specialized_on = null;
        $addprofile->company_size = null;
        $addprofile->skills = null;
        $addprofile->license_and_certification = null;
        $addprofile->awards_badges = null;
        $addprofile->other_experties = null;
        $addprofile->client_reviews = null;
        $addprofile->user_id = $user_id;
        
        $addprofile->save();
        

        return back();
    }


    public function profileInfoUpdate(Request $request) {
        $user_id = Auth::id();

        $profile = DB::table('my_profile_details')->where('user_id', $user_id)->update([
            'profile_name' => $request->profile_name,
            'profile_description' => $request->profile_description
        ]);

        return back();
    }


    public function profileSpecializedUpdate(Request $request) {

        // dd($request);

        $user_id = Auth::id();

        $profile = MyProfileDetails::where('user_id', $user_id)->first();

        $name = $request->specialization;

        $description = $request->specialization_description;

        $output_json = [];

        foreach($name as $key=>$name_item) {
            $data = [
                'name' => $name_item,
                'description' => $description[$key]
            ];

            array_push($output_json, $data);
        }


        if($profile->specialized_on != null) {

            $array1 = json_decode($profile->specialized_on);

            $array2 = [
                'name' => $name,
                'description' => $description
            ];
    
            array_push($array1, $array2);
    
    
            $profile = DB::table('my_profile_details')->where('user_id', $user_id)->update([
                'specialized_on' => json_encode($array1)
            ]);
        }

        else {
            $array = [
                'name' => $name,
                'description' => $description
            ];
    
            $final = [$array];
    
    
            $profile = DB::table('my_profile_details')->where('user_id', $user_id)->update([
                'specialized_on' => json_encode($final)
            ]);
        }
        
        return back();
    }


    public function profileCompanySizeUpdate(Request $request) {
        $user_id = Auth::id();

        $profile = DB::table('my_profile_details')->where('user_id', $user_id)->update([
            'company_size' => $request->company_size
        ]);

        return back();
    }


    public function profileSkillsUpdate(Request $request) {

        $user_id = Auth::id();

        $array = json_encode($request->skills);


        $profile = DB::table('my_profile_details')->where('user_id', $user_id)->update([
            'skills' => $array
        ]);
        
        return back();
    }

    public function profileLicenseUpdate(Request $request) {

        $user_id = Auth::id();

        $profile = MyProfileDetails::where('user_id', $user_id)->first();

        $name = $request->license;
        $description = $request->description;

        
        if($profile->license_and_certification != null) {

            $array1 = json_decode($profile->license_and_certification);

            $array2 = [
                'name' => $name,
                'description' => $description
            ];
    
            array_push($array1, $array2);
    
    
            $profile = DB::table('my_profile_details')->where('user_id', $user_id)->update([
                'license_and_certification' => json_encode($array1)
            ]);
        }

        else {
            $array = [
                'name' => $name,
                'description' => $description
            ];
    
            $final = [$array];
    
    
            $profile = DB::table('my_profile_details')->where('user_id', $user_id)->update([
                'license_and_certification' => json_encode($final)
            ]);
        }
        

        return back();
    }

    public function profileAwardsUpdate(Request $request) {

        $user_id = Auth::id();

        $profile = MyProfileDetails::where('user_id', $user_id)->first();

        $name = $request->awards;
        $description = $request->description;

        
        if($profile->awards_badges != null) {

            $array1 = json_decode($profile->awards_badges);

            $array2 = [
                'name' => $name,
                'description' => $description
            ];
    
            array_push($array1, $array2);
    
    
            $profile = DB::table('my_profile_details')->where('user_id', $user_id)->update([
                'awards_badges' => json_encode($array1)
            ]);
        }

        else {
            $array = [
                'name' => $name,
                'description' => $description
            ];
    
            $final = [$array];
    
    
            $profile = DB::table('my_profile_details')->where('user_id', $user_id)->update([
                'awards_badges' => json_encode($final)
            ]);
        }
        

        return back();
    }

    public function profileOthersUpdate(Request $request) {
        $user_id = Auth::id();

        $profile = MyProfileDetails::where('user_id', $user_id)->first();

        $name = $request->others;
        $description = $request->description;

        
        if($profile->other_experties != null) {

            $array1 = json_decode($profile->other_experties);

            $array2 = [
                'name' => $name,
                'description' => $description
            ];
    
            array_push($array1, $array2);
    
    
            $profile = DB::table('my_profile_details')->where('user_id', $user_id)->update([
                'other_experties' => json_encode($array1)
            ]);
        }

        else {
            $array = [
                'name' => $name,
                'description' => $description
            ];
    
            $final = [$array];
    
    
            $profile = DB::table('my_profile_details')->where('user_id', $user_id)->update([
                'other_experties' => json_encode($final)
            ]);
        }
        

        return back();
    }


}
