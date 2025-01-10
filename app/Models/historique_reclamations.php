<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class historique_reclamations extends Model
{

    protected $table = 'Historique_reclamations';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_demande',
        'nom',
        'apogee',
        'email',
        'date_reclamation',
        'type_demande',
        'reclamation',
        'response',
        'date_reponse',
    ];

     public function demande()
    {
        return $this->belongsTo(HistoriqueDemandes::class, 'id_demande');
    }
}
