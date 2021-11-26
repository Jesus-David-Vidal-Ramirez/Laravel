<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyectos extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'titulo',
        'descripcion',
        'objetivo',
        'lineaDeInvestigacion',
        'investigador'
    ];
}
