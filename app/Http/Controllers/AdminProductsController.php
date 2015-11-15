<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminProductsController extends Controller
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
     * Despliega la lista de productos que se encuentra en nuestra tabla Products
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Obtiene todos los records de nuestra tabla products */
        /* paginate($ int) permite desplegar cierta cantidad de cantidad de productos, en este caso 10 */
        $products = Product::paginate(10);
        /* Indiciamos que el URL a usar para la paginación es products (se espera plazaapp/products/?page=1) */
        $products->setPath('products');
        /* retorna la vista con todos los productos disponibles */
        return view('products.index')->with('products',$products);
    }

    /**
     * Muestra la forma para crear un nuevo producto
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* retorna la vista con la forma para crear un nuevo producto */
        return view('products.create');
    }

    /**
     * Guarda un nuevo record en nuestra tabla de products
     *
     * @param  ProductRequest  $request -> valida los campos requeridos para crear un nuevo producto
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        /* creaco una nuevo producto */
        /* $request->all() trae la formación que se ingreso en la forma */
        Product::create($request->all());
        /* redirege a el listado de productos */
        return redirect('products');
    }

    /**
     * Muestra un producto en específico, basado en su id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* equivale a select * from products where id = $id */
        $product = Product::find($id);
        /* muestra una vista con el producto que se busca */
        return view('products.show')->with('product',$product);
    }

    /**
     * Muestra la vista para editar un producto en especifico, basado en su id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* equivale a select * from products where id = $id */
        $product = Product::find($id);
        /* despliega la forma para editar un producto, con los datos que tiene actualmente */
        return view('products.edit')->with('product',$product);
    }

    /**
     * Actualiza el producto
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /* equivale a select * from products where id = $id */
        $product = Product::find($id);
        /* $request->all() trae todos los datos que fueron ingresados en la forma */
        /* $product->fill() Actualiza sólo los campos que se encuentran en $request->all() */
        $product->fill($request->all());
        /* guarda los cambios */
        $product->save();
        /* redirige al listado de productos */
        return redirect('products');
    }

    /**
     * Elimina un producto en específico basado en su id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* encuentra el producto a eliminar */
        $product = Product::find($id);
        /* elimina el producto la tabla products */
        $product->delete();
        /* redirige al listado de productos */
        return redirect('products');
    }
}
