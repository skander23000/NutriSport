<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class Usermenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $myValue = session()->get('my_key');
        $databaseName = $myValue;
        
        if (!Schema::hasDatabase($databaseName)) {
            // Si la base de données n'existe pas, on la crée
            Schema::create($databaseName, function (Blueprint $table) {
                // Ajouter des colonnes ici
            });
        } else {
            // Si la base de données existe déjà, on peut effectuer d'autres actions ici
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
