<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\ViewException;

class RegimeController extends Controller
{  public function index(){
    
    $databaseName = session()->get('loginId');
    $result = DB::select("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$databaseName'");

    if (count($result) > 0) {

    $monday = DB::connection()->select("SELECT * FROM $databaseName.1_monday");
    $tuesday = DB::connection()->select("SELECT * FROM $databaseName.2_tuesday");
    $wednesday = DB::connection()->select("SELECT * FROM $databaseName.3_wednesday");
    $thursday = DB::connection()->select("SELECT * FROM $databaseName.4_thursday");
    $friday = DB::connection()->select("SELECT * FROM $databaseName.5_friday");
    $saturday = DB::connection()->select("SELECT * FROM $databaseName.6_saturday");
    $sunday = DB::connection()->select("SELECT * FROM $databaseName.7_sunday");

    $genre_sql= DB::connection()->select("SELECT genre, age, poids, taille, objectif, taux_activite FROM $databaseName.informations WHERE id = (SELECT MAX(id) FROM $databaseName.informations)");
    $genre = $genre_sql[0]->genre;
    $age = $genre_sql[0]->age;
    $poids = $genre_sql[0]->poids;
    $taille = $genre_sql[0]->taille;
    $objectif = $genre_sql[0]->objectif;
    $taux_activite = $genre_sql[0]->taux_activite;
    
    if($genre == 'homme'){ 
        $bmr = 88.362 + (13.397 * $poids) + (4.799 * $taille) - (5.677 * $age);
    }
    else if($genre=="femme"){
            $bmr = 447.593 + (9.247 * $poids) + (3.098 * $taille) - (4.330 * $age);
        }

        if ($taux_activite == 'sedentaire'){
            $activity_factor = 1.2;
        }
        else if($taux_activite == 'modere'){
            $activity_factor = 1.55;
        }
        else{
            $activity_factor = 1.7;
        }
            $bmr=$bmr * $activity_factor;

            if ($objectif == 'perte'){
                $total_calories=$bmr - ($bmr*0.2); 
            }
            else if($objectif == 'prise'){ $total_calories=$bmr + 500;}  
                else{
                    $total_calories=$bmr*1;
                }
   
        
    return view('frontend.regime',compact('monday','tuesday','wednesday','thursday','friday','saturday','sunday','total_calories'));
    } else {
        return view('sweetalert');
    }
}
}