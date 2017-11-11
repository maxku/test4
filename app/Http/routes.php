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
Route::get('/', 'PagesController@index');
Route::get('/task1', 'PagesController@task1');
Route::get('/task2', 'PagesController@task2');
Route::get('/task3', 'PagesController@task3');
Route::post('/send', 'PagesController@send');



