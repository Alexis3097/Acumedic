<?php

namespace App\Http\Requests;

use App\Rules\CantidadProducto;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductQuantity extends FormRequest
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
            'Cantidad' => ['required','numeric',new CantidadProducto]
        ];
    }

    public function messages()
    {
        return [
            'Cantidad.numeric' => 'La cantidad debe ser de tipo numerico',
            'Cantidad.required' => 'La cantidad es requerida'
        ];
    }
}
