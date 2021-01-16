<?php

namespace App\Http\Requests;

use App\Rules\NoMenorACero;
use Illuminate\Foundation\Http\FormRequest;

class UpdateInventario extends FormRequest
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
            'Cantidad' => ['required','numeric',new NoMenorACero],
            'StockMinimo' => ['required','numeric',new NoMenorACero],
        ];
    }

    public function messages()
    {
        return [
            'Cantidad.numeric' => 'La cantidad debe ser de tipo numerico',
            'Cantidad.required' => 'La cantidad es requerida',
            'StockMinimo.numeric' => 'El stock debe ser de tipo numerico',
            'StockMinimo.required' => 'El stock es requerido',
        ];
    }
}
