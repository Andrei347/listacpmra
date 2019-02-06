@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Añadir producto
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ url('productos/create') }}" method="POST">
                        <input type="hidden" name="oculto" id="oculto" class="form-control" value='{{method_field('PUT')}}'>
                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nomnre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="number"  name="precio" id="precio">
                        </div>

                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <input type="text" name="Categoria" id="categoria">
                        </div>

                        <div class="form-group">
                            <label for="img">Imagen</label>
                            <input type="text" name="imagen" id="img">
                        </div>

                        <div class="form-group">
                            <label for="desc">Descripcion</label>
                            <textarea name="descripcion" id="desc" class="form-control" rows="5"></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar producto
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@stop