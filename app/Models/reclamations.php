<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reclamations extends Model
{
    protected $table = 'reclamations';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nom',
        'code_apogee',
        'cin',
        'email',
        'reclamation',
        'date_envoi',
    ];

    // Ajoute des relations si nécessaire
    public function historique_demandes()
    {
        return $this->belongsTo(historique_demandes::class, 'id_demande');
    }
}
