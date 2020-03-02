<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubmitQueue;
use DB;
class SubmitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('queue');
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'rep-name' => 'required',
            'client-name' => 'required',
            'business-name' => 'required',
            'email' => 'required',
            'reason' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'vulnerability' => '',
        ]);
        $queue = new SubmitController([
          'date' => $request->get('date'),  
          'rep-name' => $request->get('rep-name'),  
          'client-name' => $request->get('client-name'),  
          'business-name' => $request->get('business-name'),  
          'email' => $request->get('email'),  
          'reason' => $request->get('reason'),  
          'phone' => $request->get('phone'),  
          'message' => $request->get('message'),  
          'vulnerability' => $request->get('vulnerability')  
        ]);
        return view('queue');
    
    }
    public function submit()
    {
        $queue = DB::table('queues')->post();

        return view('/dashboard/request-queue',
        [
            'queue' => $queue
        ]);
    }
    public function request()
    {
        return view('queue');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function create(array $data)
    {
        return SubmitQueue::create([
            'date' => $data['date'],
            'rep-name' => $data['rep-name'],
            'client-name' => $data['client-name'],
            'business-name' => $data['business-name'],
            'email' => $data['email'],
            'reason' => $data['reason'],
            'phone' => $data['phone'],
            'message' => $data['message'],
            'vulnerability' => $data['vulnerability'],
            
        ]);
    }
    // public function create() 
    // {
    //     return view('Submit.queue');
    // }
      
}