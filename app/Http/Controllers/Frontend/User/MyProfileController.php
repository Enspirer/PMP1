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
        $user_id = Auth::id();

        $portfolios = Portfolio::where('user_id', $user_id)->get();

        return view('frontend.user.my_profile.my_profile', ['portfolios' => $portfolios]);
    }

    public function portfolioStore(Request $request)
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


    // public function portfolioEdit($id) {

    //     $portfolio = Portfolio::where('id', $id)->first();

    //     dd($portfolio);

    //     return view('frontend.user.my_profile.edit_dialogs.portfolio_edit', [
    //         'portfolio' => $portfolio
    //     ]);
    // }

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
            'link' => $request->link
        ]);

        return back();
    }

    public function portfolioDelete($id) {

        $portfolio = Portfolio::where('id', $id)->delete();

        return back();
    }


}
