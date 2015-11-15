<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /* OBJETO USER */
    /**
     * Especifica la tabla que se usará para este objeto
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * Especifica los atributos que se pueden llenar y mostrar
     *
     * @var array
     */
    protected $fillable = ['name', 'email','avatar', 'password'];

    /**
     * Especifica los atributos que serán mostrados
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    /**
     * Relación uno a muchos
     * Un User puede tener muchos Posts
    */
    public function posts()
    {
        return $this->hasMany('App\TestPost', 'user_id', 'id');
        //return $this->hasMany('App\Comment', 'foreign_key', 'local_key');
    }
    /*public function setImgUrlAttribute($avatar)
    {
        $name = Carbon::now()->second.$avatar->getClientOriginalName();
        $this->attributes['avatar'] = $name;
        \Storage::disk('local')->put($name,\File::get($avatar));
    }*/
}
