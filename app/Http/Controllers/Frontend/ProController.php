<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProController extends Controller
{
    public function index($user_name)
    {
        return view('frontend.profile');
    }
}
