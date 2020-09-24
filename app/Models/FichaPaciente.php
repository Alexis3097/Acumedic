<?php

namespace App\Models;
use App\Models\Paciente;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FichaPaciente extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'IdPaciente','LugarResidencia','Direccion',
        'Peso','Talla','SPO2','FC','FR','TA','Dextrosis',
    ];
    
    public function paciente()
    {
        return $this->hasOne(Paciente::class);
    }

    
}
