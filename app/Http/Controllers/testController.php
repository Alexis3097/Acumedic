<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\StorePaciente;
use App\ViewModel\PacienteViewModel;

class testController extends Controller
{
    public function index(){
        return view('Admin.Pacientes.consultaMedicaSintomasSubjetivos');
    }

    public function nuevo()
    {
        return view('testCreate');
    }

    public function store(StorePaciente $request, PacienteViewModel $pacienteData)
    {
        $paciente = $pacienteData->create($request);
        return redirect()->route('test');
    }
}
