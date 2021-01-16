<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiciosSeleted extends FormRequest
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
            'servicios'  => 'required|array|min:6|max:6',
        ];
    }

    public function messages()
    {
        return [
            'servicios.required'  => 'Debe selecionnar 6 servicios',
            'servicios.array'  => 'Debe selecionnar 6 servicios',
            'servicios.min'  => 'Debe selecionnar 6 servicios',
            'servicios.max'  => 'Debe selecionnar 6 servicios',
        ];
    }
}
