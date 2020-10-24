<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\FechaMenorAHoy;
use App\Rules\FechaMayorAHoy;
use App\Rules\OptionSelect;
class StoreCita extends FormRequest
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
            'Nombre' => 'required',
            'ApellidoPaterno' => 'required',
            'ApellidoMaterno' => 'required',
            'Horario' => ['required',new OptionSelect],
            'TipoConsulta' => [new OptionSelect],
            'Telefono' => 'required|numeric',
            'Fecha' => ['required',new FechaMayorAHoy],
        ];
    }

    public function messages()
    {
        return [
            'Nombre.required' => 'El :attribute es requerido',
            'ApellidoPaterno.required' => 'El :attribute es requerido',
            'ApellidoMaterno.required' => 'El :attribute es requerido',
            'Horario.required' => 'El :attribute es requerido',
            'Telefono.numeric' => 'El :attribute debe ser de tipo numerico',
            'Fecha.required' => 'El :attribute es requerido',
            
        ];
    }
}
