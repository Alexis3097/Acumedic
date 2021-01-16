<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServicio extends FormRequest
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
            'Precio' => 'required|numeric',
            'DescripcionCorta' => 'required|max:200',
            'DescripcionLarga' => 'required',
            'Logo' => 'required|image|max:2048',
            'TextoLogo' => 'required',
            'Imagen' => 'required|image|max:2048',
            'TextoImagen' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'Nombre.required' => 'El :attribute es requerido',
            'Precio.required' => 'El :attribute es requerido',
            'Precio.numeric' => 'El :attribute debe ser numerico',
            'DescripcionCorta.required' => 'La descripcion es requerida',
            'DescripcionCorta.max' => 'La descripcion debe tener como maximo 200 caracteres',
            'DescripcionLarga.required' => 'La descripcion es requerida',
            'Logo.required' => 'El :attribute es requerido',
            'Logo.image' => 'El :attribute debe ser una imagen',
            'Logo.max' => 'El :attribute como limite debe ser menor a 2GB',
            'TextoLogo.required' => 'El texto es requerido',
            'Imagen.required' => 'La imagen es requerida',
            'Imagen.image' => 'Debe ser una imagen',
            'Imagen.max' => 'La :attribute como limite debe ser menor a 2GB',
            'TextoImagen.required' => 'El texto es requerido',
        ];
    }
}
