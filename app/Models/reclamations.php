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

    public function demande()
    {
        return $this->belongsTo(HistoriqueDemandes::class, 'id_demande');
    }
}
