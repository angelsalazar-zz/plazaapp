<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Closure;

class isAdmin
{
    /* referencia al objeto Guard */
    protected $auth;
    /* constructor */
    /**
     * @param Guard  $auth -> permite el acceso al usuario (saber si está logueado o no)
     * */
    public function __construct(Guard $auth){
        $this->auth = $auth;
    }
    /**
     * Filtra si el usuario loggeado es admin, si no los es,
     * redirige a home
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /* Si no es adminitrador */
        if($this->auth->user()->email != 'admin@plazaapp.com'){
            /* redirige a home */
            return redirect('home');
        }
        return $next($request);
    }
}
