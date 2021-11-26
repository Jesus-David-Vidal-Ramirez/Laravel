<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeliculaModel extends Model
{
    use HasFactory;
    
    public function Pelicula(){
    return $Peliculas = array(
            0 => array(
                'ID' => '1',
                'Titulo' => 'One Piece',
                'A¤o de Lanzamiento' => '1/01/1999',
                'Clasifiacion' => '13',
                'Duracion' => '',
                'Temporadas' => '4',
                'Categoria' => 'Anime',
                'Tipo' => 'TV show'
            ),
            1 => array(
                'ID' => '2',
                'Titulo' => 'Invacion en las Alturas',
                'A¤o de Lanzamiento' => '1/01/2021',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '1',
                'Categoria' => 'Anime',
                'Tipo' => 'TV show'
            ),
            2 => array(
                'ID' => '3',
                'Titulo' => 'Naruto',
                'A¤o de Lanzamiento' => '1/01/2002',
                'Clasifiacion' => '13',
                'Duracion' => '',
                'Temporadas' => '9',
                'Categoria' => 'Anime',
                'Tipo' => 'TV show'
            ),
            3 => array(
                'ID' => '4',
                'Titulo' => 'Akame ga Kill',
                'A¤o de Lanzamiento' => '1/01/2014',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '1',
                'Categoria' => 'Anime',
                'Tipo' => 'TV show'
            ),
            4 => array(
                'ID' => '5',
                'Titulo' => 'Psycho Pass',
                'A¤o de Lanzamiento' => '1/01/2012',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '2',
                'Categoria' => 'Anime',
                'Tipo' => 'TV show'
            ),
            5 => array(
                'ID' => '6',
                'Titulo' => 'Neon Genesis Evangelion',
                'A¤o de Lanzamiento' => '1/01/1995',
                'Clasifiacion' => '13',
                'Duracion' => '',
                'Temporadas' => '1',
                'Categoria' => 'Anime',
                'Tipo' => 'TV show'
            ),
            6 => array(
                'ID' => '7',
                'Titulo' => 'Sword Art Online',
                'A¤o de Lanzamiento' => '1/01/2012',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '3',
                'Categoria' => 'Anime',
                'Tipo' => 'TV show'
            ),
            7 => array(
                'ID' => '8',
                'Titulo' => 'A Silence Voice',
                'A¤o de Lanzamiento' => '1/01/2016',
                'Clasifiacion' => '13',
                'Duracion' => '2:09:00',
                'Temporadas' => '',
                'Categoria' => 'Anime',
                'Tipo' => 'Movie'
            ),
            8 => array(
                'ID' => '9',
                'Titulo' => 'Violet Evergarden',
                'A¤o de Lanzamiento' => '1/01/2018',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '1',
                'Categoria' => 'Anime',
                'Tipo' => 'TV show'
            ),
            9 => array(
                'ID' => '10',
                'Titulo' => 'Shokugueki no Souma',
                'A¤o de Lanzamiento' => '1/01/2015',
                'Clasifiacion' => '13',
                'Duracion' => '',
                'Temporadas' => '2',
                'Categoria' => 'Anime',
                'Tipo' => 'TV show'
            ),
            10 => array(
                'ID' => '11',
                'Titulo' => 'The Irregular at magic high School',
                'A¤o de Lanzamiento' => '1/01/2014',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '1',
                'Categoria' => 'Anime',
                'Tipo' => 'TV show'
            ),
            11 => array(
                'ID' => '12',
                'Titulo' => 'The Beginning',
                'A¤o de Lanzamiento' => '1/01/2018',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '1',
                'Categoria' => 'Anime',
                'Tipo' => 'TV show'
            ),
            12 => array(
                'ID' => '13',
                'Titulo' => 'Bleach',
                'A¤o de Lanzamiento' => '1/01/2004',
                'Clasifiacion' => '13',
                'Duracion' => '',
                'Temporadas' => '5',
                'Categoria' => 'Anime',
                'Tipo' => 'TV show'
            ),
            13 => array(
                'ID' => '14',
                'Titulo' => 'Erased',
                'A¤o de Lanzamiento' => '1/01/2016',
                'Clasifiacion' => '13',
                'Duracion' => '',
                'Temporadas' => '1',
                'Categoria' => 'Anime',
                'Tipo' => 'TV show'
            ),
            14 => array(
                'ID' => '15',
                'Titulo' => 'Full Metal Alquimist Brotherhood',
                'A¤o de Lanzamiento' => '1/01/2009',
                'Clasifiacion' => '13',
                'Duracion' => '',
                'Temporadas' => '5',
                'Categoria' => 'Anime',
                'Tipo' => 'TV show'
            ),
            15 => array(
                'ID' => '16',
                'Titulo' => 'Crepusculo',
                'A¤o de Lanzamiento' => '1/01/2010',
                'Clasifiacion' => '16',
                'Duracion' => '2:03:00',
                'Temporadas' => '',
                'Categoria' => 'Drama',
                'Tipo' => 'Movie'
            ),
            16 => array(
                'ID' => '17',
                'Titulo' => 'El Pianista',
                'A¤o de Lanzamiento' => '1/01/2002',
                'Clasifiacion' => '16',
                'Duracion' => '2:29:00',
                'Temporadas' => '',
                'Categoria' => 'Drama',
                'Tipo' => 'Movie'
            ),
            17 => array(
                'ID' => '18',
                'Titulo' => 'Forrest Gump',
                'A¤o de Lanzamiento' => '1/01/1994',
                'Clasifiacion' => '16',
                'Duracion' => '2:23:00',
                'Temporadas' => '',
                'Categoria' => 'Drama',
                'Tipo' => 'Movie'
            ),
            18 => array(
                'ID' => '19',
                'Titulo' => 'Perfume de Mujer',
                'A¤o de Lanzamiento' => '1/01/1992',
                'Clasifiacion' => '16',
                'Duracion' => '2:36:00',
                'Temporadas' => '',
                'Categoria' => 'Drama',
                'Tipo' => 'Movie'
            ),
            19 => array(
                'ID' => '20',
                'Titulo' => 'Musica Amigos y Fiesta',
                'A¤o de Lanzamiento' => '1/01/2015',
                'Clasifiacion' => '16',
                'Duracion' => '1:35:00',
                'Temporadas' => '',
                'Categoria' => 'Drama',
                'Tipo' => 'Movie'
            ),
            20 => array(
                'ID' => '21',
                'Titulo' => 'El Juez',
                'A¤o de Lanzamiento' => '1/01/2014',
                'Clasifiacion' => '16',
                'Duracion' => '2:21:00',
                'Temporadas' => '',
                'Categoria' => 'Drama',
                'Tipo' => 'Movie'
            ),
            21 => array(
                'ID' => '22',
                'Titulo' => 'Los Juegos del Hambre',
                'A¤o de Lanzamiento' => '1/01/2013',
                'Clasifiacion' => '13',
                'Duracion' => '2:26:00',
                'Temporadas' => '',
                'Categoria' => 'Drama',
                'Tipo' => 'Movie'
            ),
            22 => array(
                'ID' => '23',
                'Titulo' => 'Inframundo',
                'A¤o de Lanzamiento' => '1/01/2012',
                'Clasifiacion' => '16',
                'Duracion' => '1:28:00',
                'Temporadas' => '',
                'Categoria' => 'Drama',
                'Tipo' => 'Movie'
            ),
            23 => array(
                'ID' => '24',
                'Titulo' => 'Dracula: la historia jamas contada',
                'A¤o de Lanzamiento' => '1/01/2014',
                'Clasifiacion' => '16',
                'Duracion' => '1:32:00',
                'Temporadas' => '',
                'Categoria' => 'Drama',
                'Tipo' => 'Movie'
            ),
            24 => array(
                'ID' => '25',
                'Titulo' => 'La torre oscura',
                'A¤o de Lanzamiento' => '1/01/2017',
                'Clasifiacion' => '13',
                'Duracion' => '1:34:00',
                'Temporadas' => '',
                'Categoria' => 'Drama',
                'Tipo' => 'Movie'
            ),
            25 => array(
                'ID' => '26',
                'Titulo' => 'Inferno',
                'A¤o de Lanzamiento' => '1/01/2016',
                'Clasifiacion' => '13',
                'Duracion' => '2:01:00',
                'Temporadas' => '',
                'Categoria' => 'Drama',
                'Tipo' => 'Movie'
            ),
            26 => array(
                'ID' => '27',
                'Titulo' => 'La chica Danesa',
                'A¤o de Lanzamiento' => '1/01/2014',
                'Clasifiacion' => '16',
                'Duracion' => '2:12:00',
                'Temporadas' => '',
                'Categoria' => 'Drama',
                'Tipo' => 'Movie'
            ),
            27 => array(
                'ID' => '28',
                'Titulo' => 'Anna Kanenina',
                'A¤o de Lanzamiento' => '1/01/2012',
                'Clasifiacion' => '16',
                'Duracion' => '2:09:00',
                'Temporadas' => '',
                'Categoria' => 'Drama',
                'Tipo' => 'Movie'
            ),
            28 => array(
                'ID' => '29',
                'Titulo' => 'Sully',
                'A¤o de Lanzamiento' => '1/01/2016',
                'Clasifiacion' => '13',
                'Duracion' => '1:35:00',
                'Temporadas' => '',
                'Categoria' => 'Drama',
                'Tipo' => 'Movie'
            ),
            29 => array(
                'ID' => '30',
                'Titulo' => 'Francotirador',
                'A¤o de Lanzamiento' => '1/01/2014',
                'Clasifiacion' => '16',
                'Duracion' => '2:12:00',
                'Temporadas' => '',
                'Categoria' => 'Drama',
                'Tipo' => 'Movie'
            ),
            30 => array(
                'ID' => '31',
                'Titulo' => 'Parasitos',
                'A¤o de Lanzamiento' => '1/01/2019',
                'Clasifiacion' => '16',
                'Duracion' => '2:11:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Independiente',
                'Tipo' => 'Movie'
            ),
            31 => array(
                'ID' => '32',
                'Titulo' => 'El ni¤o que domo el viento',
                'A¤o de Lanzamiento' => '1/01/2019',
                'Clasifiacion' => '13',
                'Duracion' => '1:53:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Independiente',
                'Tipo' => 'Movie'
            ),
            32 => array(
                'ID' => '33',
                'Titulo' => 'The Fundamental os Caring',
                'A¤o de Lanzamiento' => '1/01/2016',
                'Clasifiacion' => '16',
                'Duracion' => '1:37:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Independiente',
                'Tipo' => 'Movie'
            ),
            33 => array(
                'ID' => '34',
                'Titulo' => 'Una Historia Diferente',
                'A¤o de Lanzamiento' => '1/01/2010',
                'Clasifiacion' => '13',
                'Duracion' => '1:41:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Independiente',
                'Tipo' => 'Movie'
            ),
            34 => array(
                'ID' => '35',
                'Titulo' => 'Quisiera ser millonario',
                'A¤o de Lanzamiento' => '1/01/2008',
                'Clasifiacion' => '16',
                'Duracion' => '1:55:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Independiente',
                'Tipo' => 'Movie'
            ),
            35 => array(
                'ID' => '36',
                'Titulo' => 'El Huesped',
                'A¤o de Lanzamiento' => '1/01/2014',
                'Clasifiacion' => '16',
                'Duracion' => '1:39:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Independiente',
                'Tipo' => 'Movie'
            ),
            36 => array(
                'ID' => '37',
                'Titulo' => 'La Bruja',
                'A¤o de Lanzamiento' => '1/01/2015',
                'Clasifiacion' => '16',
                'Duracion' => '1:32:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Independiente',
                'Tipo' => 'Movie'
            ),
            37 => array(
                'ID' => '38',
                'Titulo' => 'Hasta el hueso',
                'A¤o de Lanzamiento' => '1/01/2017',
                'Clasifiacion' => '16',
                'Duracion' => '1:47:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Independiente',
                'Tipo' => 'Movie'
            ),
            38 => array(
                'ID' => '39',
                'Titulo' => 'Roma',
                'A¤o de Lanzamiento' => '1/01/2018',
                'Clasifiacion' => '16',
                'Duracion' => '2:14:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Independiente',
                'Tipo' => 'Movie'
            ),
            39 => array(
                'ID' => '40',
                'Titulo' => 'La Boda de Ali',
                'A¤o de Lanzamiento' => '1/01/2018',
                'Clasifiacion' => '16',
                'Duracion' => '1:49:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Independiente',
                'Tipo' => 'Movie'
            ),
            40 => array(
                'ID' => '41',
                'Titulo' => 'LadyBird',
                'A¤o de Lanzamiento' => '1/01/2017',
                'Clasifiacion' => '16',
                'Duracion' => '1:35:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Independiente',
                'Tipo' => 'Movie'
            ),
            41 => array(
                'ID' => '42',
                'Titulo' => 'Si no despierto',
                'A¤o de Lanzamiento' => '1/01/2017',
                'Clasifiacion' => '13',
                'Duracion' => '1:39:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Independiente',
                'Tipo' => 'Movie'
            ),
            42 => array(
                'ID' => '43',
                'Titulo' => 'Historia de un matrimonio',
                'A¤o de Lanzamiento' => '1/01/2019',
                'Clasifiacion' => '16',
                'Duracion' => '2:17:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Independiente',
                'Tipo' => 'Movie'
            ),
            43 => array(
                'ID' => '44',
                'Titulo' => 'Luz de luna',
                'A¤o de Lanzamiento' => '1/01/2016',
                'Clasifiacion' => '16',
                'Duracion' => '1:51:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Independiente',
                'Tipo' => 'Movie'
            ),
            44 => array(
                'ID' => '45',
                'Titulo' => 'Las ventajas de ser invicible',
                'A¤o de Lanzamiento' => '1/01/2012',
                'Clasifiacion' => '13',
                'Duracion' => '1:48:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Independiente',
                'Tipo' => 'Movie'
            ),
            45 => array(
                'ID' => '46',
                'Titulo' => 'Un peque¤o favor',
                'A¤o de Lanzamiento' => '1/01/2018',
                'Clasifiacion' => '16',
                'Duracion' => '1:59:00',
                'Temporadas' => '',
                'Categoria' => 'Trillers',
                'Tipo' => 'Movie'
            ),
            46 => array(
                'ID' => '47',
                'Titulo' => 'Amenaza en lo profundo',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '13',
                'Duracion' => '1:35:00',
                'Temporadas' => '',
                'Categoria' => 'Trillers',
                'Tipo' => 'Movie'
            ),
            47 => array(
                'ID' => '48',
                'Titulo' => 'El diablo a todas horas',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '16',
                'Duracion' => '2:19:00',
                'Temporadas' => '',
                'Categoria' => 'Trillers',
                'Tipo' => 'Movie'
            ),
            48 => array(
                'ID' => '49',
                'Titulo' => 'Un lugar en silencio',
                'A¤o de Lanzamiento' => '1/01/2018',
                'Clasifiacion' => '13',
                'Duracion' => '1:35:00',
                'Temporadas' => '',
                'Categoria' => 'Trillers',
                'Tipo' => 'Movie'
            ),
            49 => array(
                'ID' => '50',
                'Titulo' => 'Bird Box: a ciegas',
                'A¤o de Lanzamiento' => '1/01/2018',
                'Clasifiacion' => '16',
                'Duracion' => '2:04:00',
                'Temporadas' => '',
                'Categoria' => 'Trillers',
                'Tipo' => 'Movie'
            ),
            50 => array(
                'ID' => '51',
                'Titulo' => 'El desorden que dejas',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '1',
                'Categoria' => 'Trillers',
                'Tipo' => 'TV show'
            ),
            51 => array(
                'ID' => '52',
                'Titulo' => 'El mu¤eco de nieve',
                'A¤o de Lanzamiento' => '1/01/2017',
                'Clasifiacion' => '16',
                'Duracion' => '1:59:00',
                'Temporadas' => '',
                'Categoria' => 'Trillers',
                'Tipo' => 'Movie'
            ),
            52 => array(
                'ID' => '53',
                'Titulo' => 'La caceria',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '18',
                'Duracion' => '1:30:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas de Terror',
                'Tipo' => 'Movie'
            ),
            53 => array(
                'ID' => '54',
                'Titulo' => 'Nadie duerme en el bosque esta noche',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '18',
                'Duracion' => '1:42:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas de Terror',
                'Tipo' => 'Movie'
            ),
            54 => array(
                'ID' => '55',
                'Titulo' => 'Presencias del mal',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '18',
                'Duracion' => '1:40:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas de Terror',
                'Tipo' => 'Movie'
            ),
            55 => array(
                'ID' => '56',
                'Titulo' => 'It',
                'A¤o de Lanzamiento' => '1/01/2019',
                'Clasifiacion' => '18',
                'Duracion' => '2:50:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas de Terror',
                'Tipo' => 'Movie'
            ),
            56 => array(
                'ID' => '57',
                'Titulo' => 'The Silence',
                'A¤o de Lanzamiento' => '1/01/2019',
                'Clasifiacion' => '18',
                'Duracion' => '1:32:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas de Terror',
                'Tipo' => 'Movie'
            ),
            57 => array(
                'ID' => '58',
                'Titulo' => 'Su casa',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '18',
                'Duracion' => '1:50:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas de Terror',
                'Tipo' => 'Movie'
            ),
            58 => array(
                'ID' => '59',
                'Titulo' => 'Verdad o reto',
                'A¤o de Lanzamiento' => '1/01/2018',
                'Clasifiacion' => '18',
                'Duracion' => '1:45:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas de Terror',
                'Tipo' => 'Movie'
            ),
            59 => array(
                'ID' => '60',
                'Titulo' => 'Mara',
                'A¤o de Lanzamiento' => '1/01/2018',
                'Clasifiacion' => '18',
                'Duracion' => '1:46:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas de Terror',
                'Tipo' => 'Movie'
            ),
            60 => array(
                'ID' => '61',
                'Titulo' => 'El Resplandor',
                'A¤o de Lanzamiento' => '1/01/1980',
                'Clasifiacion' => '18',
                'Duracion' => '',
                'Temporadas' => '',
                'Categoria' => 'Trillers',
                'Tipo' => 'Movie'
            ),
            61 => array(
                'ID' => '62',
                'Titulo' => 'Nerve',
                'A¤o de Lanzamiento' => '1/01/2016',
                'Clasifiacion' => '13',
                'Duracion' => '1:36:00',
                'Temporadas' => '',
                'Categoria' => 'Trillers',
                'Tipo' => 'Movie'
            ),
            62 => array(
                'ID' => '63',
                'Titulo' => 'Dragon Rojo',
                'A¤o de Lanzamiento' => '1/01/2002',
                'Clasifiacion' => '16',
                'Duracion' => '2:04:00',
                'Temporadas' => '',
                'Categoria' => 'Trillers',
                'Tipo' => 'Movie'
            ),
            63 => array(
                'ID' => '64',
                'Titulo' => 'Fragmentado',
                'A¤o de Lanzamiento' => '1/01/2016',
                'Clasifiacion' => '16',
                'Duracion' => '1:57:00',
                'Temporadas' => '',
                'Categoria' => 'Trillers',
                'Tipo' => 'Movie'
            ),
            64 => array(
                'ID' => '65',
                'Titulo' => 'I am mother',
                'A¤o de Lanzamiento' => '1/01/2019',
                'Clasifiacion' => '13',
                'Duracion' => '1:53:00',
                'Temporadas' => '',
                'Categoria' => 'Trillers',
                'Tipo' => 'Movie'
            ),
            65 => array(
                'ID' => '66',
                'Titulo' => 'Gravedad',
                'A¤o de Lanzamiento' => '1/01/2013',
                'Clasifiacion' => '13',
                'Duracion' => '1:30:00',
                'Temporadas' => '',
                'Categoria' => 'Trillers',
                'Tipo' => 'Movie'
            ),
            66 => array(
                'ID' => '67',
                'Titulo' => 'Hannibal',
                'A¤o de Lanzamiento' => '1/01/2001',
                'Clasifiacion' => '18',
                'Duracion' => '2:11:00',
                'Temporadas' => '',
                'Categoria' => 'Trillers',
                'Tipo' => 'Movie'
            ),
            67 => array(
                'ID' => '68',
                'Titulo' => 'Siberia',
                'A¤o de Lanzamiento' => '1/01/2018',
                'Clasifiacion' => '16',
                'Duracion' => '1:44:00',
                'Temporadas' => '',
                'Categoria' => 'Trillers',
                'Tipo' => 'Movie'
            ),
            68 => array(
                'ID' => '69',
                'Titulo' => 'El Titan',
                'A¤o de Lanzamiento' => '1/01/2018',
                'Clasifiacion' => '16',
                'Duracion' => '1:37:00',
                'Temporadas' => '',
                'Categoria' => 'Trillers',
                'Tipo' => 'Movie'
            ),
            69 => array(
                'ID' => '70',
                'Titulo' => 'Destino IO',
                'A¤o de Lanzamiento' => '1/01/2019',
                'Clasifiacion' => '13',
                'Duracion' => '1:36:00',
                'Temporadas' => '',
                'Categoria' => 'Trillers',
                'Tipo' => 'Movie'
            ),
            70 => array(
                'ID' => '71',
                'Titulo' => 'La noche del demonio',
                'A¤o de Lanzamiento' => '1/01/2018',
                'Clasifiacion' => '13',
                'Duracion' => '1:43:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas de Terror',
                'Tipo' => 'Movie'
            ),
            71 => array(
                'ID' => '72',
                'Titulo' => 'El regreso del demonio',
                'A¤o de Lanzamiento' => '1/01/2017',
                'Clasifiacion' => '16',
                'Duracion' => '1:41:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas de Terror',
                'Tipo' => 'Movie'
            ),
            72 => array(
                'ID' => '73',
                'Titulo' => 'El conjuro',
                'A¤o de Lanzamiento' => '1/01/2016',
                'Clasifiacion' => '16',
                'Duracion' => '2:13:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas de Terror',
                'Tipo' => 'Movie'
            ),
            73 => array(
                'ID' => '74',
                'Titulo' => 'Insidius',
                'A¤o de Lanzamiento' => '1/01/2015',
                'Clasifiacion' => '16',
                'Duracion' => '1:37:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas de Terror',
                'Tipo' => 'Movie'
            ),
            74 => array(
                'ID' => '75',
                'Titulo' => 'Terror en Silent Hill',
                'A¤o de Lanzamiento' => '1/01/2006',
                'Clasifiacion' => '16',
                'Duracion' => '2:05:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas de Terror',
                'Tipo' => 'Movie'
            ),
            75 => array(
                'ID' => '76',
                'Titulo' => 'Pele',
                'A¤o de Lanzamiento' => '1/01/2021',
                'Clasifiacion' => '13',
                'Duracion' => '1:48:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Latinoamericanas',
                'Tipo' => 'Movie'
            ),
            76 => array(
                'ID' => '77',
                'Titulo' => 'Gente Topo',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '7',
                'Duracion' => '1:29:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Latinoamericanas',
                'Tipo' => 'Movie'
            ),
            77 => array(
                'ID' => '78',
                'Titulo' => 'El camino de Xico',
                'A¤o de Lanzamiento' => '1/01/2021',
                'Clasifiacion' => '7',
                'Duracion' => '1:26:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Latinoamericanas',
                'Tipo' => 'Movie'
            ),
            78 => array(
                'ID' => '79',
                'Titulo' => 'Papa por dos',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '7',
                'Duracion' => '1:45:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Latinoamericanas',
                'Tipo' => 'Movie'
            ),
            79 => array(
                'ID' => '80',
                'Titulo' => 'Todas las pecas del mundo',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '13',
                'Duracion' => '1:29:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Latinoamericanas',
                'Tipo' => 'Movie'
            ),
            80 => array(
                'ID' => '81',
                'Titulo' => 'Rico Amor',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '13',
                'Duracion' => '1:45:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Latinoamericanas',
                'Tipo' => 'Movie'
            ),
            81 => array(
                'ID' => '82',
                'Titulo' => 'Modo avion',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '7',
                'Duracion' => '1:36:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Latinoamericanas',
                'Tipo' => 'Movie'
            ),
            82 => array(
                'ID' => '83',
                'Titulo' => 'Perfectos desconocidos',
                'A¤o de Lanzamiento' => '1/01/2018',
                'Clasifiacion' => '16',
                'Duracion' => '1:44:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Latinoamericanas',
                'Tipo' => 'Movie'
            ),
            83 => array(
                'ID' => '84',
                'Titulo' => 'la leyenda de la llorona',
                'A¤o de Lanzamiento' => '1/01/2011',
                'Clasifiacion' => '7',
                'Duracion' => '1:15:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Latinoamericanas',
                'Tipo' => 'Movie'
            ),
            84 => array(
                'ID' => '85',
                'Titulo' => 'El pepe una vida suprema',
                'A¤o de Lanzamiento' => '1/01/2018',
                'Clasifiacion' => '13',
                'Duracion' => '1:13:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Latinoamericanas',
                'Tipo' => 'Movie'
            ),
            85 => array(
                'ID' => '86',
                'Titulo' => 'Gabo, la magia de lo real',
                'A¤o de Lanzamiento' => '1/01/2015',
                'Clasifiacion' => '13',
                'Duracion' => '1:29:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Latinoamericanas',
                'Tipo' => 'Movie'
            ),
            86 => array(
                'ID' => '87',
                'Titulo' => 'Guatemala: Corazon del mundo maya',
                'A¤o de Lanzamiento' => '1/01/2019',
                'Clasifiacion' => '0',
                'Duracion' => '1:06:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Latinoamericanas',
                'Tipo' => 'Movie'
            ),
            87 => array(
                'ID' => '88',
                'Titulo' => 'Andes magicos',
                'A¤o de Lanzamiento' => '1/01/2019',
                'Clasifiacion' => '0',
                'Duracion' => '',
                'Temporadas' => '1',
                'Categoria' => 'Peliculas Latinoamericanas',
                'Tipo' => 'Movie'
            ),
            88 => array(
                'ID' => '89',
                'Titulo' => 'Loco por vos',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '13',
                'Duracion' => '1:40:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Latinoamericanas',
                'Tipo' => 'Movie'
            ),
            89 => array(
                'ID' => '90',
                'Titulo' => 'Joven y alocada',
                'A¤o de Lanzamiento' => '1/01/2012',
                'Clasifiacion' => '16',
                'Duracion' => '1:35:00',
                'Temporadas' => '',
                'Categoria' => 'Peliculas Latinoamericanas',
                'Tipo' => 'Movie'
            ),
            90 => array(
                'ID' => '91',
                'Titulo' => 'Formula 1',
                'A¤o de Lanzamiento' => '1/01/2019',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '2',
                'Categoria' => 'Deportes y Salud Fisica',
                'Tipo' => 'TV show'
            ),
            91 => array(
                'ID' => '92',
                'Titulo' => 'El ultimo baile',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '1',
                'Categoria' => 'Deportes y Salud Fisica',
                'Tipo' => 'TV show'
            ),
            92 => array(
                'ID' => '93',
                'Titulo' => 'Cheerleaders en acciom',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '13',
                'Duracion' => '',
                'Temporadas' => '1',
                'Categoria' => 'Deportes y Salud Fisica',
                'Tipo' => 'TV show'
            ),
            93 => array(
                'ID' => '94',
                'Titulo' => 'Cambio radical',
                'A¤o de Lanzamiento' => '1/01/2018',
                'Clasifiacion' => '13',
                'Duracion' => '1:25:00',
                'Temporadas' => '',
                'Categoria' => 'Deportes y Salud Fisica',
                'Tipo' => 'Movie'
            ),
            94 => array(
                'ID' => '95',
                'Titulo' => 'Atleta A',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '16',
                'Duracion' => '1:44:00',
                'Temporadas' => '',
                'Categoria' => 'Deportes y Salud Fisica',
                'Tipo' => 'Movie'
            ),
            95 => array(
                'ID' => '96',
                'Titulo' => 'Accomplice',
                'A¤o de Lanzamiento' => '1/01/2021',
                'Clasifiacion' => '13',
                'Duracion' => '0:52:00',
                'Temporadas' => '',
                'Categoria' => 'Deportes y Salud Fisica',
                'Tipo' => 'Movie'
            ),
            96 => array(
                'ID' => '97',
                'Titulo' => 'El manual de juevo',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '1',
                'Categoria' => 'Deportes y Salud Fisica',
                'Tipo' => 'TV show'
            ),
            97 => array(
                'ID' => '98',
                'Titulo' => 'Rising Phoenix',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '13',
                'Duracion' => '1:46:00',
                'Temporadas' => '',
                'Categoria' => 'Deportes y Salud Fisica',
                'Tipo' => 'Movie'
            ),
            98 => array(
                'ID' => '99',
                'Titulo' => 'La guerra de las 24 horas',
                'A¤o de Lanzamiento' => '1/01/2016',
                'Clasifiacion' => '13',
                'Duracion' => '1:39:00',
                'Temporadas' => '',
                'Categoria' => 'Deportes y Salud Fisica',
                'Tipo' => 'Movie'
            ),
            99 => array(
                'ID' => '100',
                'Titulo' => 'Un dia menos pesado',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '13',
                'Duracion' => '',
                'Temporadas' => '1',
                'Categoria' => 'Deportes y Salud Fisica',
                'Tipo' => 'TV show'
            ),
            100 => array(
                'ID' => '101',
                'Titulo' => 'Fangio',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '7',
                'Duracion' => '1:32:00',
                'Temporadas' => '',
                'Categoria' => 'Deportes y Salud Fisica',
                'Tipo' => 'Movie'
            ),
            101 => array(
                'ID' => '102',
                'Titulo' => 'Matchday',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '13',
                'Duracion' => '',
                'Temporadas' => '1',
                'Categoria' => 'Deportes y Salud Fisica',
                'Tipo' => 'TV show'
            ),
            102 => array(
                'ID' => '103',
                'Titulo' => 'The Short game',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '13',
                'Duracion' => '1:40:00',
                'Temporadas' => '',
                'Categoria' => 'Deportes y Salud Fisica',
                'Tipo' => 'Movie'
            ),
            103 => array(
                'ID' => '104',
                'Titulo' => 'La historia oficial de la copa mundial',
                'A¤o de Lanzamiento' => '1/01/2017',
                'Clasifiacion' => '7',
                'Duracion' => '',
                'Temporadas' => '1',
                'Categoria' => 'Deportes y Salud Fisica',
                'Tipo' => 'TV show'
            ),
            104 => array(
                'ID' => '105',
                'Titulo' => 'Becoming Champions',
                'A¤o de Lanzamiento' => '1/01/2018',
                'Clasifiacion' => '7',
                'Duracion' => '',
                'Temporadas' => '1',
                'Categoria' => 'Deportes y Salud Fisica',
                'Tipo' => 'TV show'
            ),
            105 => array(
                'ID' => '106',
                'Titulo' => 'Snowpiercer',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '2',
                'Categoria' => 'Series',
                'Tipo' => 'TV show'
            ),
            106 => array(
                'ID' => '107',
                'Titulo' => 'Shadowshunters',
                'A¤o de Lanzamiento' => '1/01/2016',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '4',
                'Categoria' => 'Series',
                'Tipo' => 'TV show'
            ),
            107 => array(
                'ID' => '108',
                'Titulo' => 'Lucifer',
                'A¤o de Lanzamiento' => '1/01/2016',
                'Clasifiacion' => '13',
                'Duracion' => '',
                'Temporadas' => '5',
                'Categoria' => 'Series',
                'Tipo' => 'TV show'
            ),
            108 => array(
                'ID' => '109',
                'Titulo' => 'Iron Fist',
                'A¤o de Lanzamiento' => '1/01/2017',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '2',
                'Categoria' => 'Series',
                'Tipo' => 'TV show'
            ),
            109 => array(
                'ID' => '110',
                'Titulo' => 'Merlin',
                'A¤o de Lanzamiento' => '1/01/2008',
                'Clasifiacion' => '13',
                'Duracion' => '',
                'Temporadas' => '5',
                'Categoria' => 'Series',
                'Tipo' => 'TV show'
            ),
            110 => array(
                'ID' => '111',
                'Titulo' => 'Los 100',
                'A¤o de Lanzamiento' => '1/01/2014',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '6',
                'Categoria' => 'Series',
                'Tipo' => 'TV show'
            ),
            111 => array(
                'ID' => '112',
                'Titulo' => 'Star Trek',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '3',
                'Categoria' => 'Series',
                'Tipo' => 'TV show'
            ),
            112 => array(
                'ID' => '113',
                'Titulo' => 'Perdidos en el espacio',
                'A¤o de Lanzamiento' => '1/01/2018',
                'Clasifiacion' => '7',
                'Duracion' => '',
                'Temporadas' => '2',
                'Categoria' => 'Series',
                'Tipo' => 'TV show'
            ),
            113 => array(
                'ID' => '114',
                'Titulo' => 'Salvacion',
                'A¤o de Lanzamiento' => '1/01/2017',
                'Clasifiacion' => '13',
                'Duracion' => '',
                'Temporadas' => '2',
                'Categoria' => 'Series',
                'Tipo' => 'TV show'
            ),
            114 => array(
                'ID' => '115',
                'Titulo' => 'Stranger Things',
                'A¤o de Lanzamiento' => '1/01/2016',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '3',
                'Categoria' => 'Series',
                'Tipo' => 'TV show'
            ),
            115 => array(
                'ID' => '116',
                'Titulo' => 'Ozark',
                'A¤o de Lanzamiento' => '1/01/2017',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '3',
                'Categoria' => 'Series',
                'Tipo' => 'TV show'
            ),
            116 => array(
                'ID' => '117',
                'Titulo' => 'Gambito de dama',
                'A¤o de Lanzamiento' => '1/01/2020',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '1',
                'Categoria' => 'Series',
                'Tipo' => 'TV show'
            ),
            117 => array(
                'ID' => '118',
                'Titulo' => 'Dark',
                'A¤o de Lanzamiento' => '1/01/2017',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '3',
                'Categoria' => 'Series',
                'Tipo' => 'TV show'
            ),
            118 => array(
                'ID' => '119',
                'Titulo' => 'Breaking Bad',
                'A¤o de Lanzamiento' => '1/01/2008',
                'Clasifiacion' => '16',
                'Duracion' => '',
                'Temporadas' => '5',
                'Categoria' => 'Series',
                'Tipo' => 'TV show'
            ),
            119 => array(
                'ID' => '120',
                'Titulo' => 'Riverdale',
                'A¤o de Lanzamiento' => '1/01/2017',
                'Clasifiacion' => '13',
                'Duracion' => '',
                'Temporadas' => '4',
                'Categoria' => 'Series',
                'Tipo' => 'TV show'
            )
        );
    }

    
    
    public function BuscarId($id)
    {
        $pelicula = new PeliculaModel();     
        $listar = $pelicula -> Pelicula();
        
        foreach ($listar as $val) {
            if ($val['ID'] == $id) {

                return $val;
            }
        }
        return null;
    }

    public function BuscarFecha($año)
    {
        $arreglo = null;
        $pelicula = new PeliculaModel();     
        $listar = $pelicula -> Pelicula();

        $año = '1/01/'.$año;
            
        foreach ($listar as $val) {
            //1/01/1999
            if ($val['A¤o de Lanzamiento'] == $año) {

                $arreglo[] = $val;

            }
        }
        return $arreglo;
    }


    public function BuscarEstreno(){
        $arreglo = null;
        $pelicula = new PeliculaModel();     
        $listar = $pelicula -> Pelicula();

        $año = '1/01/2021';
            
        foreach ($listar as $val) {
            
            if ($val['A¤o de Lanzamiento'] == $año) {
                if($val['Clasifiacion'] == '0'){
                    $val['Clasifiacion'] = 'Recomendada para todos los publicos';
                }
                if($val['Clasifiacion'] == '7'){
                    $val['Clasifiacion'] = 'Recomendada para niños a partir de los 7 años';
                }   
                if($val['Clasifiacion'] == '13'){
                    $val['Clasifiacion'] = 'Recomendada para niños a partir de los 13 años';
                }
                if($val['Clasifiacion'] == '16'){
                    $val['Clasifiacion'] = 'Recomendada para niños a partir de los 16 años';
                }
                if($val['Clasifiacion'] == '18'){
                    $val['Clasifiacion'] = 'Recomendada para jovenes a partir de los 18 años';
                }
                $arreglo[] = $val;

            }
        }
        return $arreglo;
    }
    
    public function BuscarEstrenso(){
        $Contenedor = null;
          $pelicula = new PeliculaModel();     
        $listado = $pelicula -> Pelicula();
        // 'ID' => '1',
        //         'Titulo' => 'One Piece',
        //         'A¤o de Lanzamiento' => '1/01/1999',
        //         'Clasifiacion' => '13',
        //         'Duracion' => '',
        //         'Temporadas' => '4',
        //         'Categoria' => 'Anime',
        //         'Tipo' => 'TV show'
        foreach ($listado    as $val) {
            

                if ($listado['Clasifiacion'] == 0) {

                    $Contenedor[] = [$listado[0], $listado[1], "Recomendada para todos los publicos", $listado[6], $listado[7]];
                } else {
                    if ($listado[3] == 7) {

                        $Contenedor[] = [$listado[0], $listado[1], "Recomendada para niños a partir de los 7 años", $listado[6], $listado[7]];
                    } else {
                        if ($listado[3] == 13) {

                            $Contenedor[] = [$listado[0], $listado[1], "Recomendada para niños a partir de los 13 años", $listado[6], $listado[7]];
                        } else {
                            if ($listado[3] == 16) {

                                $Contenedor[] = [$listado[0], $listado[1], "Recomendada para niños a partir de los 16 años", $listado[6], $listado[7]];
                            } else {
                                $Contenedor[] = [$listado[0], $listado[1], "Recomendada para jovenes a partir de los 18 años", $listado[6], $listado[7]];
                            }
                        }
                    }
                }
            
        }
        return $Contenedor;
    }

}
