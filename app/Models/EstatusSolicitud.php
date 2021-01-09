<?php

namespace App\Models;

use App\Models\SolicitudCitas;
use Illuminate\Database\Eloquent\Model;

class EstatusSolicitud extends Model
{
    protected $table = 'EstatusSolicitud';
    protected $fillable = [
        'Estatus',
    ];

    public function ordenDeCompra()
    {
        return $this->hasOne(OrdenDeCompra::class,'IdEstatusSolicitud');
    }

    public function solicitudCitas()
    {
        return $this->hasOne(SolicitudCitas::class,'IdEstatusSolicitud');
    }
}
