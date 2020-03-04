<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queue;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function home()
    {
        return view('dashboard');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'rep_name' => 'required',
            'client_name' => 'required',
            'business_name' => 'required',
            'email' => 'required',
            'reason' => 'required',
            'phone' => 'required',
            'message' => 'required',
            
        ]);
        print_r($request->input());
        $submit = new Queue();   
        $submit->rep_name = $request->rep_name;   
        $submit->client_name = $request->client_name;   
        $submit->business_name = $request->business_name;   
        $submit->email = $request->email;   
        $submit->reason = $request->reason;   
        $submit->phone = $request->phone;   
        $submit->message = $request->message;   
        // $submit->vulnerability = $request->vulnerability;
        echo $submit->save();
        return redirect('/dashboard/finish-queues')->with('successMsg', 'Form Submitted'); 
    }
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $submit = DB::table('queues')->get();
        return view('finishqueues', ['queues' => $submit]);
    }
    public function request()
    {
        return redirect('form');
    }
}