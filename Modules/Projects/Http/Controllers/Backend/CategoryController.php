<?php

namespace Modules\Projects\Http\Controllers\Backend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Projects\Entities\ProjectCategory;
use Modules\Projects\Entities\Tallents;
use DataTables;
use Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('projects::backend.category.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    // public function create()
    // {
    //     return view('projects::create');
    // }



    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = ProjectCategory::get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<a href="'.route('admin.project_category.edit',$data->id).'" class="btn btn-secondary btn-sm" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit</a>';
                        $button1 = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button.$button1;
                    })
                    ->addColumn('icon', function($data){
                        $img = '<img src="'.url('upload/projects',$data->icon).'" style="width: 50%">';
                     
                        return $img;
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

                    ->rawColumns(['action','icon','status'])
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
        if($request->file('icon'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->icon->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->icon->move(public_path('upload/projects'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        } 

        $add = new ProjectCategory();

        $add->name = $request->name;
        $add->description = $request->description;
        $add->user_id = Auth::id();
        $add->status = $request->status;
        $add->order = $request->order;
        
        $add->icon = $image_url;        
       
        $add->save();

        return redirect()->route('admin.project_category.index')->withFlashSuccess('Added Successfully');

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
        $category = ProjectCategory::where('id',$id)->first();

        return view('projects::backend.category.edit',[
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
        
        if($request->file('icon'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->icon->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->icon->move(public_path('upload/projects'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{            
            $detail = ProjectCategory::where('id',$request->hidden_id)->first();
            $image_url = $detail->icon;            
        } 

        $update = new ProjectCategory();

        $update->name = $request->name;
        $update->user_id = Auth::id();
        $update->description = $request->description;
        $update->status = $request->status;
        $update->order = $request->order;
        $update->icon = $image_url;

        ProjectCategory::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.project_category.index')->withFlashSuccess('Updated Successfully');  

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $tallents = Tallents::where('category_id',$id)->update(array('category_id' => null));

        ProjectCategory::where('id',$id)->delete();
        return back();
    }
}
