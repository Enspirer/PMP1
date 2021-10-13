<?php

namespace Modules\SupportCenter\Http\Controllers\Backend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DataTables;
use Modules\SupportCenter\Entities\ContactUs;
use Modules\SupportCenter\Entities\SubscriptionEmail;
use App\Models\Auth\User; 


class EmailSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('supportcenter::backend.email_subscription.index');
    }

    public function getEmailSubscriptions(Request $request)
    {
        if($request->ajax())
        {
            $data = SubscriptionEmail::get();

            return DataTables::of($data)

                ->addColumn('action', function($data){
                    
                    // $button = '<a href="'.route('admin.articles.edit_article', $data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="far fa-edit"></i> Edit </a>';
                    $button = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>';
                    return $button;
                })

                ->addColumn('name', function($data){
                    if($data->user_id != null) {

                        $name = User::where('id', $data->user_id)->first();
                 
                        return $name->name;
                    }
                    else {

                        $name = '-';

                        return $name;
                    }
                    
                })

                ->rawColumns(['action','name'])
                ->make(true);
        }
        
        return back();
    }

    public function deleteEmailSubscription($id)
    {
        $subscription = SubscriptionEmail::where('id', $id)->delete();
    }


}
