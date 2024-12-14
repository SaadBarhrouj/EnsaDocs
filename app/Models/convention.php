<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class convention extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'nom_entreprise',
        'duree_stage',
        'ville_stage',
        'annee_universitaire',

    ];

    public function etudiant()
    {
        return $this->belongsTo(etudiantModel::class, 'id_etudiant');
    }
}
