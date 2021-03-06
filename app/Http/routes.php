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

$app->get('/', 'HomeController@index');
$app->get('/latest-jpg', ['uses' => 'WebcamController@still', 'as' => 'cam.url.latest']);
$app->post('/save/tumblr', ['uses' => 'WebcamController@uploadTumblr', 'as' => 'cam.upload.tumblr']);
