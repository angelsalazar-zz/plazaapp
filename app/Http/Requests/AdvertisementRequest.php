<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdvertisementRequest extends Request
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
     * Valida que campos son requeridos para crear un nuevo advertisement
     *
     * @return array
     */
    public function rules()
    {
        return [
            'img_url' => 'required',
            'enabled' => 'required|string',
            'description' => 'required'
        ];
    }
}
