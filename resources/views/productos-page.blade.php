@extends ('layouts.main-layout')
@section ('page-title', 'Libreria')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">
@endsection

@section ('content-area')
<h1>PAGINA para venta de productos</h1>
<br>
<table id="tablaProductos" class="table table-striped">
    <thead class="bg-secondary text-white">
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Género</th>
            <th>Autor</th>
            <th>Precio</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->titulo }}</td>
                <td>{{ $producto->genero }}</td>
                <td>{{ $producto->autor }}</td>
                <td class="text-nowrap">@priceformat($producto->precio)</td>
                <td>
                    <a href="{{ route('productos.show', ['producto'=>$producto]) }}">
                        <span class="material-icons">search</span>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@section('js')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#tablaProductos').DataTable();
    });
</script>
@endsection
@endsection
