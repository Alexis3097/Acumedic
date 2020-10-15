<?php

namespace App\Models;
use App\Models\TipoAntecedente;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class DetalleAntecedente extends Model
{
    use softDeletes;
    protected $table = 'DetalleAntecedente';
    protected $fillable = [
        'IdPaciente','IdTipoAntecedente','Nombre','Descripcion',
    ];

    public function tipoAntecedente()
    {
        return $this->hasOne(TipoAntecedente::class);
    }

    public function paciente()
    {
        return $this->hasOne(TipoAntecedente::class);
    }
  
}
