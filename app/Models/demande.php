<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class demande extends Model
{
    use HasFactory;

    protected $table = 'demande';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nom',
        'apogee',
        'cin',
        'email',
        'type_demande',
        'date_demande',
    ];

    public function etudiant()
    {
        return $this->belongsTo(etudiantModel::class, 'id_etudiant');
    }

    public function document()
     {
          return $this->belongsTo(document::class, 'id_type');
     }
}
