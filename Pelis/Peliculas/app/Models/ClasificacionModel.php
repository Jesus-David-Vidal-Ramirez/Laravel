<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasificacionModel extends Model
{
    use HasFactory;
    public listarClasificacion(){
    return $clasificacionData = array(
    0 => array(
        'ID' => '1',
        'Clasificacion' => '0',
        'Descripcion' => 'Recomendada para todos los p£blicos'
    ),
    1 => array(
        'ID' => '2',
        'Clasificacion' => '7',
        'Descripcion' => 'Recomendada para ni¤os a partir de los 7 a¤os'
    ),
    2 => array(
        'ID' => '3',
        'Clasificacion' => '13',
        'Descripcion' => 'Recomendada para ni¤os a partir de los 13 a¤os'
    ),
    3 => array(
        
    ),
    4 => array(
        
    ),
    5 => array(
        'ID' => '5',
        'Clasificacion' => '18',
        'Descripcion' => 'Recomendada para j¢venes a partir de los 18 a¤os'
    ),
    );
    }

    
}
