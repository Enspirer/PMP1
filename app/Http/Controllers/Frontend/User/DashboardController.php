<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.user.dashboard');
    }


    public function projectSearch(Request $request)
    {
        if(request('keyword') != null) {
            $search_keyword = request('keyword');
        }
        else {
            $search_keyword = 'search_keyword';
        }

        $category = 'category';

        $county = 'county';

        $bids_range = 'bids_range';

        $sort_by = 'sort_by';

        return redirect()->route('frontend.project_explore', [$search_keyword, $category, $county, $bids_range, $sort_by]);

    }
}
