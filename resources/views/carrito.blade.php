@extends('layouts.main-layout')
@section('page-title', 'Carrito')
@section('content-area')
    @if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
            </div>
        @endif
    @if (!Cart::isEmpty())
    <table class="table">
        <thead>
            <tr>
                <th sc ope="col">Accion</th>
                <th sc ope="col">Id</th>
                <th scope="col">Titulo</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach (Cart::getContent() as $item)
            <tr>
                <th scope="row">
                    <form method="POST" action="{{route('cart.destroy',$item->id)}}">
                        @method('DELETE')
                        {{ csrf_field() }}
                        <button type="submit">Eliminar</button>
                    </form>
                </th>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->quantity}}</td>
                <td>
                    @foreach ($item->attributes as $key => $attribute)
                    {{$key}}: {{$attribute}}.
                    @endforeach
                </td>
            </tr>
            @endforeach
            <hr>
            <div class="d-flex p-2 bd-highlight">
                <form action="{{ route('cart.clear') }}" method="POST">
                    {{ csrf_field() }}
                    <button class="btn btn-secondary btn-md">Borrar Carrito</button>
                </form>
                <form action="{{ route('cart.checkout') }}" method="POST">
                    {{ csrf_field() }}
                    <button class="btn btn-secondary btn-md">Finalizar compra</button>
                </form>
            </div>
        </tbody>
    </table>
    @else
        <h1>No hay árticulos en la cesta</h1>
        <h2><a href="{{ route('productos.index') }}">Volver a productos</a></h2>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
    @endif
@endsection
