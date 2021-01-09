<?php

namespace App\Http\Requests;

use App\Rules\CantidadProducto;
use Illuminate\Foundation\Http\FormRequest;

class StoreOrdenDeCompra extends FormRequest
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
            'NombreCompleto' => 'required|max:190',
            'Correo' => 'required|max:190|email:rfc',
            'Telefono' => 'required|max:190',
            'Cantidad' => ['required','numeric', new CantidadProducto],
            'Estado' => 'required|max:190',
            'Municipio' => 'required|max:190',
            'Colonia' => 'required|max:190',
            'Calle' => 'required|max:190',
        ];
    }

    public function messages(){
        return [
            'NombreCompleto.required' =>'Tu nombre es requerido',
            'NombreCompleto.max' =>'Solo puedes agregar 190 caracteres',
            'Correo.required' =>'Tu correo es requerido',
            'Correo.max' =>'Solo puedes agregar 190 caracteres',
            'Correo.email' =>'Debes agregar un correo valido',
            'Telefono.required' =>'Tu teléfono es requerido',
            'Telefono.max' =>'Solo puedes agregar 190 caracteres',
            'Cantidad.required' =>'la cantidad es requerida',
            'Cantidad.numeric' =>'La cantidad debe ser tipo numerico',
            'Estado.required' =>'Tu estado es requerido',
            'Estado.max' =>'Solo puedes agregar 190 caracteres',
            'Municipio.required' =>'Tu municipio es requerido',
            'Municipio.max' =>'Solo puedes agregar 190 caracteres',
            'Colonia.required' =>'Tu colonia es requerida',
            'Colonia.max' =>'Solo puedes agregar 190 caracteres',
            'Calle.required' =>'Tu calle es requerida',
            'Calle.max' =>'Solo puedes agregar 190 caracteres',
        ];
    }
}
