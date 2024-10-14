@extends('adminlte::page')


{{-- @section('title', 'Dashboard')

@section('content_header')

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
                        <h5>Subasta Exclusiva de Pick-Up!</h5>
                        <a href="/register" class="btn btn-primary mt-3">¡Regístrate!</a>
                    </div>
                    <center><img class="d-block w-80 carousel-img" width="1000" src="vendor/adminlte/dist/img/pixelcut-camioneta.jpeg" alt="First slide"></center>
                    <div class="carousel-caption d-none d-md-block">
                        <p>La oportunidad de adquirir tu Ford Ranger!.</p>
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
                        <p><strong>Explora las nuevas subastas disponibles.</strong></p>
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
        @if(auth()->check()) 
      
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
                <a href="https://wa.me/3777237189" class="text-dark mx-2" target="_blank">
                    <i class="fab fa-whatsapp"></i> 3777237189
                </a>
                <a href="https://facebook.com/tu_pagina" class="text-dark mx-2" target="_blank">
                    <i class="fab fa-facebook"></i> MSA_Remates
                </a>
                <a href="https://instagram.com/tu_pagina" class="text-dark mx-2" target="_blank">
                    <i class="fab fa-instagram"></i> MSA_Remates
                </a>
                <a href="mailto:tuemail@gmail.com" class="text-dark mx-2">
                    <i class="fas fa-envelope"></i> MSA_remates@gmail.com
                </a>
                <span class="text-dark mx-2">
                    <i class="fas fa-phone"></i> +1 (123) 456-7890
                </span>
                <span class="text-dark mx-2">
                    <a href="https://www.google.com.ar/maps/place/Tucum%C3%A1n+1131,+W3450+EPS,+Corrientes/@-29.146079,-59.2677034,18.75z/data=!4m6!3m5!1s0x944e84bdb5f7b427:0x16df032df900a1f4!8m2!3d-29.1457275!4d-59.267563!16s%2Fg%2F11c5fsmt3q?entry=ttu&g_ep=EgoyMDI0MTAwOS4wIKXMDSoASAFQAw%3D%3D" class="text-dark mx-2" target="_blank">
                    <i class="fa fa-map-marker" aria-hidden="true"></i> Corrientes, Argentina.
                   
                </span>
            </div>
        </div>
    </footer>
@stop

@section('css')
<style>
    .bg-beige {
        background-color: #f5f5dc; /* Color beige/crema */
    }
    
    .carousel-img {
        border-radius: 10%; /* Hace que las imágenes tengan bordes redondeados */
        box-shadow: 2px 8px 16px rgba(0, 0, 0, 0.1); /* Añade sombra alrededor de las imágenes */
        object-fit: contain; /* Ajusta la imagen completa dentro del contenedor */
        height: 600px; /* Altura fija */
        width: 800px; /* Anchura fija */
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
        
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: '{{ session('success') }}',
            confirmButtonText: 'Aceptar'
        });
    </script>
@endif
    
@stop
