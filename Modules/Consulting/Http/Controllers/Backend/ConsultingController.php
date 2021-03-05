<?php

namespace Modules\Consulting\Http\Controllers\Backend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Consulting\Entities\ConsultingRequest;
use DataTables;

class ConsultingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('consulting::backend.consluting_request.index');
    }


    public function GetTableDetails()
    {
        $users = ConsultingRequest::select(['id', 'name', 'company_name', 'email', 'telephone','user_id','status','created_at']);
        return Datatables::of($users)
            ->editColumn('name',function ($row){
                return $row->name;
            })
            ->addColumn('action', function($row){
                $btn = '<a href="" class="edit btn btn-primary btn-sm"><i class="fa fa-eye"></i> View </a>';
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
        return view('consulting::create');
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
        return view('consulting::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('consulting::edit');
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
