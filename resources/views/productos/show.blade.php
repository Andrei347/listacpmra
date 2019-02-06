@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-sm-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGvo_pIfo0SC4Dgiumsz4GKtLL3WZoiLwKayO5QpyMrRhyzjPkyA" style="height:200px"/>
        </div>
        <div class="col-sm-8">
            <h1>{{$producto[0]}}</h1>
            <h2>{{$producto[1]}}</h2>
            <a class="btn btn-success" href="{{ action('ProductosController@getIndex') }}">Volver al listado</a>
            <a class="btn btn-warning" href="{{ url('/productos/edit/'. $id ) }}">Editar</a>
            <a class="btn btn-danger" href="#">Pendiente de compra</a>
        </div>
    </div>

@stop