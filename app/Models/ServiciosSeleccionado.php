<?php

namespace App\Models;

use App\Models\Servicio;
use Illuminate\Database\Eloquent\Model;

class ServiciosSeleccionado extends Model
{
    protected $table = 'ServiciosSeleccionado';
    protected $fillable = [
        'IdServicio',
    ];

    public function servicio()
    {
        return $this->belongsTo(Servicio::class,'IdServicio');
    }
}
