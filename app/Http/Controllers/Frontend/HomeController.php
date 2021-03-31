<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $agent = new Agent();

        if($agent->isMobile()){
            return view('frontend.mobile.mobile_homepage');
        }else{
            return view('frontend.index');
        }

    }
}
