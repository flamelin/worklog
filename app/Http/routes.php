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

Route::resource('log', 'LogsController');

Route::group(array('middleware' => 'auth'), function () {
    Route::get('/', 'LogsController@create');
});

Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'), function () {
    Route::get('logs', 'LogsController@index');
    Route::get('logs/author/{id}', 'LogsController@author');

    Route::get('users', 'UsersController@index');
    Route::get('roles', 'RolesController@index');
    Route::get('roles/create', 'RolesController@create');
    Route::post('roles/create', 'RolesController@store');
});

Route::auth();
