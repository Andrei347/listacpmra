<?php

Route::group(['middelware'=>'auth'], function() {

    Route::get('/', 'HomeController@index');

    Route::group(['prefix' => 'productos'], function () {

        Route::get('/', 'ProductosController@getIndex');

        Route::get('/show/{id}', 'ProductosController@getShow');

        Route::get('/create', 'ProductosController@getCreate');

        Route::post('/create', 'ProductosController@postCreate');

        Route::get('edit/{id}', 'ProductosController@getEdit');

        Route::put('edit/{id}', 'ProductosController@putEdit');

        Route::put('changePendiente/{id}', 'ProductosController@changePendiente');

    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
