<?php

namespace App\Models;
use App\Models\Horario;
use App\Models\Consulta;
use App\Models\Paciente;
use App\Models\TipoConsulta;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\EstatusConsulta;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use SoftDeletes;
    protected $table = 'Cita';
    protected $fillable = [
        'IdPaciente','IdTipoConsulta','IdEstatusConsulta','Descripcion','Fecha',
    ];
    public function paciente()
    {
        return $this->belongsTo(Paciente::class,'IdPaciente');
    }
    public function tipoConsulta()
    {
        return $this->hasOne(TipoConsulta::class);
    }

    public function estatusConsulta()
    {
        return $this->belongsTo(EstatusConsulta::class,'IdEstatusConsulta');
    }

    public function horarios()
    {
        return $this->belongsToMany(Horario::class, 'CitaHorario','IdCita','IdHorario')
                        ->as('CitaHorario')
                        ->withTimestamps();
    }

    public function consulta()
    {
        return $this->hasOne(Consulta::class,'IdCita');
    }

   
}
