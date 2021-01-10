<?php

namespace App\Models;

use App\Models\Producto;
use App\Models\Direccion;
use App\Models\EstatusOrden;
use Illuminate\Database\Eloquent\Model;

class OrdenDeCompra extends Model
{
    protected $table = 'OrdenDeCompra';
    protected $fillable = [
        'IdProducto','IdDireccion','IdEstatusSolicitud','NombreCompleto','Correo','Telefono','Cantidad','Total'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class,'IdProducto');
    }

    public function direccion()
    {
        return $this->belongsTo(Direccion::class,'IdDireccion');
    }

    public function estatusSolicitud()
    {
        return $this->belongsTo(EstatusSolicitud::class,'IdEstatusSolicitud');
    }

    
}
