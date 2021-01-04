<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInfo extends FormRequest
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
            'Telefono' => 'required',
            'Horario' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'Telefono.required' => 'El :attribute es requerido',
            'Horario.required' => 'El :attribute es requerido',
        ];
    }
}
