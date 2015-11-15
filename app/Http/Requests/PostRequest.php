<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request
{
    /**
     * valida que el usuario pueda hacer una petición.
     *
     * @return bool
     */
    public function authorize()
    {
        /* habilita al user hacer peticiones */
        return true;
    }

    /**
     * Valida que campos son requeridos para crear un nueva publicación
     *
     * @return array
     */
    public function rules()
    {
        return [
            'img_url' => 'required|image',
            'description' => 'required'
        ];
    }
}
