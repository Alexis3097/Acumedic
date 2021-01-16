<?php

namespace App\Models;

use App\Models\OrdenDeCompra;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'Direccion';
    protected $fillable = [
        'Estado','Municipio','Colonia','Calle','NoExterior','NoInterior','Calle1','Calle2'
    ];

    public function ordenDeCompra()
    {
        return $this->hasOne(OrdenDeCompra::class,'IdDireccion');
    }
    
}
