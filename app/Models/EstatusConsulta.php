<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstatusConsulta extends Model
{
    protected $table = 'EstatusConsulta';
    protected $fillable = [
        'Nombre','Descripcion',
    ];
}
