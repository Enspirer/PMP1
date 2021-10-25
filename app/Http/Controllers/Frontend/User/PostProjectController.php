<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostProjectController extends Controller
{
   public function index(){
       return view('frontend.user.post_project');
   }

   public function store(Request $request){

    dd($request);


    return view('frontend.user.post_project');
   }


}
