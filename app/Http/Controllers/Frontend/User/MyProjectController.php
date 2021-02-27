<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyProjectController extends Controller
{
    public function index($section)
    {
        return view('frontend.user.myproject',[
            'section' => $section
        ]);
    }
}
