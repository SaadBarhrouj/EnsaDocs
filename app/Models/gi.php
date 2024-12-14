<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gi extends Model
{
    protected $table = 'gi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'prog_avancee',
        'electro_numerique',
        'theorie_graphes',
        'theorie_langages',
        'genie_logiciel',
        'management',
        'annee_universitaire',


    ];


     public function etudiant()
        {
            return $this->belongsTo(etudiantModel::class, 'id_etudiant');
        }
}
