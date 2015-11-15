<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Http\Requests\AdvertisementRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminAdvertisementController extends Controller
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
     * Despliega la lista de todas los banner que se encuentra en nuestra tabla Advertisements
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* equivale a select * from advertisements */
        $advertisements = Advertisement::all();
        /* Despliego la vista con el arreglo de advertisemets */
        return view('advertisements.index')->with('advertisements',$advertisements);
    }

    /**
     * Muestra la forma para crear un nuevo banner
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* muestra la vista de la forma */
        return view('advertisements.create');
    }

    /**
     * Guarda el nuevo banner
     *
     * @param  AdvertisementRequest  $request -> valida los campos que son requeridos para crear un nuevo banner
     * @return \Illuminate\Http\Response
     */
    public function store(AdvertisementRequest $request)
    {
        /* equivale al query insert  */
        /* $request->all() trae los datos que pusimos en nuestra forma */
        Advertisement::create($request->all());
        /* redirige al listado de banners */
        return redirect('advertisements');
    }

    /**
     * Despliega una banner en especifico basado en su $id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* equivale a select * from advertisemets where id = $id */
        $advertisement = Advertisement::find($id);
        /* retorna una vista con el arreglo de datos del banner que busco */
        return view('advertisements.show')->with('advertisement',$advertisement);
    }

    /**
     * Muestra la forma con los datos del banner, para poderlo editar
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* equivale a select * from advertisemets where id = $id */
        $advertisement = Advertisement::find($id);
        /* retorna la forma para editar con los datos del banner */
        return view('products.edit')->with('product',$advertisement);
    }

    /**
     * Actualiza la información del Banner
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /* equivale a select * from advertisemets where id = $id */
        $advertisement = Advertisement::find($id);
        /* $request->all() trae todos los datos que fueron ingresados en la forma */
        /* $advertisement->fill() Actualiza sólo los camops que se encuentran en $request->all() */
        $advertisement->fill($request->all());
        /* guarda los cambios, que se efectuaron */
        $advertisement->save();
        /* redirige al listado de banners */
        return redirect('advertisements');
    }

    /**
     * Borra un banner en específico, basado en su id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* equivale a select * from advertisemets where id = $id */
        $advertisement = Advertisement::find($id);
        /* elimina la información del banner */
        $advertisement->delete();
        /* redirige al listado de banners */
        return redirect('advertisements');
    }
}
