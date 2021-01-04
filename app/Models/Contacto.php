<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'Contacto';
    protected $fillable = [
        'Telefono','Horario',
    ];
}
