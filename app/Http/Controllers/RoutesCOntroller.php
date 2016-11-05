<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RoutesCOntroller extends Controller
{
    public function homepage(){
        return view('homepage');
    }
}
