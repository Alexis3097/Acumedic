<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEstudioGabinete extends FormRequest
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
            'Url'=>'image|max:2048|required',
            'Nombre'=>'required',
            'Descripcion'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'Url.max'=>'La Foto como limite debe ser menor a 2GB',
            'Url.required'=>'La imagen es requerida',
            'Url.image'=>'Debe subir una imagen',
            'Nombre.required' => 'El :attribute es requerido',
            'Descripcion'=> 'La :attribute es requerido'
        ];
    }
}
