<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class administrateur extends Model
{
    use HasFactory;
    protected $table = 'administrateur';
    protected $fillable = [
        'nom',
        'password',
        
    ];
}
