<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $newqueues = NewQueue::all();

        return view('finishqueues');
    }
    public function create()
    {
        return view('queue');
    }
    public function store(Request $request)
    {
        $newqueue = new portal;
    }
    public function storeQueue(){
 
        $newqueue = new NewQueue();
 
        $newqueue->date = request('date');
        $newqueue->rep_name = request('rep_name');
        $newqueue->client_name = request('client_name');
        $newqueue->business_name = request('business_name');
        $newqueue->email = request('email');
        $newqueue->reason = request('reason');
        $newqueue->phone = request('phone');
        $newqueue->message = request('message');
        $newqueue->vulnerability = request('vulnerability');
 
        $newqueue->save();
 
        return redirect('/dashboard/queue-submitted');
 
    }
    // protected function create(array $data)
    // {
    //     return SubmitQueue::create([
    //         'date' => $data['date'],
    //         'rep-name' => $data['rep-name'],
    //         'client-name' => $data['client-name'],
    //         'business-name' => $data['business-name'],
    //         'email' => $data['email'],
    //         'reason' => $data['reason'],
    //         'phone' => $data['phone'],
    //         'message' => $data['message'],
    //         'vulnerability' => $data['vulnerability'],
            
    //     ]);
    // }
}
