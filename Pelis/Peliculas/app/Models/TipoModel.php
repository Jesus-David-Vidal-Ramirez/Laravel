<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoModel extends Model
{
    use HasFactory;
    $tipoData = array(
    0 => array(
        'ID' => '1',
        'Tipo' => 'TV show'
    ),
    1 => array(
        'ID' => '2',
        'Tipo' => 'Movie'
    ),
);

    
}
