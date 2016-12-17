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

$app->get('/', function () use ($app) {
	return view('how-to-use');
});

$app->post('/login', 'LoginController@index');
$app->post('/register', 'UserController@register');
$app->group(['middleware' => 'auth'], function() use ($app) {
	$app->get('/user/{id}', 'UserController@getUser');
	
	$app->get('/tasks', 'TaskController@index');
	$app->get('/tasks/detail/{id}', 'TaskController@detail');
	$app->get('/tasks/{status}', 'TaskController@get');
	$app->post('/tasks', 'TaskController@create');
	$app->put('/tasks/{id}', 'TaskController@update');
	$app->delete('/tasks/{id}', 'TaskController@delete');
});