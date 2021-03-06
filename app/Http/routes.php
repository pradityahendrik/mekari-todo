<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('todo');
});

Route::group(['prefix' => 'api'], function(){
    Route::get('/todo', 'TodoController@list');
    Route::post('/todo', 'TodoController@add');
    Route::post('/todo/delete', 'TodoController@deleteTodo');
});