<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectCategories;
use App\Models\Tallents;

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
        $categories = ProjectCategories::all();


        $mobileRequest = $request->header('sec-ch-ua-mobile');

        return view('frontend.index', ['categories' => $categories]);
    }
}
