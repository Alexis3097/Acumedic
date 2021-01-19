<?php

namespace App\Http\Requests;
use App\Rules\SelectRole;
use App\Rules\OptionSelect;
use App\Rules\FechaMenorAHoy;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuario extends FormRequest
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
            'name' => 'required|max:190',
            'ApellidoPaterno' => 'required|max:190',
            'ApellidoMaterno' => 'required|max:190',
            'FechaNacimiento' => ['required',new FechaMenorAHoy],
            'Telefono' => 'required|numeric',
            'IdSexo' => ['required',new OptionSelect],
            'Rol' => ['required',new  SelectRole],
            'email' => ['required','email','max:190'],
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

            'name.max' => 'Solo puedes agregar 190 caracteres',
            'ApellidoPaterno.max' => 'Solo puedes agregar 190 caracteres',
            'ApellidoMaterno.max' => 'Solo puedes agregar 190 caracteres',
            'email.max' => 'Solo puedes agregar 190 caracteres',
            
        ];
    }
}
