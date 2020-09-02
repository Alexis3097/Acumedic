<?php

namespace App\Models;
namespace App\Models\Sexo;
namespace App\Models\Paciente;
namespace App\Models\DetalleAntecedente;

use Illuminate\Database\Eloquent\Model;

class FichaPaciente extends Model
{
    protected $fillable = [
        'IdPaciente','IdSexo','LugarOrigen','Direccion','Correo','Peso','Talla','TipoSangre',
    ];

    public function Sexo()
    {
        return $this->hasOne(Sexo::class);
    }
    
    public function Paciente()
    {
        return $this->hasOne(Paciente::class);
    }

    public function DetalleAntecedentes()
    {
        return $this->belongsToMany(DetalleAntecedente::class, 'FichaAntecedente','IdFichaPaciente','IdDetalleAntecedente')
                        ->as('FichaAntecedente')
                        ->withTimestamps();
    }
}
