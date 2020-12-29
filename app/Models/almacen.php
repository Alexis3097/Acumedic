<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;
use App\Models\almacen;
class almacen extends Model
{
    protected $table = 'almacen';
    protected $fillable = [
        'producto_id','Cantidad','StockMinimo',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
