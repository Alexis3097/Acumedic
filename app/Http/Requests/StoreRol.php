<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRol extends FormRequest
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
            'Rol'=>'required|max:190'
        ];
    }

    public function messages()
    {
        return [
            'Rol.required'=>'El :attribute es requerido',
            'Rol.max' => 'Solo puedes agregar 190 caracteres',
        ];
    }
}
