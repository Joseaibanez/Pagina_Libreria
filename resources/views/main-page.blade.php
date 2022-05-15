@extends ('layouts.main-layout')
@section ('page-title', 'Libreria')
@section ('content-area')
<h1>PAGINA PRINCIPAL</h1>
<div id="carrusel">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="https://www.todostuslibros.com/storage/img/home_banners/2-1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://www.todostuslibros.com/storage/img/home_banners/Banner%20d%C3%ADa%20de%20los%20museos%20TTL%20libros%20recomendados.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://www.todostuslibros.com/storage/img/home_banners/banner%20TTL%20libros%20recomendados%20de%20mayo%202022_2.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>
<br><br>
<hr>
<div class="d-flex justify-content-around" id="opciones">
    <div class="card" style="width: 18rem;">
        <img src="https://imagessl.casadellibro.com/t1e/c/63/22.05.10.RecogidaenLibreria.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Compra online</h5>
            <a href="#" class="btn btn-primary">Ver más</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="https://imagessl.casadellibro.com/t1e/c/63/22.02.07.libro%20firmado%20370x200.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Llévate los mejores títulos</h5>
            <a href="#" class="btn btn-primary">Ver libros</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="https://imagessl.casadellibro.com/t1e/c/63/370x200-socio-un-minuto_web.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Hazte socio</h5>
            <a href="#" class="btn btn-primary">Hacerme socio</a>
        </div>
    </div>
</div>
@endsection
