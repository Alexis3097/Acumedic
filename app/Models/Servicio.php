<?php

namespace App\Models;

use App\Models\ServiciosSeleccionado;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'Servicio';
    protected $fillable = [
        'Nombre','Precio','DescripcionCorta','DescripcionLarga','Logo','Imagen','TextoImagen','TextoLogo'
    ];

    public function ServiciosSeleccionado()
    {
        return $this->hasMany(ServiciosSeleccionado::class,'IdServicio');
    }
}
