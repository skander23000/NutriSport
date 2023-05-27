<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//  A SUPPRIMER CETTE PAGE NE SERT NORMALEMENT A RIEN 

class Userinfo extends Model
{
    use HasFactory;
    public $timestamps=false;
    
    protected $table = 'informations';

    protected $fillable = [
        'genre',
        'age',
        'poids',
        'taille',
        'objectif',
        'taux_activite',
        
    ];
}
