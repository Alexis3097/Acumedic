<?php

namespace App\Models;
namespace App\Models\Cita;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
        'Horario',
    ];
    
    public function Citas()
    {
        return $this->belongsToMany(Cita::class, 'CitaHorario','IdHorario','IdCita')
                        ->as('CitaHorario')
                        ->withTimestamps();
    }
}
