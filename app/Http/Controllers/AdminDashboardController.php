<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    /** VALIDACIÓN  **/
    public function __construct(){
        /** valida si el usuario hizo login **/
        $this->middleware('auth');
        /**  valida si el usuario es el administrador **/
        $this->middleware('isAdmin');
        /** Si no hizo login y no es administrador, no tiene acceso
         *  al método dashboard
         *  */
    }

    /**
     * Despliega la interfaz para el dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard(){
        /* Selecciona todos los mensajes de la tabla messages que no han sido vistos */
        $newMgs =  Message::where('seen','=','false')->get();
        /* Obtiene el número de mensajes que no han sido vistos */
        $quantity = count($newMgs);
        /* retorno la vista del dashboard, con el número de mensajes nuevos */
        return view('pages.dashboard')->with('quantity',$quantity);
    }

}
