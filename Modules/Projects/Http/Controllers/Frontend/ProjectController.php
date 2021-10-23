<?php

namespace Modules\Projects\Http\Controllers\Frontend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Projects\Entities\ProjectCategory;
use Modules\Projects\Entities\Tallents;

use App\Models\ProjectCategories;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index($category, $search_keyword, $county, $bids_range, $sort_by)
    {
        return view('projects::exploere');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('projects::create');
    }


    public function apply_project($project_id)
    {
        return view('projects::apply_project');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {

        return view('projects::project_page');
    }


    public static function temproydummpy($id)
    {
        $output = [];
        if ($id == 1)
        {
            $output = [
                'project_name' => 'ERP Solutions',
                'description' => ''

            ];

        }
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('projects::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    public function postAJob($category_slug, $talent_slug) {

        $side_categories = ProjectCategories::all();

        $category = ProjectCategory::where('slug', $category_slug)->first()->name;

        $talent = Tallents::where('talent_slug', $talent_slug)->first()->title;

        return view('projects::post_a_job', ['category' => $category, 'talent' => $talent, 'side_categories' => $side_categories]);
    }

    public function talents() {

        $categories = ProjectCategories::all();


        return view('projects::talents', ['categories' => $categories]);
    }
}
