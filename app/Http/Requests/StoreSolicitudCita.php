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
            'NombreCompleto'=> 'required',
            'Correo'=> 'required',
            'Ciudad'=> 'required',
            'Telefono'=> 'required',
        ];
    }
    public function messages()
    {
        return [
            'NombreCompleto.required'=> 'El nombre es requerido',
            'Correo.required'=> 'El Correo es requerido',
            'Ciudad.required'=> 'La Ciudad es requerido',
            'Telefono.required'=> 'El Telefono es requerido',
        ];
    }
}
