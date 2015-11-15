<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Product;
use App\TestPost;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /*  no requiere validación para el contenido de este controlador */
    /** Muestra la vista de home
     *
    **/
    public function home()
    {
        /* obtiene de la tabla advertisements, los banner que han sido habilitados */
        $currentAds = Advertisement::where('enabled','=','true')->get();
        /* obtiene de la tabla products, los productos que han sido habilitados */
        /* paginate(), indica que vamos a mostrar los productos de 6 en 6 */
        $availableProducts = Product::where('enabled','=','true')->paginate(6);
        /* Indiciamos que el URL a usar para la paginación es home (se espera plazaapp/home/?page=1) */
        $availableProducts->setPath('home');
        /* retorna la vista de home con los banner y productos que previamiente fueron habilitados */
        return view('pages.home')->with(['currentAds'=> $currentAds,'availableProducts' => $availableProducts]);
    }
    /**
     * falta por implementar, no se usa por el momento
     *
     **/
    public function categories()
    {
        return view('arrangements.index');
    }

    /**
     *  Muestra la vista de blog
     *
     */
    public function blog(){
        /* selecciona records de la tabla testposts que están habilitados */
        /* paginate() especifica que los posts se mostraran de 5 en 5 */
        $recentsPosts = TestPost::where('enabled','=','true')->paginate(5);
        /* Indiciamos que el URL a usar para la paginación es blog (se espera plazaapp/blog/?page=1) */
        $recentsPosts->setPath('blog');
        /* selecciona los records de la tabla testpost que VIP (publicaciones del mesa) */
        /* latest()  ordena los posts del mas reciente al mas antiguo */
        $vipPosts = TestPost::where('vippost','=','true')->latest()->get();
        /* retorna la vista de blog con los posts hablitados y posts VIP (publicación del mesa) */
        return view('pages.blog')->with(['recentsPosts' => $recentsPosts,'vipPosts' => $vipPosts]);
    }

    /**
     * Muestra la vista de a cerca de
     **/
    public function about()
    {
        /* retorna la vista de a  cerca de */
        return view('pages.about');
    }
    /**
     * Muestra la vista de contacto
    **/
    public function contact()
    {
        /* retorna la vista de contacto */
        return view('pages.contact');
    }

}
