<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\OptionSelect;

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
            'Telefono' => 'required|numeric',
            'IdSexo' => ['required',new OptionSelect],
            'Correo' => ['required','email'],
            'LugarOrigen' => 'required',
            'TipoSangre' => 'required',
            'Foto' => 'image|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'Nombre.required' => 'El :attribute es requerido',
            'ApellidoPaterno.required' => 'El :attribute es requerido',
            'ApellidoMaterno.required' => 'El :attribute es requerido',
            'FechaNacimiento.required' => 'El :attribute es requerido',
            'Telefono.required' => 'El :attribute es requerido',
            'Telefono.numeric' => 'El :attribute debe ser numeros',
            'Correo.required' => 'El :attribute es requerido',
            'Correo.email' => 'El :attribute debe tener el formato correcto',
            'LugarOrigen.required' => 'El :attribute es requerido',
            'TipoSangre.required' => 'El :attribute es requerido',
            'Foto.image' => 'Debe ser un archivo tipo imagen',
            'Foto.max' => 'La :attribute como limite debe ser menor a 2GB',
            
        ];
    }
}
