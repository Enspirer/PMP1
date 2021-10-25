<?php

namespace Modules\Projects\Http\Controllers\Frontend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Projects\Entities\ProjectCategory;
use Modules\Projects\Entities\Tallents;
use Modules\Projects\Entities\ProjectLeeds;
use App\Models\Auth\User;
use Mail;  
use \App\Mail\ProjectLeedsMail;

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
        // dd($request);  

        if($request->get('g-recaptcha-response') == null){
            return back()->with('error', 'Error!.....Please fill reCAPTCHA!');
        }     
        
        if($request->file('file'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->file->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->file->move(public_path('upload/projects/project_leeds'), $preview_fileName);
            $image_url = $preview_fileName;
        }

        $add = new ProjectLeeds;

        $add->title=$request->title;
        $add->file=$request->file;
        $add->project_brief=$request->project_brief;
        $add->file=$image_url;
       

        if(!empty( auth()->user()->id) === true ){
            $add->user_id=auth()->user()->id;

            $user_details = User::where('id',auth()->user()->id)->first();
            $add->name=$user_details->first_name.' '.$user_details->last_name;
            $add->email=$user_details->email;

            $details = [
                'name' => $user_details->first_name.' '.$user_details->last_name
            ];            
            \Mail::to($user_details->email)->send(new ProjectLeedsMail($details));

        }else{
            $add->email=$request->email;
            $add->name=$request->name;

            $details = [
                'name' => $request->name
            ];
            \Mail::to($request->email)->send(new ProjectLeedsMail($details));
        }
        $add->status='Pending'; 

        $add->save();
        

        session()->flash('message','Thanks!');

        return back();
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

    public function submitData(Request $request){

    }


    public function talents() {

        $categories = ProjectCategories::all();


        return view('projects::talents', ['categories' => $categories]);
    }


    public function api_function(Request $request)
    {
       dd($request);
        $file = $request->file('fotografije');

        //Display File Name just for check or do a dd
        echo 'File Name: '.$file[0]->getClientOriginalName();


        //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
    }
}
