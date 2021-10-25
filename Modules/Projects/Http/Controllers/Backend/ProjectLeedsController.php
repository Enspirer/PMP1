<?php

namespace Modules\Projects\Http\Controllers\Backend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Projects\Entities\ProjectLeeds;
use DataTables;
use Auth;
use DB;
use App\Models\Auth\User;

class ProjectLeedsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('projects::backend.project_leeds.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('projects::create');
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
        return view('projects::show');
    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = ProjectLeeds::get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<a href="'.route('admin.project_leeds.edit',$data->id).'" class="btn btn-secondary btn-sm" style="margin-right: 10px"><i class="fas fa-info-circle"></i> Status</a>';
                        $button .= '<a href="'.url('upload/projects/project_leeds',$data->file).'" name="download" id="'.$data->id.'" class="download btn btn-success btn-sm ml-3" style="margin-right: 10px" target="_blank"><i class="fas fa-download"></i> Download </a>';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm ml-3"><i class="fas fa-trash"></i> Delete</button>';
                        return $button;
                    }) 
                    ->addColumn('user', function($data){
                        if($data->user_id == null){
                            $status = '<span class="badge badge-warning">Non-Registered</span>';
                        }
                        else{
                            $status = '<span class="badge badge-success">Registered</span>';
                        }   
                        return $status;
                    })     
                    ->addColumn('status', function($data){
                        if($data->status == 'Pending'){
                            $status = '<span class="badge badge-danger">Pending</span>';
                        }
                        else{
                            $status = '<span class="badge badge-success">Seen</span>';
                        }   
                        return $status;
                    })

                    ->rawColumns(['action','status','user'])
                    ->make(true);
        }
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $project_leeds = ProjectLeeds::where('id',$id)->first();

        return view('projects::backend.project_leeds.edit',[
            'project_leeds' => $project_leeds
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

        $update = new ProjectLeeds();
  
        $update->status='Seen'; 

        ProjectLeeds::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.project_leeds.index')->withFlashSuccess('Updated Successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        ProjectLeeds::where('id',$id)->delete();
        return back();
    }
}
