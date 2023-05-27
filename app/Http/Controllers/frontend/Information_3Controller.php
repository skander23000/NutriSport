<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Config;
class Information_3Controller extends Controller
{
    public function index(Request $request){
        $data=request()->all();
        return view('frontend.information_3')->with('data', $data);
     }

    public function store(Request $request){



$databaseName = session()->get('loginId'); 

$genre_sql= DB::connection()->select("SELECT id FROM custom_auth.users WHERE name = '$databaseName'");
$user_id = $genre_sql[0]->id;

DB::statement("CREATE DATABASE IF NOT EXISTS $databaseName");

config(['database.connections.mysql.database' => $databaseName]);
DB::reconnect();

DB::statement("
    CREATE TABLE IF NOT EXISTS $databaseName.informations (
        id INT AUTO_INCREMENT PRIMARY KEY,
        genre TEXT,
        age INTEGER,
        poids INTEGER,
        taille INTEGER,
        objectif TEXT,
        taux_activite TEXT,
        created_at DATE,
        user_id BIGINT UNSIGNED,
        FOREIGN KEY (user_id) REFERENCES custom_auth.users(id)
    )
");


            $date = date('Y-m-d');
            DB::table('informations')->insert([  
            'genre' => $request->input('genre'),
            'age' => $request->input('age'),
            'poids' => $request->input('poids'),
            'taille'=> $request->input('taille'),
            'objectif'=> $request->input('objectif'),
            'taux_activite'=> $request->input('taux_activite'),
            'created_at' => $date,
            'user_id'=> $user_id
        ]);
        // EXECUTER LE SCRIPT PYTHON
        shell_exec("python script.py $databaseName");
        
        $tablesExist = true;
        foreach(['1_monday', '2_tuesday', '3_wednesday', '4_thursday', '5_friday', '6_saturday', '7_sunday'] as $table) {
            $query = "SELECT COUNT(*) as count FROM information_schema.tables WHERE table_schema = '$databaseName' AND table_name = '$table'";
            $result = DB::statement($query);
            if ($result === false) {
                $tablesExist = false;
                break;
            }
        }   
        
        if ($tablesExist) {
            shell_exec("python script.py $databaseName");
        }
      
$days = ['1_monday', '2_tuesday', '3_wednesday', '4_thursday', '5_friday', '6_saturday', '7_sunday'];
foreach ($days as $day) {
    DB::statement("ALTER TABLE $day MODIFY user_id BIGINT UNSIGNED");
    DB::statement("ALTER TABLE $day ADD FOREIGN KEY (user_id) REFERENCES custom_auth.users(id)");
    DB::statement("ALTER TABLE $day MODIFY Food VARCHAR(134) CHARACTER SET utf8 COLLATE utf8_general_ci");
    DB::statement("ALTER TABLE $day ADD FOREIGN KEY (Food) REFERENCES main_test.nutrition00(name)");
}
        return redirect('/regime');
}
}

