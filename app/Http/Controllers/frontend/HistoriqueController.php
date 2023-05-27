<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoriqueController extends Controller
{
    
    public function index(){
        $databaseName = session()->get('loginId');
        $result = DB::select("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$databaseName'");
    
        if (count($result) > 0) {
        $data = DB::connection()->select("SELECT * FROM $databaseName.informations");
        //$poids=DB::connection()->select("SELECT poids FROM $databaseName.informations");
        //$created_at=DB::connection()->select("SELECT created_at FROM $databaseName.informations");

        
        $poids = []; // tableau pour l'axe Y (le poids)
        $created_at = []; // tableau pour l'axe Y (le poids)

        foreach ($data as $datum) {
            array_push($poids, $datum->poids);
            array_push($created_at, $datum->created_at);
        }
        
        } else {
        return view('sweetalert');
        }
         return view('frontend.historique', [
            'poids' => $poids,
            'created_at' => $created_at,
        ]);
    }
}
