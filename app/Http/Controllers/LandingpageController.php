<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    //index
    public function index(Request $request){
        $data =[
        'title' => 'Welcome to Alcor Mice'
        ];

        return view('landingpage');
    }
}
