<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Message;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class MessageController extends Controller
{

    /*  no requiere validación para el contenido de este controlador */
    /**
     * No se usa
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * Almacena un nuevo mensaje en nuestra tabla messages
     *
     * @param  MessageRequest  $request -> valida los campos requeridos para crear un mensaje
     * @return \Illuminate\Http\Response
     */
    public function store(MessageRequest $request)
    {
        /* $request->all()  trae la información que se ingresó en la forma   */
        /* Message::create()  crea el nuevo record y lo almacena en la tabla messages */
        Message::create($request->all());
        /* Feedback para el usuario, le indiciamos que su mensaje a sido enviados */
        Session::flash('flash_message','Ha enviado un mensaje');
        /* redirige a la pagina de contacto y muestra el Session::flash */
        return redirect('contact');
    }

    /**
     * No se usa
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * No se usa
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * No se usa
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
