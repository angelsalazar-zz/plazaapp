<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Message;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class AdminMessageController extends Controller
{
    /** VALIDACIÓN  **/
    public function __construct()
    {
        /** valida si el usuario hizo login **/
        $this->middleware('auth');
        /**  valida si el usuario es el administrador **/
        $this->middleware('isAdmin');
        /** Si no hizo login y no es administrador, no tiene acceso
         *  a los métodos, index,create, show, store,update y delete
         *  */

    }
    /**
     * Despliega el listado de mensajes nuevos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Selecciona los mensajes que no han sido vistos del mas reciente al mas antiguo*/
        $messages = Message::where('seen','=','false')->latest()->get();
        /* retorna vista con los mensajes que no han sido vistos */
        return view('adminmessages.index')->with('messages',$messages);
    }

    /**
     * No se usa
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * No se usa
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * No se usa
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Muestra un mensaje en especifico, basado en su id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* encuentra el mensaje basado en su id (select * from messages where id = $id) */
        $message = Message::find($id);
        /* Retorna una vista con el mensaje que se busca */
        return view('adminmessages.show')->with('message',$message);
    }

    /**
     * Actualiza la formación de un mensaje es específico
     *
     * @param  MessageRequest  $request -> valida los campos requeridos para actualizar un mensaje
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MessageRequest $request, $id)
    {
        /* encuentra el mensaje basado en su id (select * from messages where id = $id) */
        $message = Message::find($id);
        /* $request->all() trae todos los datos que fueron ingresados en la forma */
        /* $message->fill() Actualiza sólo los campos que se encuentran en $request->all() */
        $message->fill($request->all());
        /* guarda los cambios */
        $message->save();
        /* retorno a el listado de mensajes */
        return redirect('msgs');
    }

    /**
     * No se usa
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
