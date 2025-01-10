<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'apogee',
        'nom',
        'email',
        'cin',
        'cne',
        'date_naissance',
        'lieu_naissance',
        'filiere'
    ];

    public function documents() {
        return $this->hasMany(Etudiant::class, 'etudiant_id');
    }
    // public function niveau()
    // {
    //     return $this->belongsTo(niveau::class, 'id_niveau');
    // }
}
