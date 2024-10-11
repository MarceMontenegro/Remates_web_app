@extends('adminlte::page')

{{-- @section('title', 'Dashboard')

@section('content_header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <h1>Dashboard</h1>
@stop --}}
@section('content')
<br>
<div class="row">
    <div class="col-lg-12">
        <!-- Carousel -->
        <div id="remateCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#remateCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#remateCarousel" data-slide-to="1"></li>
                <li data-target="#remateCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <!-- Primera imagen -->
                <div class="carousel-item active">
                    <div class="carousel-caption d-block caption-top">
                        <h5>Subasta Exclusiva de Motos</h5>
                        <a href="/register" class="btn btn-primary mt-3">¡Regístrate!</a>
                    </div>
                    <center><img class="d-block w-80 carousel-img" width="1000" src="vendor/adminlte/dist/img/pixelcut-camioneta.jpeg" alt="First slide"></center>
                    <div class="carousel-caption d-none d-md-block">
                        <p>La oportunidad de adquirir tu Crono Base.</p>
                    </div>
                </div>
                <!-- Segunda imagen -->
                <div class="carousel-item">
                    <div class="carousel-caption d-block caption-top">
                        <h5>Subasta Finalizada</h5>
                        <a href="/register" class="btn btn-primary mt-3">¡Regístrate!</a>
                    </div>
                    <center><img class="d-block w-80 carousel-img" width="1050" src="vendor/adminlte/dist/img/pixelcut-moto.jpeg" alt="Second slide"></center>
                    <div class="carousel-caption d-none d-md-block">
                        <p>Participa en la próxima subasta.</p>
                    </div>
                </div>
                <!-- Tercera imagen -->
                <div class="carousel-item">
                    <div class="carousel-caption d-block caption-top">
                        <h5>Nuevas Ofertas</h5>
                        <a href="/register" class="btn btn-primary mt-3">¡Regístrate!</a>
                    </div>
                    <center><img class="d-block w-80 carousel-img" width="1130" src="vendor/adminlte/dist/img/pixelcut-laptop.jpeg" alt="Third slide"></center>
                    <div class="carousel-caption d-none d-md-block">
                        <p>Explora las nuevas subastas disponibles.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#remateCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#remateCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>



    <div class="row mt-4">
       
        @if (auth()->user()->id == 1)
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>10</h3>
                    <p>Remates finalizados</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>Registrar<sup style="font-size: 20px"></sup></h3>
                        <p>crear-remate</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-plus-circle" style="color: blanchedalmond"></i>
                    </div>
                    <a href="/crear-remate" class="small-box-footer">acceder <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>10</h3>
                        <p>Ventas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="admin/solicitudes" class="small-box-footer">Ver solicitudes<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>1</h3>
                    <p>Compras</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        @endif
        <!-- Rest of your content -->
    </div>
    
@stop
@section('footer')
    <footer class="text-center" style="background-color: #f1f1f1; color: #333; padding: 1rem;">
        <div class="container">
            <p class="mb-1">Menú</p>
            <a href="sobre-nosotros" class="text-dark mx-2">Sobre Nosotros</a>
            <a href="/centro-ayuda" class="text-dark mx-2">Centro de Ayuda</a>
            
            <div class="mt-3">
                <a href="https://wa.me/1234567890" class="text-dark mx-2" target="_blank">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
                <a href="https://facebook.com/tu_pagina" class="text-dark mx-2" target="_blank">
                    <i class="fab fa-facebook"></i> Facebook
                </a>
                <a href="https://instagram.com/tu_pagina" class="text-dark mx-2" target="_blank">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="mailto:tuemail@gmail.com" class="text-dark mx-2">
                    <i class="fas fa-envelope"></i> Gmail
                </a>
                <span class="text-dark mx-2">
                    <i class="fas fa-phone"></i> +1 (123) 456-7890
                </span>
            </div>
        </div>
    </footer>
@stop
{{-- @section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>10</h3>
                    <p>Remates finalizados</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        @if (auth()->user()->id == 1)
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>Registrar<sup style="font-size: 20px"></sup></h3>
                        <p>crear-remate</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-plus-circle" style="color: blanchedalmond"></i>
                    </div>
                    <a href="/crear-remate" class="small-box-footer">acceder <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>10</h3>
                        <p>Ventas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="admin/solicitudes" class="small-box-footer">Ver solicitudes<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        @endif

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>1</h3>
                    <p>Compras</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@stop --}}




@section('css')
<style>
    .bg-beige {
            background-color: #f5f5dc; /* Color beige/crema */
        }
        .carousel-img {
    border-radius: 5%; /* Hace que las imágenes sean redondas */
    box-shadow: 2px 8px 16px rgba(0, 0, 0, 0.1); /* Añade sombra alrededor de las imágenes */
    object-fit: cover; /* Asegura que la imagen se ajuste bien en su contenedor */
    height: 800px; /* Ajusta la altura de las imágenes */
    width: 1200px; /* Ajusta la anchura de las imágenes */
}
.carousel-caption.caption-top {
    position: absolute;
    top: 10%;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    color: #000000;
}

.carousel-caption h5 {
    font-size: 1.5rem;
    margin-bottom: 0;
}

.carousel-caption .btn {
    margin-top: 1rem; /* Espacio entre el botón y el texto */
}

</style>
    
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
