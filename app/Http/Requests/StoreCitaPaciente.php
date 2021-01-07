<?php

namespace App\Http\Requests;

use App\Rules\OptionSelect;
use App\Rules\FechaMayorAHoy;
use Illuminate\Foundation\Http\FormRequest;

class StoreCitaPaciente extends FormRequest
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
            'Horario' => 'required',
            'TipoConsulta' => [new OptionSelect],
            'Fecha' => ['required',new FechaMayorAHoy],
            'IdEstatusConsulta' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'Horario.required' => 'El :attribute es requerido',
            'Fecha.required' => 'El :attribute es requerido',
            'IdEstatusConsulta.required' => 'El :attribute es requerido',
            
        ];
    }
}
