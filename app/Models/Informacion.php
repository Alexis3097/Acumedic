<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Informacion extends Model
{
    protected $table = 'Informacion';
    protected $fillable = [
        'Titulo1','Informacion1',
        'Titulo2','Informacion2',
        'Foto','TituloImagen','TextoAlterno',
    ];
}
