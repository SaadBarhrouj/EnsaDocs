<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class historique_reclamations extends Model
{

    protected $table = 'administrateur';
    protected $primaryKey = 'id';
    protected $fillable = [
        'reclamation',
        'response',
        'date_response',
        
    ];


     public function historique_demandes()
    {
        return $this->belongsTo(historique_demandes::class, 'id_demande');
    }
}
