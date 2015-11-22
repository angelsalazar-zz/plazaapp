<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\TestPost;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /** VALIDACIÓN  **/
    public function __construct()
    {
        /** valida si el usuario hizo login **/
        $this->middleware('auth');
        /** Si no hizo login no tiene acceso
         *  a los métodos, index,create, show, store,update y delete
         *  */
    }

    /**
     * Despliega la lista de todas las publicaciones que le pertenecen al usuario loggeado
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Selecciona las publicaciones que el usuario loggueado hizo */
        /* equivale a select * from testposts where user_id = authenticate_user.id */
        /* latest() ordena las publicaciones desde la mas reciente hasta la mas antigua */
        $posts = Auth::user()->posts()->latest()->paginate(3);
        $posts->setPath('posts');
        /* retornamos la vista con todos los posts que le pertenecen al usario logueado */
        return view('posts.all')->with('posts',$posts);
    }

    /**
     * Muestra la forma para crear una publicación
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* retorna la vista para crear una forma */
        return view('posts.create');
    }

    /**
     * Guarda la nueva publicación
     *
     * @param  PostRequest  $request -> valida los campos requeridos para crear una publicación
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        /* crea un nuevo objeto TestPostm con  la información que se ingresó en la forma */
        /* $request->all(), trae la información que se ingreso la forma */
        $newPost = new TestPost($request->all());
        /* especifica a que usuario le pertenece el nuevo posts  y lo guarda en  la tabla testposts */
        Auth::user()->posts()->save($newPost);
        /* Feedback para el usuario, que su publicación será procesada para ver si el contenido es apropiado */
        Session::flash('flash_message','Tu publicación está siendo procesada, para ver si el contenido es apropiado');
        /* redirige al listado de publicaciones realizados por el usuario loggueado */
        return redirect('posts');
    }

    /**
     * Despliega una publicación en específico
     * FALTA POR IMPLEMENTAR
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = TestPost::find($id);
        //dd($post);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Muestra la forma para editar una publicación
     * FALTA POR IMPLEMENTAR
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = TestPost::find($id);
        //dd($post);
        return view('posts.edit')->with('post',$post);
    }

    /**
     * Actualiza una publicación
     * FALTA POR IMPLEMENTAR
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /* equivale a select * from products where id = $id */
        $post = TestPost::find($id);
        /* $request->all() trae todos los datos que fueron ingresados en la forma */
        /* $product->fill() Actualiza sólo los campos que se encuentran en $request->all() */
        $post->fill($request->all());
        /* guarda los cambios */
        $post->save();
        /* redirige al listado de productos */
        return redirect('posts');
    }

    /**
     * Elimina una publicación
     * FALTA POR IMPLEMENTAR
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* encuentra el producto a eliminar */
        $post = TestPost::find($id);
        /* elimina la imagen asociada a dicho producto */
        \Storage::delete($post->img_url);
        /* elimina el producto la tabla products */
        $post->delete();
        /* redirige al listado de productos */
        return redirect('posts');
    }
}
