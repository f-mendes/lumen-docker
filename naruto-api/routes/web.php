<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/



$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/batata', function () use ($router) {
    return ['id'=>'123'];
});

$router->group(['prefix'=>'api'],function () use($router){
    $router->group(['prefix'=>'vila'],function () use($router){
        $router->post('', 'VilasController@store');
        $router->get('', 'VilasController@index');
        $router->get('{id}', 'VilasController@show');
        $router->put('{id}', 'VilasController@update');
        $router->delete('{id}', 'VilasController@destroy');

        $router->get('{vila_id}/clas','ClasController@buscaPorCla');
    });

    $router->group(['prefix'=>'cla'],function () use($router){
        $router->get('','ClasController@index');
        $router->post('','ClasController@store');
        $router->get('{id}','ClasController@show');
        $router->put('{id}','ClasController@update');
        $router->delete('{id}','ClasController@destroy');
        $router->get('{cla_id}/personagens','PersonagensController@buscaPorCla');
    });

    $router->group(['prefix'=>'personagen'],function () use($router){
        $router->get('','PersonagensController@index');
        $router->post('','PersonagensController@store');
        $router->get('{id}','PersonagensController@show');
        $router->put('{id}','PersonagensController@update');
        $router->delete('{id}','PersonagensController@destroy');
    });
});


