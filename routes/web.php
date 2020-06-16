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

$router->Post('/produk', 'ProdukController@create');
$router->Get('/produk', 'ProdukController@index');
$router->Get('/produk/{id}', 'ProdukController@show');
$router->Put('/produk/{id}', 'ProdukController@update');
$router->Delete('/produk/{id}', 'ProdukController@destroy');

$router->Post('/register', 'UserController@register');
$router->Post('/login', 'UserController@login');


