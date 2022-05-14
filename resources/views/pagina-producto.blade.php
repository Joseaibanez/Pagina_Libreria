@extends('layouts.main-layout')
@section('page-title', $producto->titulo)
@section('content-area')
    <h1>Detalles de {{ $producto->titulo }}</h1>
    <hr>
    <div class="row">
        <div class="col-sm-2">
            <strong class="text-danger">Id: </strong>
        </div>
        <div class="col-sm-10">
            {{ $producto->id }}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <strong class="text-danger">Titulo: </strong>
        </div>
        <div class="col-sm-10">
            {{ $producto->titulo }}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <strong class="text-danger">Genero: </strong>
        </div>
        <div class="col-sm-10">
            {{ $producto->genero }}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <strong class="text-danger">Autor: </strong>
        </div>
        <div class="col-sm-10">
            {{ $producto->autor }}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <strong class="text-danger">Precio: </strong>
        </div>
        <div class="col-sm-10">
            {{ $producto->precio }}
        </div>
    </div>
    <hr>
    <h2><a href="{{ route('productos.index') }}">Volver</a></h2>
    <h2><a href="{{ route('productos.index') }}">Añadir al carrito</a></h2>
@endsection
