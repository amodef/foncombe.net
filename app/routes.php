<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', function()
{
  return View::make('home');
}]);

Route::resource('city', 'CityController');

Route::resource('ally', 'AllyController', ['only' => ['show', 'create', 'store']]);

Route::resource('player', 'PlayerController', ['only' => ['show', 'create', 'store']]);