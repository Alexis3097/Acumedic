<?php

namespace App\Models;
namespace App\Models\Paciente;
namespace App\Models\TipoConsulta;
namespace App\Models\EstatusConsulta;
namespace App\Models\Horario;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = [
        'Descripcion','IdPaciente','IdTipoConsulta','IdEstatusConsulta','Fecha',
    ];

    public function paciente()
    {
        return $this->hasOne(Paciente::class);
    }

    public function tipoConsulta()
    {
        return $this->hasOne(TipoConsulta::class);
    }

    public function estatusConsulta()
    {
        return $this->hasOne(EstatusConsulta::class);
    }

    public function horarios()
    {
        return $this->belongsToMany(Horario::class, 'CitaHorario','IdCita','IdHorario')
                        ->as('CitaHorario')
                        ->withTimestamps();
    }
}
