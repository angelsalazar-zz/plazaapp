<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
{
    /**
     *  valida que el usuario pueda hacer una petición.
     *
     * @return bool
     */
    public function authorize()
    {
        /* habilita al user hacer peticiones */
        return true;
    }

    /**
     * Valida que campos son requeridos para crear un nuevo producto
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_name' => 'required|string',
            'enabled' => 'required|string',
            'img_url' => 'required',
            'description' => 'required'
        ];
    }
}
