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

Route::get('/', 'VendrediController@index');

Route::get('/select-game', array('as' => 'game.select', 'uses' => 'GameController@index') );

Route::get('/game', array('as' => 'game.show', 'uses' => 'GameController@show') );

Route::post('/game', array('as' => 'game.create', 'uses' => 'GameController@create') );

//Route::resource('game', 'GameController');
