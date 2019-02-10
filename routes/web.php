<?php

Route::get('/', 'HomeController@getHome');

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    return view('logout');
});
Route::group(['prefix' => 'productos'], function () {

    Route::get('/', 'ProductosController@getIndex');

    Route::get('/show/{id}', 'ProductosController@getShow');

    Route::get('/create', 'ProductosController@getCreate');

    Route::post('/create', 'ProductosController@postCreate');

    Route::get('edit/{id}', 'ProductosController@getEdit');

    Route::put('edit/{id}', 'ProductosController@putEdit');

    Route::put('changePendiente/{id}', 'ProductosController@changePendiente');

});