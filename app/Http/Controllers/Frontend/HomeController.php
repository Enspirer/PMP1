<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $mobileRequest = $request->header('sec-ch-ua-mobile');
        if($mobileRequest == "?1")
        {
            return view('frontend.mobile.mobile_homepage');
        }else{
            return view('frontend.index');
        }
    }
}
