<?php

namespace App\Models;
use App\Models\FichaPaciente;
use App\Models\TipoAntecedente;

use Illuminate\Database\Eloquent\Model;

class DetalleAntecedente extends Model
{
    protected $fillable = [
        'IdTipoAntecedente','Nombre','Descripcion',
    ];

    public function tipoAntecedente()
    {
        return $this->hasOne(TipoAntecedente::class);
    }

    public function fichaPacientes()
    {
        return $this->belongsToMany(FichaPaciente::class, 'FichaAntecedente','IdDetalleAntecedente','IdFichaAntecedente')
                        ->as('FichaAntecedente')
                        ->withTimestamps();
    }
}
