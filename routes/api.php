<?php

use Dingo\Api\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
/* @var Router $api */
$api = app(Router::class);

$api->version(
    'v1',
    [
        'namespace'  => 'App\Http\Api\Controllers',
        // 必须加入api 否则Class auth.api does not exist
        'middleware' => ['api.throttle', 'api'],
        'limit'      => 60,
        'expires'    => 5,
    ],
    function (Router $api) {

        // TestController
        $api->get('test', 'TestController@index');


        // AuthController
        //        $api->post('login', 'AuthController@login');
        $api->post('login', ['as' => 'login', 'uses' => 'AuthController@login']);
        $api->post('logout', 'AuthController@logout');
        $api->post('refresh', 'AuthController@refresh');
        $api->post('me', 'AuthController@me');


    }
);
