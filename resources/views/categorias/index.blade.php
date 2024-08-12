@extends('layout')

@section('title')
    Registro de Categorías
@stop

@section('content')
    <h1 class="text-center">Categorías</h1>
    <a href="{{route('categorias.create')}}" class="btn btn-success">Nuevo</a>
@stop
