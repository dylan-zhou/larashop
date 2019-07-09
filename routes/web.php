<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Routing\Router;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', 'TestController@index');
Route::get('/test/get', 'TestController@get');

Route::group([
    'prefix'        => config('yzapi.route.prefix'),
    'namespace'     => config('yzapi.route.namespace'),
], function (Router $router) {


    // getinfo
    $router->get('/sr/user', 'SrController@user');

    // fans
    $router->get('/sr/fans', 'SrController@fans');

    // sr入职
    $router->get('/sr/update', 'SrController@update');

    // sr入职
    $router->get('/sr/on', 'SrController@on');

    // sr离职
    $router->get('/sr/off', 'SrController@off');
});

