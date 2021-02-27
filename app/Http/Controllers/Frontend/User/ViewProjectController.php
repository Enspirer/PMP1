<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewProjectController extends Controller
{
    public function index($project_id)
    {
        return view('frontend.user.project_page');
    }
}
