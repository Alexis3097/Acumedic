<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaciente extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

  
    public function rules(): array
    {
        return [
            'Nombre' => 'required',
            'ApellidoPaterno' => 'required',
            'ApellidoMaterno' => 'required',
            'FechaNacimiento' => 'required',
            'Telefono' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'Nombre.required' => 'El :attribute es requerido',
            
        ];
    }
}
