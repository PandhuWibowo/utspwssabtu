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

$router->get('/key', function () {
    return str_random(32);
});


$router->get('/categories', ['uses' => 'CategoryController@index']);
$router->get('/categories/{id}', ['uses' => 'CategoryController@onecategory']);
$router->post('categories', ['uses' => 'CategoryController@create']);
$router->delete('categories/{id}', ['uses' => 'CategoryController@delete']);
$router->put('categories/{id}', ['uses' => 'CategoryController@update']);
$router->delete('books/{id}', ['uses' => 'CategoryController@deletebook']);
$router->get('/books', ['uses' => 'CategoryController@query']);
$router->get('/books/{id}', ['uses' => 'CategoryController@querydetails']);
$router->put('books/{id}', ['uses' => 'CategoryController@updatebook']);
$router->post('books', ['uses' => 'CategoryController@createbook']);