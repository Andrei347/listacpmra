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

    Route::get('/edit/{id}', 'ProductosController@getEdit');

});