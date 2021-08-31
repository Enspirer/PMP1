<?php

namespace Modules\Shop\Http\Controllers\Backend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Shop\Entities\EshopProduct;
use DataTables;
use Auth;

class EshopProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('shop::backend.products.index');
    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = EshopProduct::get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<a href="'.route('admin.eshop_products.edit',$data->id).'" class="btn btn-secondary btn-sm" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit</a>';
                        $button1 = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button.$button1;
                    })
                    ->addColumn('image', function($data){
                        $img = '<img src="'.url('upload/shop',$data->feature_image).'" style="width: 70%">';
                     
                        return $img;
                    })
                    ->addColumn('demo_link', function($data){
                        if($data->demo_link_available == '1'){
                            $demo_link_available = '<span class="badge badge-success">Available</span>';
                        }
                        else{
                            $demo_link_available = '<span class="badge badge-danger">Not Aveailable</span>';
                        }   
                        return $demo_link_available;
                    })
                    ->addColumn('customization', function($data){
                        if($data->customization_available == '1'){
                            $customization_available = '<span class="badge badge-success">Available</span>';
                        }
                        else{
                            $customization_available = '<span class="badge badge-danger">Not Aveailable</span>';
                        }   
                        return $customization_available;
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
                    ->addColumn('is_feature', function($data){
                        if($data->is_feature == 'Enabled'){
                            $is_feature = '<span class="badge badge-success">Enabled</span>';
                        }
                        else{
                            $is_feature = '<span class="badge badge-danger">Disabled</span>';
                        }   
                        return $is_feature;
                    })

                    ->rawColumns(['action','image','demo_link','customization','status','is_feature'])
                    ->make(true);
        }
        return back();
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('shop::backend.products.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        // dd($request);

        if($request->file('feature_image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->feature_image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->feature_image->move(public_path('upload/shop'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        } 

        if($request->file('images'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->images->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->images->move(public_path('upload/shop'), $preview_fileName1);
            $image_url1 = $preview_fileName1;
        }else{
            $image_url1 = null;
        } 

        $add = new EshopProduct();

        $add->product_name = $request->product_name;
        $add->category_id = $request->category;
        $add->user_id = Auth::id();
        $add->description = $request->description;
        $add->company_name = $request->company_name;
        $add->price = $request->price;
        $add->product_details = $request->product_details;
        $add->demo_link_available = $request->demo_link_availability;
        $add->demo_link = $request->demo_link;
        $add->customization_available = $request->customization_availability;
        $add->is_feature = $request->is_feature;
        $add->status = $request->status;
        $add->order = $request->order;
        $add->feature_image = $image_url;
        $add->images = $image_url1;
        
        // if ($request->hasFile('feature_image')) {
        //     $file = $request->file('feature_image');
        //     $destinationPath = 'upload/shop/'; // upload path
        //     $file_path = 'upload/shop/'.date('YmdHis').'_'.rand(1000,10000)."." .$file->getClientOriginalExtension();
        //     $file->move($destinationPath, $file_path);

        //     $add->feature_image = "$file_path";
        // }

        // if ($request->hasFile('images')) {
        //     $file1 = $request->file('images');
        //     $destinationPath1 = 'upload/shop/'; // upload path
        //     $file_path1 = 'upload/shop/'.date('YmdHis').'_'.rand(1000,10000)."." .$file1->getClientOriginalExtension();
        //     $file1->move($destinationPath1, $file_path1);

        //     $add->images = "$file_path1";
        // }

        $add->save();
        return redirect()->route('admin.eshop_products.index')->withFlashSuccess('Added Successfully');

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    // public function show($id)
    // {
    //     return view('shop::show');
    // }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $eshop = EshopProduct::where('id',$id)->first();

        return view('shop::backend.products.edit',[
            'eshop' => $eshop
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
        if($request->file('feature_image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->feature_image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->feature_image->move(public_path('upload/shop'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{            
            $detail = EshopProduct::where('id',$request->hidden_id)->first();
            $image_url = $detail->feature_image;            
        } 

        if($request->file('images'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->images->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->images->move(public_path('upload/shop'), $preview_fileName1);
            $image_url1 = $preview_fileName1;
        }else{            
            $detail = EshopProduct::where('id',$request->hidden_id)->first();
            $image_url1 = $detail->images;            
        } 

        $update = new EshopProduct();

        $update->product_name = $request->product_name;
        $update->category_id = $request->category;
        $update->user_id = Auth::id();
        $update->description = $request->description;
        $update->company_name = $request->company_name;
        $update->price = $request->price;
        $update->product_details = $request->product_details;
        $update->demo_link_available = $request->demo_link_availability;
        $update->demo_link = $request->demo_link;
        $update->customization_available = $request->customization_availability;
        $update->is_feature = $request->is_feature;
        $update->status = $request->status;
        $update->order = $request->order;
        $update->feature_image = $image_url;
        $update->images = $image_url1;
        
        

        EshopProduct::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.eshop_products.index')->withFlashSuccess('Updated Successfully');  


    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        EshopProduct::where('id',$id)->delete();
        return back();
    }
}
