<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuscarRangoFecha extends FormRequest
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
            'Fechas' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'Fechas.required' => 'Necesita agregar un rango de fechas',
        ];
    }
}
