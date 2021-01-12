<?php

namespace App\Http\Requests;

use App\Rules\validatePassword;
use Illuminate\Foundation\Http\FormRequest;

class updatePasswordAcount extends FormRequest
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
            'passwordActual' => ['required',new validatePassword,'max:190'],
            'password' => 'required|confirmed|min:6|max:190',
            'password_confirmation' => 'required|max:190',
        ];
    }

    public function messages()
    {
        return [
            'password.confirmed' => 'Las contraseñas no coinciden',
            'password.required' => 'La contraseña es requerida',
            'password.min' => 'La contraseña debe tener minimo 6 caracteres',
            'password_confirmation.required' => 'La contraseña es requerida',
            'passwordActual.required' => 'La contraseña actual es requerida',

            'passwordActual.max' => 'Solo puedes agregar 190 caracteres',
            'password.max' => 'Solo puedes agregar 190 caracteres',
            'password_confirmation.max' => 'Solo puedes agregar 190 caracteres',
            
        ];
    }
}
