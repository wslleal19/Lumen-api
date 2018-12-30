<?php


$router->get('/', function () use ($router) {
    return $router->app->version();
});


$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

	$api->post('get_user', 'App\Http\Controllers\Api\ApiController@getUser');
	$api->post('get_all_users', 'App\Http\Controllers\Api\ApiController@getAllUsers');
	
});