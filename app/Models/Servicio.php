<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'Servicio';
    protected $fillable = [
        'Nombre','DescripcionCorta','DescripcionLarga','Logo','Imagen','TextoImagen','TextoLogo'
    ];
}
