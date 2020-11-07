<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFichaPaciente extends FormRequest
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
            'LugarResidencia' => 'required',
            'Direccion' => 'required',
            'Peso' => 'required|numeric',
            'Talla' => 'required|numeric',
            'SPO2' => 'required|numeric',
            'FC' => 'required|numeric',
            'FR' => 'required|numeric',
            'TA' => 'required|numeric',
            'Dextrosis' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'LugarResidencia.required' => 'El campo :attribute es requerido',
            'Direccion.required' => 'El campo :attribute es requerido',
            'Peso.required' => 'El campo :attribute es requerido',
            'Peso.numeric' => 'El campo :attribute debe ser tipo numerico',
            'Talla.required' => 'El campo :attribute es requerido',
            'Talla.numeric' => 'El campo :attribute debe ser tipo numerico',
            'SPO2.required' => 'El campo :attribute es requerido',
            'SPO2.numeric' => 'El campo :attribute debe ser tipo numerico',
            'FC.required' => 'El campo :attribute es requerido',
            'FC.numeric' => 'El campo :attribute debe ser tipo numerico',
            'FR.required' => 'El campo :attribute es requerido',
            'FR.numeric' => 'El campo :attribute debe ser tipo numerico',
            'TA.required' => 'El campo :attribute es requerido',
            'TA.numeric' => 'El campo :attribute debe ser tipo numerico',
            'Dextrosis.required' => 'El campo :attribute es requerido',
            'Dextrosis.numeric' => 'El campo :attribute debe ser tipo numerico',
            
            
        ];
    }
}
