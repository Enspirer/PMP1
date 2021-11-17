<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectCategories;
use Modules\Projects\Entities\ProjectCategory;
use App\Models\Tallents;

class ProController extends Controller
{
    public function index($user_name)
    {
        return view('frontend.profile');
    }

    public function allTalents($category_slug, $talent_slug) {

        $side_categories = ProjectCategories::all();

        $category = ProjectCategory::where('slug', $category_slug)->first()->name;


        $talent = Tallents::where('talent_slug', $talent_slug)->first()->title;

        return view('frontend.profiles_explorer', ['category' => $category, 'talent' => $talent, 'side_categories' => $side_categories]);
    }
}
