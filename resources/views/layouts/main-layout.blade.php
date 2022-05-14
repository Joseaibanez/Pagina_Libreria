<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page-title')</title>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <h1>Libreria</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost:8000">Página principal</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="http://localhost:8000/productos">Venta de productos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="http://localhost:8000/info">Información de la empresa</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="http://localhost:8000/work">Trabaja con nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="http://localhost:8000/login">Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="#">Registrarse</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        @yield('content-area')
    </div>
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Jose Antonio Ibáñez DWES
        </div>
    </footer>
    @yield('js')
</body>
</html>
