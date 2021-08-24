<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Portfolio;

class MyProfileController extends Controller
{
    public function index()
    {
        return view('frontend.user.my_profile.my_profile');
    }

    public function portfolioUpdate(Request $request)
    {

        
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

        
        $addportfolio->save();
        

        return back();
    }
}
