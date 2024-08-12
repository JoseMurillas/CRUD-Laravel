@extends('layout')

@section('title')
    Categoria | Registro
@stop

@section('content')
    <h1 class="text-center">Formulario de Registro</h1>
    <form action="{{ url('categorias') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="nombreCategoria" placeholder="Ingrese el nombre" class="form-control"> <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <button class="btn btn-success ">Enviar</button>
                <a href="{{ url('categorias') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </form>
@stop
