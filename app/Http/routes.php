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

// Get requests
Route::get('/', 'GameController@home');
Route::get('/select-game', array('as' => 'game.select', 'uses' => 'GameController@index'));
Route::get('/game/{game_slot}', array('as' => 'game.show', 'uses' => 'GameController@show'));

// Post requests
Route::post('/game', array('as' => 'game.create', 'uses' => 'GameController@create'));

// Delete requests
Route::delete('/game/{game_slot}', array('as' => 'game.destroy', 'uses' => 'GameController@destroy'));

//Route::resource('game', 'GameController');
