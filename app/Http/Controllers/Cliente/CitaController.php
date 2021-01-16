<?php

namespace App\Http\Controllers\Cliente;

use Illuminate\Http\Request;
use App\ViewModel\CitaViewModel;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSolicitudCita;

class CitaController extends Controller
{
    public function solicitarCita(StoreSolicitudCita $request,CitaViewModel $CitaViewModel){
        if($request->ajax()){
            $CitaViewModel->solicitarCita($request);
        }
    }
}
