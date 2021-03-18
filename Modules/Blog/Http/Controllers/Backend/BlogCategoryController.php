<?php

namespace Modules\Blog\Http\Controllers\Backend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\BlogCategory;
use DataTables;


class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('blog::backend.blog_category.index');
    }

    public function GetTableDetails()
    {
        $category = BlogCategory::select(['id', 'name', 'description','status','created_at']);
        return Datatables::of($category)
            ->editColumn('status',function ($row){
                if ($row->status == 1)
                {
                    return 'enabled';
                }else{
                    return 'disabled';
                }
            })

            ->addColumn('action', function($row){
                $btn = '<a href="'.route("admin.blog_category.show",$row->id).'" class="edit btn btn-primary btn-sm" style="margin-right: 10px"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = '<a href="'.route("admin.blog_category.destroy",$row->id).'" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete </a>';
                return  $btn.$btn2;
            })
            ->rawColumns(['action'])
            ->make();
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('blog::backend.blog_category.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $blogCategory = new BlogCategory;
        $blogCategory->name = $request->name;
        $blogCategory->description = $request->description;
        $blogCategory->status = $request->status;
        $blogCategory->save();

        return redirect()->route('admin.blog_category.index')->withFlashSuccess('Category Is Saved Successfully');

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $blog_category = BlogCategory::where('id',$id)->first();
        return view('blog::backend.blog_category.edit',[
            'blog_category'=> $blog_category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('blog::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request)
    {
        $id=$request->id;
        $blogCategory = new BlogCategory;
        $blogCategory->name = $request->name;
        $blogCategory->description = $request->description;
        $blogCategory->status = $request->status;

        $data=array(
            'name' => $blogCategory->name,
            'description'=>$blogCategory->description,
            'status'=>$blogCategory->status,
        );
        BlogCategory::where('id',$id)->update($data);

        return redirect()->route('admin.blog_category.index')->withFlashSuccess('Category Is Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        BlogCategory::where('id',$id)->delete();
        return back();
    }
}
