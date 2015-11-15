<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class TestPost extends Model
{
    /* OBJETO TestPost */
    /* Especifica que tabla se usará para este objeto */
    protected $table = 'testposts';
    /* Especifica los atributos que se pueden llenar y mostrar */
    protected $fillable = ['img_url','description','vippost','enabled'];

    /* mutador para el campo img_url */
    /**
     * @param $img_url -> nombre del archivo que quiere subir
     *
     **/
    public function setImgUrlAttribute($img_url)
    {
        /*
         * protección al actualizar un record
         * si no se quiere actualizar la imagen, no se requiere subir una imagen y guardarla en la carpeta images
         *
         * si creamos un nuevo record,
         *  AdvertisemetRequest validará que se quiere subir una imagen para crear dicho record
         */
        if(!empty($img_url)) {
            /* concatena los segundos con el nombre del archivo que se subío para evitar overides */
            $name = Carbon::now()->second . $img_url->getClientOriginalName();
            /* renombra el archivo */
            $this->attributes['img_url'] = $name;
            /* almacena la imagen en nuestra caperta images */
            /* \Storage::disk('local') =  ruta de la carpeta images */
            \Storage::disk('local')->put($name, \File::get($img_url));
        }
    }


    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
