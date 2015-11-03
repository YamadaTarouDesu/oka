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
  Route::get('/', 'IndexController@Index');
  Route::controller('index', 'IndexController');
  Route::get('/{id}', 'IndexController@Index');
  Route::get('detail/{id}', 'DetailController@Index');
  Route::controller('search', 'SearchController');
  Route::get('search/{value}', 'SearchController@Index');