<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id';
    protected $fillable = [
        'path',
    ];

    public function etudiant() {
        return $this->belongsTo(Etudiant::class, 'etudiant_id');
    }
}
