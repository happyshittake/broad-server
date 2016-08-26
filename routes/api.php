<?php

use Dingo\Api\Routing\Router;
use Illuminate\Http\Request;

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

$api = app(Router::class);
$api->version('v1', function (Router $api) {
    $api->group(['namespace' => 'Broad\Http\Controllers\Api\v1'], function (Router $api) {
        $api->get('/roads', 'JalanController@getPaginated');
        $api->post('/roads', 'JalanController@postCreate');
        $api->post('/roads/{jalan}', 'JalanController@getSingle');
    });
});
