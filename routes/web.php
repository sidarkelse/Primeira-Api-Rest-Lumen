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
    return 'Primeira API REST com o lumen...'.$router->app->version();
}); 
 
$router->group(['prefix'=>'cursos'], function() use($router){
 
    $router->get('/','CursoController@index');
    $router->get('/{cursos}', 'CursoController@show');
    
    $router->post('/','CursoController@store');
    $router->put('/{cursos}','CursoController@update');
    $router->delete('/{cursos}','CursoController@destroy');
    /* 
     Recurso: Curso
        Endpoint:/cursos
        Get, POST,PUT/PATCH,DELETE


    */

  
});

