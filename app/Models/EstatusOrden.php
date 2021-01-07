<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstatusOrden extends Model
{
    protected $table = 'EstatusOrden';
    protected $fillable = [
        'Estatus',
    ];

    public function ordenDeCompra()
    {
        return $this->hasOne(OrdenDeCompra::class,'IdEstatusOrden');
    }
}
