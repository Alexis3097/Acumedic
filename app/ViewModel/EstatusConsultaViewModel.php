<?php

namespace App\ViewModel;
use App\Models\EstatusConsulta;

class EstatusConsultaViewModel
{
    public function estatusConsulta()
    {
        return EstatusConsulta::All();
    }

    
}