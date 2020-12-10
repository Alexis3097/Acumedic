<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Consulta;
class AparatoSistema extends Model
{
    protected $table = 'AparatosSistemas';
    protected $fillable = [
        'IdConsulta','Cabeza','Tronco','Pelvis','MiembroInferior','MiembroSuperior','Cabello',
        'Dientes','Lengua','Pulso',
    ];

    public function consulta()
    {
        return $this->hasOne(Consulta::class);
    }
}
