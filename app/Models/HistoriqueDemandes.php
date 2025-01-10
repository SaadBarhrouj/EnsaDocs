<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HistoriqueDemandes extends Model
{
    use HasFactory;
    protected $table = 'HistoriqueDemandes';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nom',
        'apogee',
        'email',
        'type_demande',
        'decision',
        'date_reponse',
        'etudiant_id',
        'date_demande',

    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'etudiant_id');
    }

    public function document()
    {
        return $this->belongsTo(document::class, 'id_type');
    }

    public function demande()
     {
       return $this->belongsTo(Demande::class, 'date_demande');
    }

}
