<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;
class AntGinecologico extends Model
{
    protected $table = 'AntGinecologicos';
    protected $fillable = [
        'IdPaciente','FechaPrimeraMenstruacion','FechaUltimaMenstruacion','CaractMenstruacion','Embarazos','CancerCervico','CancerUterino',
        'Otros',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
