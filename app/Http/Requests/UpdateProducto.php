<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProducto extends FormRequest
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
            'PrecioCompra' => 'required|numeric|max:190',
            'PrecioPublico' => 'required|numeric|max:190',
            'CodigoBarra' => 'required|max:190',
            'DescripcionCorta' => 'required|max:217',
            'DescripcionLarga' => 'required',
            'Foto1' => 'image|max:2048',
            'Foto2' => 'image|max:2048',
            'Foto3' => 'image|max:2048',
            'Foto4' => 'image|max:2048',

            'Titulo1' => 'required_with:Foto1|required_without:hayFoto1|max:190',
            'TextoAlterno1' => 'required_with:Foto1|required_without:hayFoto1|max:190',

            'Titulo2' => 'required_with:Foto2|required_without:hayFoto2|max:190',
            'TextoAlterno2' => 'required_with:Foto2|required_without:hayFoto2|max:190',

            'Titulo3' => 'required_with:Foto3|required_without:hayFoto3|max:190',
            'TextoAlterno3' => 'required_with:Foto3|required_without:hayFoto3|max:190',

            'Titulo4' => 'required_with:Foto4|required_without:hayFoto4|max:190',
            'TextoAlterno4' => 'required_with:Foto4|required_without:hayFoto4|max:190',
        ];
    }

    public function messages()
    {
        return [
            'Nombre.required' => 'El :attribute es requerido',
            'PrecioCompra.required' => 'El precio de compra es requerido',
            'PrecioCompra.numeric' => 'El precio de compra debe ser numerico',
            'PrecioPublico.required' => 'El precio publico es requerido',
            'PrecioPublico.numeric' => 'El precio publico debe ser numerico',
            'CodigoBarra.required' => 'Debe escribir el codigo/clave',
            'DescripcionCorta.required' => 'La descripcion corta es requerido',
            'DescripcionCorta.max' => 'Maximo 217 caracteres',
            'DescripcionLarga.required' => 'El descripcion larga es requerido',

            'Foto1.image' => 'Debe agregar una imagen',
            'Foto1.max' => 'El tamaño en GB supera lo permitido',
            'Foto2.image' => 'Debe agregar una imagen',
            'Foto2.max' => 'El tamaño en GB supera lo permitido',
            'Foto3.image' => 'Debe agregar una imagen',
            'Foto3.max' => 'El tamaño en GB supera lo permitido',
            'Foto4.image' => 'Debe agregar una imagen',
            'Foto4.max' => 'El tamaño en GB supera lo permitido',

            'Titulo1.required_with' => 'El titulo es requerido',
            'TextoAlterno1.required_with' => 'El texto alternado es requerido',
            'Titulo1.required_without' => 'El titulo es requerido',
            'TextoAlterno1.required_without' => 'El texto alternado es requerido',
            
            'Titulo2.required_with' => 'El titulo es requerido',
            'TextoAlterno2.required_with' => 'El texto alternado es requerido',
            'Titulo2.required_without' => 'El titulo es requerido',
            'TextoAlterno2.required_without' => 'El texto alternado es requerido',

            'Titulo3.required_with' => 'El titulo es requerido',
            'TextoAlterno3.required_with' => 'El texto alternado es requerido',
            'Titulo3.required_without' => 'El titulo es requerido',
            'TextoAlterno3.required_without' => 'El texto alternado es requerido',

            'Titulo4.required_with' => 'El titulo es requerido',
            'TextoAlterno4.required_with' => 'El texto alternado es requerido',
            'Titulo4.required_without' => 'El titulo es requerido',
            'TextoAlterno4.required_without' => 'El texto alternado es requerido',

            'Nombre.max' => 'Solo puedes agregar 190 caracteres',
            'PrecioCompra.max' => 'Solo puedes agregar 190 caracteres',
            'PrecioPublico.max' => 'Solo puedes agregar 190 caracteres',
            'CodigoBarra.max' => 'Solo puedes agregar 190 caracteres',
            'Titulo1.max' => 'Solo puedes agregar 190 caracteres',
            'TextoAlterno1.max' => 'Solo puedes agregar 190 caracteres',
            'Titulo2.max' => 'Solo puedes agregar 190 caracteres',
            'TextoAlterno2.max' => 'Solo puedes agregar 190 caracteres',
            'Titulo3.max' => 'Solo puedes agregar 190 caracteres',
            'TextoAlterno3.max' => 'Solo puedes agregar 190 caracteres',
            'TextoAlterno4.max' => 'Solo puedes agregar 190 caracteres',
            'Rol.max' => 'Solo puedes agregar 190 caracteres',
        ];
    }
}
