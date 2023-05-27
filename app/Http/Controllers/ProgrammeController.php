<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{  public function index(){
    $databaseName = session()->get('loginId');
    $result = DB::select("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$databaseName'");

    if (count($result) > 0) {

    $genre_sql=DB::connection()->select("SELECT genre FROM $databaseName.informations WHERE id = (SELECT MAX(id) FROM $databaseName.informations) ");
    $objectif_sql=DB::connection()->select("SELECT objectif FROM $databaseName.informations WHERE id = (SELECT MAX(id) FROM $databaseName.informations)");
    
    $genre = $genre_sql[0]->genre;
    $objectif = $objectif_sql[0]->objectif;
    
    
    if($genre=="homme"){
        if($objectif=="perte"){
            $exercice=DB::connection()->select("SELECT * FROM programmes_sportifs.homme_perte");
        }
        else if($objectif=="maintien"){
            $exercice=DB::connection()->select("SELECT * FROM programmes_sportifs.homme_maintien");
        }
        else {
            $exercice=DB::connection()->select("SELECT * FROM programmes_sportifs.homme_prise");
        }
    }
    else{
        if($objectif=="perte"){
            $exercice=DB::connection()->select("SELECT * FROM  programmes_sportifs.femme_perte");
        }
        else if($objectif=="maintien"){
            $exercice=DB::connection()->select("SELECT * FROM  programmes_sportifs.femme_maintien");
        }
        else {
            $exercice=DB::connection()->select("SELECT * FROM programmes_sportifs.femme_prise");
        }
    }

    if($objectif=="maintien"){
        $objectif="weight maintain";
    }
    else if($objectif=="prise"){
        $objectif="weight gain";
    }
    else{
        $objectif="weight loss";
    }
 return view('frontend.programme',compact('exercice','objectif'));
    } else {
    return view('sweetalert');
    }
}
}

