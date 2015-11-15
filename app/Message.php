<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /* OBJETO MESSAGE */
    /* especifica que tabla se usar para el objeto message */
    protected $table = 'messages';
    /* Especifica los atributos que se pueden llenar y mostrar */
    protected $fillable = ['name','email','phone','message','seen'];

}
