<?php

namespace App\Http\Requests;

use App\Rules\OptionSelect;
use App\Rules\FechaMenorAHoy;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAcount extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'ApellidoPaterno' => 'required',
            'ApellidoMaterno' => 'required',
            'FechaNacimiento' => ['required',new FechaMenorAHoy],
            'Telefono' => 'required|numeric',
            'IdSexo' => ['required',new OptionSelect],
            'email' => ['required','email'],
            'Foto' => 'image|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El :attribute es requerido',
            'ApellidoPaterno.required' => 'El :attribute es requerido',
            'ApellidoMaterno.required' => 'El :attribute es requerido',
            'FechaNacimiento.required' => 'El :attribute es requerido',
            'Telefono.required' => 'El :attribute es requerido',
            'Telefono.numeric' => 'El :attribute debe ser numeros',
            'email.required' => 'El :attribute es requerido',
            'email.email' => 'El :attribute debe tener el formato correcto',
            'Foto.image' => 'Debe ser un archivo tipo imagen',
            'Foto.max' => 'La :attribute como limite debe ser menor a 2GB',
            
        ];
    }
}
