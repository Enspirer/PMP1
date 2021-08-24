<?php

namespace Modules\SupportCenter\Http\Controllers\Backend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DataTables;
use Modules\SupportCenter\Entities\ContactUs;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('supportcenter::backend.contact_us.index');
    }


    public function GetTableDetails()
    {
        $users = ContactUs::select(['id', 'first_name', 'last_name', 'email_address', 'message','created_at']);
        return Datatables::of($users)
            ->editColumn('name',function ($row){
                return $row->first_name.' '.$row->last_name;
            })
            ->addColumn('action', function($row){
                $btn = '<a href="'.route("admin.contact_us.show",$row->id).'" class="edit btn btn-primary btn-sm"><i class="fa fa-eye"></i> View </a>';
                return $btn;
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
        return view('supportcenter::create');
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
        $contactUsDetails = ContactUs::where('id',$id)
            ->first();

        return view('supportcenter::backend.contact_us.show',[
            'contactUsDetails' => $contactUsDetails
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('supportcenter::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request)
    {
        ContactUs::where('id',$request->id)->update([
            'status' => 'Unread'
        ]);
       return back();
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
