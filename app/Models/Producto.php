<?php

namespace App\Models;

use App\Models\Inventario;
use App\Models\fotoProducto;
use App\Models\OrdenDeCompra;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = [
        'Nombre','PrecioCompra','PrecioPublico','Estrellas','DescripcionCorta','DescripcionLarga','CodigoBarra',
    ];

    public function fotoProductos()
    {
        return $this->hasMany(fotoProducto::class,'IdProducto');
    }

    public function inventario()
    {
        return $this->hasOne(inventario::class);
    }

    public function ordenDeCompra()
    {
        return $this->hasOne(OrdenDeCompra::class,'IdProducto');
    }
    
}
