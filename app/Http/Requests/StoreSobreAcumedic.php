<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSobreAcumedic extends FormRequest
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
        'Titulo1'=> 'required|max:190',
        'Titulo2'=> 'max:190',
        'Informacion1'=> 'required',
        'Foto'=> 'image|max:2048',
        'TituloImagen'=> 'required|max:190',
        'TextoAlterno'=> 'required|max:190',
        ];
    }

    public function messages()
    {
        return [
            'Titulo1.required' => 'El titulo es requerido',
            'Informacion1.required' => 'La informacion es requerida',
            'Foto.image' => 'Debe subir una imagen',
            'Foto.max' => 'La foto como limite debe ser menor a 2GB',
            'TituloImagen.required' => 'El titulo es requerido',
            'TextoAlterno.required' => 'El texto alterno es requerido',

            'Titulo1.max' => 'Solo puedes agregar 190 caracteres',
            'Titulo2.max' => 'Solo puedes agregar 190 caracteres',
            'TituloImagen.max' => 'Solo puedes agregar 190 caracteres',
            'TextoAlterno.max' => 'Solo puedes agregar 190 caracteres',
        ];
    }
}
