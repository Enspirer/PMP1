<?php

namespace Modules\SupportCenter\Http\Controllers\Frontend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\SupportCenter\Entities\ContactUs;
use Mail;
use App\Mail\Frontend\Contact\SendContact;
class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('supportcenter::frontend.contact_us');
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
        $contactUsDetails = new ContactUs;
        $contactUsDetails->first_name = $request->first_name;
        $contactUsDetails->last_name = $request->last_name;
        $contactUsDetails->email_address = $request->email;
        $contactUsDetails->message = $request->message;
        $contactUsDetails->save();


        Mail::send(new SendContact($request));



        return back()->withFlashSuccess(__('alerts.frontend.contact.sent'));;
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('supportcenter::show');
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
