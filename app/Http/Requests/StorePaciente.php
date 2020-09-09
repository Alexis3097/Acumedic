<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaciente extends FormRequest
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
        // 'body.required' => 'A message is required',
    ];
}
}
