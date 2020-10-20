<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoAntecedente extends Model
{
    protected $table = 'TipoAntecedente';
    protected $fillable = [
        'Nombre','Descripcion',
    ];
}
