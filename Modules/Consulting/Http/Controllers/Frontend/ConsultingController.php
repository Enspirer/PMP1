<?php

namespace Modules\Consulting\Http\Controllers\Frontend;

use foo\bar;
use function GuzzleHttp\Psr7\_parse_request_uri;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Consulting\Entities\ConsultingRequest;
use Mail;

class ConsultingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('consulting::index');
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
        $consulting = new ConsultingRequest;

        $consulting->name = $request->name;
        $consulting->company_name = $request->company_name;
        $consulting->email = $request->email;

        if (auth()->user()){

        }else{

        }

        $consulting->telephone = $request->telephone;
        $consulting->project_brief = $request->project_brief;
        $consulting->appointment_date_time = $request->appoiment_date_time;
        $consulting->additional_notes = $request->additional_note;
        $consulting->save();

        // Mail::to('Cloudways@Cloudways.com')->send(new SendMailable($name));
        // Mail::send(new ConsultingRequest($request));
        
        return back();
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
