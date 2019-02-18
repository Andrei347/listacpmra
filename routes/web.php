<?php

Route::group(['middelware'=>'auth'], function() {

    Route::get('/', 'HomeController@index');

    Route::group(['prefix' => 'productos'], function () {

        Route::get('create', 'ProductosController@getCreate');

        Route::get('categorias', 'ProductosController@getCategorias');

        Route::get('/show/{id}', 'ProductosController@getShow');

        Route::post('/create', 'ProductosController@postCreate');

        Route::get('edit/{id}', 'ProductosController@getEdit');

        Route::put('edit/{id}', 'ProductosController@putEdit');

        Route::put('changePendiente/{id}', 'ProductosController@changePendiente');

        Route::get('/{cat?}', 'ProductosController@getIndex');

    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
