<?php

Route::group(array('middleware' => 'auth'), function () {
    Route::resource('log', 'LogsController');
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

Auth::routes();
