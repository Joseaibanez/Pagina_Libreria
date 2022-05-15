@extends('layouts.main-layout')
@section('page-title', $producto->titulo)
@section('content-area')
    @if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
    <h1>Detalles de {{ $producto->titulo }}</h1>
    <hr>
    <tr></tr>
    <form action="{{route('cart.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="id">Id: </label>
            <input type="number" name="id" class="form-control" id="id" value="{{ $producto->id }}" readonly>
        </div>
        <div class="form-group">
            <label for="name">Título: </label>
            <input type="text" name="name" class="form-control" id="titulo" value="{{ $producto->titulo }}" readonly>
        </div>
        <div class="form-group">
            <label for="genero">Genero: </label>
            <input type="text" name="genero" class="form-control" id="genero" value="{{ $producto->genero }}" readonly>
        </div>
        <div class="form-group">
            <label for="autor">Autor: </label>
            <input type="text" name="autor" class="form-control" id="autor" value="{{ $producto->autor }}" readonly>
        </div>
        <div class="form-group">
            <label for="price">Precio: </label>
            <input type="number" name="price" class="form-control" id="price" value="{{ $producto->precio }}" readonly>
        </div>
        <div class="form-group">
            <label for="quantity">Cantidad: </label>
            <input type="number" name="quantity" class="form-control" id="quantity" value="1" min="1">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Agregar al carrito</button>
    </form>
    <hr>
    <h2><a href="{{ route('productos.index') }}">Volver</a></h2>
@endsection
