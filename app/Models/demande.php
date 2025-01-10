<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Demande extends Model
{
    use HasFactory;

    protected $table = 'demande';
    protected $primaryKey = 'id';
    protected $fillable = [
        'type_demande',
        'date_demande',
        'entreprise',
        'annee_universitaire',
        'filiere',
        'cycle',
        'decision',
        'periode',
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'etudiant_id');
    }

    public function document()
    {
        return $this->belongsTo(document::class, 'id_type');
    }

     
}
