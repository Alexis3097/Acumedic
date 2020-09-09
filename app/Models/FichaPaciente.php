<?php

namespace App\Models;
use App\Models\Sexo;
use App\Models\Paciente;
use App\Models\DetalleAntecedente;

use Illuminate\Database\Eloquent\Model;

class FichaPaciente extends Model
{
    protected $fillable = [
        'IdPaciente','IdSexo','LugarOrigen','Direccion','Correo','Peso','Talla','TipoSangre',
    ];

    public function sexo()
    {
        return $this->hasOne(Sexo::class);
    }
    
    public function paciente()
    {
        return $this->hasOne(Paciente::class);
    }

    public function detalleAntecedentes()
    {
        return $this->belongsToMany(DetalleAntecedente::class, 'FichaAntecedente','IdFichaPaciente','IdDetalleAntecedente')
                        ->as('FichaAntecedente')
                        ->withTimestamps();
    }
}
