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

    public function Paciente()
    {
        return $this->hasOne(Paciente::class);
    }

    public function TipoConsulta()
    {
        return $this->hasOne(TipoConsulta::class);
    }

    public function EstatusConsulta()
    {
        return $this->hasOne(EstatusConsulta::class);
    }

    public function Horarios()
    {
        return $this->belongsToMany(Horario::class, 'CitaHorario','IdCita','IdHorario')
                        ->as('CitaHorario')
                        ->withTimestamps();
    }
}
