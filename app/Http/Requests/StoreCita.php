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
            'Nombre' => 'required|max:190',
            'ApellidoPaterno' => 'required|max:190',
            'ApellidoMaterno' => 'required|max:190',
            'Horario' => 'required',
            'TipoConsulta' => [new OptionSelect],
            'Telefono' => 'required|numeric|max:190',
            'Fecha' => ['required',new FechaMayorAHoy],
            'IdEstatusConsulta' => 'required',
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
            'IdEstatusConsulta.required' => 'El :attribute es requerido',

            'Nombre.max' => 'Solo puedes agregar 190 caracteres',
            'ApellidoPaterno.max' => 'Solo puedes agregar 190 caracteres',
            'ApellidoMaterno.max' => 'Solo puedes agregar 190 caracteres',
            'Telefono.max' => 'Solo puedes agregar 190 caracteres',
            
        ];
    }
}
