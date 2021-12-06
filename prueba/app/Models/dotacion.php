<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dotacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuario',
        'identificacion',
        'camisa',
        'pantalon',
        'botas',
        'fecha',
    ];
}
