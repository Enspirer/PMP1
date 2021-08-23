<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    public function index()
    {
        return view('frontend.user.my_profile.my_profile');
    }
}
