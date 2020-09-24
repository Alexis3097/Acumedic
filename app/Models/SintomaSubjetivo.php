<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Consulta;
class SintomaSubjetivo extends Model
{
    protected $fillable = [
        'IdConsulta','Nombre','Descripcion',
    ];

    public function consulta()
    {
        return $this->hasMany(Consulta::class);
    }
}
