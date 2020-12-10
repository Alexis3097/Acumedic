<?php

namespace App\ViewModel;
use App\Models\Sexo;
class SexoViewModel
{
    public static function getSexos()
    {
      return Sexo::All();
    }
}