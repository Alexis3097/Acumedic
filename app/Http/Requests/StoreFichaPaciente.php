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
            'Peso' =>   'nullable|numeric',
            'Talla' =>  'nullable|numeric',
            'SPO2' =>   'nullable|numeric',
            'FC' =>     'nullable|numeric',
            'FR' =>     'nullable|numeric',
            'TA' =>     'nullable|numeric',
            'Dextrosis' => 'nullable|numeric',
        ];
    }

    public function messages()
    {
        return [
            'Peso.numeric' => 'El campo :attribute debe ser tipo numerico',
            'Talla.numeric' => 'El campo :attribute debe ser tipo numerico',
            'SPO2.numeric' => 'El campo :attribute debe ser tipo numerico',
            'FC.numeric' => 'El campo :attribute debe ser tipo numerico',
            'FR.numeric' => 'El campo :attribute debe ser tipo numerico',
            'TA.numeric' => 'El campo :attribute debe ser tipo numerico',
            'Dextrosis.numeric' => 'El campo :attribute debe ser tipo numerico',
            
        ];
    }
}
