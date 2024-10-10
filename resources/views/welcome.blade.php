@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <h1>Dashboard</h1>
@stop

@section('content')
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


@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
