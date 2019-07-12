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
        'middleware' => ['api.throttle'],
        'limit' => 60,
        'expires' => 5
    ],
    function (Router $api) {
        $api->get('test', 'App\Http\Api\Controllers\TestController@index');
    }
);
