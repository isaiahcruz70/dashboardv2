<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmergencyRequestController extends Controller
{
    public function store(Request $request){
        return view('queue')
        //  dd($request);
    }
}
