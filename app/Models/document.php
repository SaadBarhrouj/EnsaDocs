<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class document extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'path',
    ];
}
