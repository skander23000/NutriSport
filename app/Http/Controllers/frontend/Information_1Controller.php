<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Information_1Controller extends Controller
{
    public function index(Request $request){
        $data=request()->all();
        return view('frontend.information_1')->with('data', $data);
     }
}
