<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VulnController extends Controller
{
    public function store(Request $vuln){
        return view('vuln');
    }
}
