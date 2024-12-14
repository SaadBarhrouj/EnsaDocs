<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class historique_demandes extends Model
{
    use HasFactory;
    protected $table = 'historique_demandes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'type_demande',
        'date_reponse',

    ];

    public function etudiant()
    {
        return $this->belongsTo(etudiantModel::class, 'id_etudiant');
    }

    public function document()
    {
        return $this->belongsTo(document::class, 'id_type');
    }

    public function demande()
     {
       return $this->belongsTo(demande::class, 'date_demande');
    }

}
