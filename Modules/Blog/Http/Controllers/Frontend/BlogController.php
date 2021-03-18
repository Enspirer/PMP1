<?php

namespace Modules\Blog\Http\Controllers\Frontend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\BlogCategory;
use Modules\Blog\Entities\BlogPost;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index($category_name)
    {
        $blogCategory = BlogCategory::where('status', 1)->get();

        if ($category_name == 'all')
        {
            $blogDetail = BlogPost::all();
        }else{
            $get_blog_category_selected = BlogCategory::where('name', $category_name)->first();
            $blogDetail = BlogPost::where('category_id',$get_blog_category_selected->id)
                ->get();


        }

        return view('blog::frontend.blog',[
            'blog_category' => $blogCategory,
            'category_name' => $category_name,
            'blog_posts' => $blogDetail
        ]);
    }
    public function blog_post()
    {
        return view('blog::frontend.blog_post');
    }


    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('blog::create');
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
        return view('blog::show');
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
}
