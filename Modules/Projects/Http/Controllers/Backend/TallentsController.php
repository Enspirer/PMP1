<?php

namespace Modules\Projects\Http\Controllers\Backend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Projects\Entities\ProjectCategory;
use Modules\Projects\Entities\Tallents;
use DataTables;
use Auth;
use DB;

class TallentsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('projects::backend.tallents.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $category = ProjectCategory::where('status','=','Enabled')->get();

        return view('projects::backend.tallents.create',[
            'category' => $category
        ]);
    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Tallents::get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<a href="'.route('admin.tallents.edit',$data->id).'" class="btn btn-secondary btn-sm" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit</a>';
                        $button1 = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button.$button1;
                    })
                    ->addColumn('image', function($data){
                        $img = '<img src="'.url('upload/projects/tallents',$data->image).'" style="width: 70%">';                     
                        return $img;
                    })     
                    ->addColumn('category', function($data){

                        if($data->category_id == null){
                            $category = '<span class="badge badge-danger">Not Set</span>';
                        }elseif(ProjectCategory::where('id',$data->category_id)->first()->status == 'Disabled'){
                            $category = '<span class="badge badge-danger">Category Disabled</span>';     
                        }
                        else{
                            $category = ProjectCategory::where('id',$data->category_id)->first()->name;     
                        }

                        return $category;
                    })             
                    ->addColumn('status', function($data){
                        if($data->status == 'Enabled'){
                            $status = '<span class="badge badge-success">Enabled</span>';
                        }
                        else{
                            $status = '<span class="badge badge-danger">Disabled</span>';
                        }   
                        return $status;
                    })

                    ->rawColumns(['action','image','category','status'])
                    ->make(true);
        }
        return back();
    }



    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        if($request->file('image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('upload/projects/tallents'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        } 

        $add = new Tallents();

        $add->title = $request->title;
        $add->description = $request->description;
        $add->category_id = $request->category;
        $add->user_id = Auth::id();
        $add->status = $request->status;
        $add->order = $request->order;        
        $add->image = $image_url;        
       
        $add->save();

        return redirect()->route('admin.tallents.index')->withFlashSuccess('Added Successfully');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('projects::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $tallents = Tallents::where('id',$id)->first();
        $category = ProjectCategory::where('status','=','Enabled')->get();

        return view('projects::backend.tallents.edit',[
            'tallents' => $tallents,
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request)
    {
        if($request->file('image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('upload/projects/tallents'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{            
            $detail = Tallents::where('id',$request->hidden_id)->first();
            $image_url = $detail->image;            
        } 

        $update = new Tallents();

        $update->title = $request->title;
        $update->description = $request->description;
        $update->category_id = $request->category;
        $update->user_id = Auth::id();
        $update->status = $request->status;
        $update->order = $request->order;        
        $update->image = $image_url;   

        Tallents::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.tallents.index')->withFlashSuccess('Updated Successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Tallents::where('id',$id)->delete();
        return back();
    }
}
