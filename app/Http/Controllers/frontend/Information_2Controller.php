<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Information_2Controller extends Controller
{/*
    public function index(){
        return view('frontend.information_2');
    }*/
    public function index(Request $request){
       $data=request()->all();
       return view('frontend.information_2')->with('data', $data);
    }
}
