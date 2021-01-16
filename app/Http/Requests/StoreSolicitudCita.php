<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSolicitudCita extends FormRequest
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
            'NombreCompleto'=> 'required|max:190',
            'Correo'=> 'required|email:rfc|max:190',
            'Ciudad'=> 'required|max:190',
            'Telefono'=> 'required|max:190',
        ];
    }
    public function messages()
    {
        return [
            'NombreCompleto.required'=> 'El nombre es requerido',
            'NombreCompleto.max'=> 'Solo puedes agregar 190 caracteres',
            'Correo.required'=> 'El Correo es requerido',
            'Correo.email'=> 'Correo invalido',
            'Correo.max'=> 'Solo puedes agregar 190 caracteres',
            'Ciudad.required'=> 'La Ciudad es requerido',
            'Ciudad.max'=> 'Solo puedes agregar 190 caracteres',
            'Telefono.required'=> 'El Telefono es requerido',
            'Telefono.max'=> 'Solo puedes agregar 190 caracteres',
        ];
    }
}
