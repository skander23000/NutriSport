<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(Request $request){
        /*$databaseName = session()->get('loginId');
        $databaseExists = in_array($databaseName, DB::connection()->getDoctrineSchemaManager()->listDatabases());
        if($databaseExists){
        return redirect('information_exists');
        }else*/
        return view('frontend.information');
    }
}
