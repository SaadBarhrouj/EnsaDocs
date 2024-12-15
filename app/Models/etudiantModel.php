<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\SerializableClosure\Serializers\Native;

class etudiantModel extends Model
{
    use HasFactory;
    protected $table = 'demande';
    protected $primaryKey = 'id';

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

    // public function niveau()
    // {
    //     return $this->belongsTo(niveau::class, 'id_niveau');
    // }
}
