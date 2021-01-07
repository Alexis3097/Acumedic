<?php

namespace App\ViewModel;
use App\Models\Direccion;
use App\Models\OrdenDeCompra;

class OrdenDeCompraViewModel
{
    public function getAllOrdenDeCompra()
    {
      return OrdenDeCompra::all();
    }

    public function getOrdenDeCompra($Id)
    {
      return OrdenDeCompra::find($Id);
    }
}