<?php

namespace Modules\Blog\Http\Controllers\Backend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\BlogCategory;
use Modules\Blog\Entities\BlogPost;
use DataTables;
use Auth;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('blog::backend.blog_post.index');
    }

    public function GetTableDetails()
    {
        $category = BlogPost::select(['id', 'title', 'slug','category_id','user_id','created_at']);
        return Datatables::of($category)

            ->addColumn('action', function($row){
                $btn = '<a href="'.route("admin.blog_post.show",$row->id).'" class="edit btn btn-primary btn-sm" style="margin-right: 10px"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = '<a href="'.route("admin.blog_post.destroy",$row->id).'" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete </a>';
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
        $BlogCategory = BlogCategory::get();
        return view('blog::backend.blog_post.create',[
            'BlogCategory'=>$BlogCategory
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $BlogPost = new BlogPost();
        $BlogPost->title = $request->title;
        $BlogPost->slug = $request->slug;
        $BlogPost->category_id = $request->category;
        $BlogPost->user_id = Auth::id();
        $BlogPost->body = $request->body;
        $BlogPost->short_description = $request->short_description;
        if ($request->hasFile('feature_image')) {
            $file = $request->file('feature_image');
            $destinationPath = 'upload/blog/files/'; // upload path
            $file_parth = 'upload/blog/files/' . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $file_parth);
            $BlogPost->feature_image = "$file_parth";
        }
        $BlogPost->save();
        return redirect()->route('admin.blog_post.index')->withFlashSuccess('Post Is Saved Successfully');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $BlogCategory = BlogCategory::get();
        $blog_post = BlogPost::where('id',$id)->first();
        $blogPorstes = BlogPost::all();

        $getPostDetails =  json_decode($blog_post->reference_post_ids);

        $gerReferenceData = BlogPost::whereIn('id',$getPostDetails)->get();


        return view('blog::backend.blog_post.edit',[
            'blog_post'=> $blog_post,
            'BlogCategory'=>$BlogCategory,
            'blog_posts' => $blogPorstes,
            'get_references' => $gerReferenceData,
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
        $BlogPost = new BlogPost();
        $BlogPost->title = $request->title;
        $BlogPost->slug = $request->slug;
        $BlogPost->category_id = $request->category;
        $BlogPost->user_id = Auth::id();
        $BlogPost->body = $request->body;
        $BlogPost->short_description = $request->short_description;
        $BlogPost->reference_post_ids = json_encode($request->reference_post_id);
        if ($request->hasFile('feature_image')) {
            $file = $request->file('feature_image');
            $destinationPath = 'upload/blog/files/'; // upload path
            $file_parth = 'upload/blog/files/' . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $file_parth);
            $BlogPost->feature_image = "$file_parth";
        }
        else{
            $img= BlogPost::where('id',$id)->first();
            $BlogPost->feature_image =$img->feature_image;
        }
        $data=array(
            'title' => $BlogPost->title,
            'slug'=>$BlogPost->slug,
            'category_id'=>$BlogPost->category_id,
            'user_id'=>$BlogPost->user_id,
            'body'=>$BlogPost->body,
            'short_description'=>$BlogPost->short_description,
            'feature_image'=>$BlogPost->feature_image,
            'reference_post_ids'=>$BlogPost->reference_post_ids,
        );
        BlogPost::where('id',$id)->update($data);

        return redirect()->route('admin.blog_post.index')->withFlashSuccess('Post Is Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        BlogPost::where('id',$id)->delete();
        return back();
    }
}
