<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoriaModel extends Model
{
    use HasFactory;


    public function listarCategoria(){
        return $categoria = array(
    0 => array(
        'ID' => 's1',
        'Categoria' => 'Anime'
    ),
    1 => array(
        'ID' => 's2',
        'Categoria' => 'Drama'
    ),
    2 => array(
        'ID' => 's3',
        'Categoria' => 'Peliculas Independiente'
    ),
    3 => array(
        'ID' => 's4',
        'Categoria' => 'Trillers'
    ),
    4 => array(
        'ID' => 's5',
        'Categoria' => 'Peliculas de Terror'
    ),
    5 => array(
        'ID' => 's6',
        'Categoria' => 'Peliculas Latinoamericanas'
    ),
    6 => array(
        'ID' => 's7',
        'Categoria' => 'Deportes y Salud Fisica'
    ),
    7 => array(
        'ID' => 's8',
        'Categoria' => 'Peliculas Infantiles y Familiares'
    ),
    8 => array(
        'ID' => 's9',
        'Categoria' => 'Series'
    ),
    9 => array(
        'ID' => 's10',
        'Categoria' => 'Peliculas Romanticas'
    ),
    10 => array(
        'ID' => 's11',
        'Categoria' => 'Ciencia Ficcion y Fantasia'
    ),
    11 => array(
        'ID' => 's12',
        'Categoria' => 'Comedias'
    ),
    12 => array(
        'ID' => 's13',
        'Categoria' => 'Musica y Musicales'
    ),
    13 => array(
        'ID' => 's14',
        'Categoria' => 'Accion y Aventura'
    ),
    14 => array(
        'ID' => 's15',
        'Categoria' => 'Peliculas Premiadas'
    ),
    15 => array(
        'ID' => 's16',
        'Categoria' => 'Documentales'
    ),
    16 => array(
        'ID' => 's17',
        'Categoria' => 'Peliculas Internacionales'
    ),
);
    }

    


}
