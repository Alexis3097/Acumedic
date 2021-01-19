<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\OptionSelect;
use App\Rules\FechaMenorAHoy;
class StorePaciente extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

  
    public function rules(): array
    {
        return [
            'Nombre' => 'required|max:190',
            'ApellidoPaterno' => 'required|max:190',
            'ApellidoMaterno' => 'required|max:190',
            'FechaNacimiento' => ['required',new FechaMenorAHoy],
            'Telefono' => 'required|numeric',
            'IdSexo' => ['required',new OptionSelect],
            'Correo' => ['required','email','max:190'],
            'LugarOrigen' => 'required|max:190',
            'TipoSangre' => 'required|max:190',
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

            'Nombre.max' => 'Solo puedes agregar 190 caracteres',
            'ApellidoPaterno.max' => 'Solo puedes agregar 190 caracteres',
            'ApellidoMaterno.max' => 'Solo puedes agregar 190 caracteres',
            'Telefono.max' => 'Solo puedes agregar 190 caracteres',
            'Correo.max' => 'Solo puedes agregar 190 caracteres',
            'LugarOrigen.max' => 'Solo puedes agregar 190 caracteres',
            
        ];
    }
}
