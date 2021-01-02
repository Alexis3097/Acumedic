<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SobreAcumedic extends Model
{
    protected $table = 'SobreAcumedic';
    protected $fillable = [
        'Titulo1','Informacion1',
        'Titulo2','Informacion2',
        'Titulo3','Informacion3',
        'Foto','TituloImagen','TextoAlterno',
    ];
}
