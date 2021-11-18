<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix' => 'auth'], function () use ($router) {
    $router->post('signup', ['uses' => 'AuthController@signup']);
    $router->post('login', ['uses' => 'AuthController@login']);

    $router->group(['middleware' => 'auth'], function () use ($router) {
        $router->get('get', ['uses' => 'AuthController@getAuthUser']);
        $router->group(['prefix' => 'salesrep'], function () use ($router) {
            $router->get('', ['uses' => 'SalesRepController@index']);
            $router->post('', ['uses' => 'SalesRepController@store']);      
        });
    });
});
