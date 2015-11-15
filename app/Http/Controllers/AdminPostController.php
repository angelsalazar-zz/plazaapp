<?php

namespace App\Http\Controllers;

use App\Post;
use App\TestPost;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminPostController extends Controller
{
    /** VALIDACIÓN  **/
    public function __construct()
    {
        /** valida si el usuario hizo login **/
        $this->middleware('auth');
        /**  valida si el usuario es el administrador **/
        $this->middleware('isAdmin');
        /** Si no hizo login y no es administrador, no tiene acceso
         *  a los métodos, index, show, update y delete
         *  */
    }
    /**
     * Despliega el listado de todos las publicaciones
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Obtiene todos los records de nuestra tabla testposts */
        /* paginate($ int) permite desplegar cierta cantidad de cantidad de publicaciones, en este caso 10 */
        $posts = TestPost::paginate(10);
        /* Indiciamos que el URL a usar para la paginación es pts (se espera: plazaapp/pts/?page=1) */
        $posts->setPath('pts');
        /* retorna una vista con todos las publicaciones */
        return view('adminposts.index')->with('posts',$posts);
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
     * Despliega una publicación en específico, basado en su id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* encuentra el post que haga match en el id que se le indica */
        $post = TestPost::find($id);
        /* retornamos una vista con la publicación que buscamos */
        return view('adminposts.show')->with('post',$post);
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
     * Actuliza una publicación en especifico, basados en su id
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /* equivale a select * from testposts where id = $id */
        $post = TestPost::find($id);
        /* $request->all() trae todos los datos que fueron ingresados en la forma */
        /* $posts->fill() Actualiza sólo los campos que se encuentran en $request->all() */
        $post->fill($request->all());
        /* guarda los cambios efectuados */
        $post->save();
        /* redirige al listado de publicaciones */
        return redirect('pts');
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
