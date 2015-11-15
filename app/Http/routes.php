<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/** RUTAS PÁGINAS ESTÁTICAS **/

Route::get('/', [
    'as' => 'home_path',
    'uses' => 'PagesController@home'
]);
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('home',[
    'as' => 'home_path',
    'uses' => 'PagesController@home'
]);
Route::get('categories',[
    'as' => 'categories_path',
    'uses' => 'PagesController@categories'
]);
Route::get('blog',[
    'as' => 'blog_path',
    'uses' => 'PagesController@blog'
]);
Route::get('contact',[
    'as' => 'contact_path',
    'uses' => 'PagesController@contact'
]);
/** FIN RUTAS PÁGINAS ESTÁTICAS **/



/** RUTAS ADMINSIDE **/
    Route::get('dashboard',[
        'as' => 'dashboard_path',
        'uses' => 'AdminDashboardController@dashboard'
    ]);
    Route::resource('pts', 'AdminPostController');

    Route::resource('msgs', 'AdminMessageController');
    Route::resource('advertisements', 'AdminAdvertisementController');
    Route::resource('products', 'AdminProductsController');
/** FIN RUTAS ADMINSIDE **/



Route::get('about',[
    'as' => 'about_path',
    'uses' => 'PagesController@about'
]);

Route::resource('posts', 'PostController');
Route::resource('messages', 'MessageController',
    ['only' => ['store']
    ]);
/*Route::resource('posts', 'PostController',
    ['only' => ['create', 'store']
    ]);*/
