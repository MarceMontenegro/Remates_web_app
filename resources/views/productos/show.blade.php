@extends('welcome')

@section('title', 'Detalles del Producto')

@section('content_header')
<h1 class="product-title">Detalles del producto: {{ $producto->nombre }}</h1>
@stop

@section('content')

<div class="container text-center"> <!-- Agregado text-center -->
    
    <div class="row justify-content-center"> <!-- Justificar contenido al centro -->
        <div class="col-md-6">
            
            <div class="card mx-auto"> <!-- mx-auto para centrar la tarjeta -->
                
                <img src="{{ asset('storage/' . $producto->imagen_URL) }}" class="card-img-top" alt="{{ $producto->nombre }}" style="height: 300px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $producto->nombre }}</h5>
                    <p class="card-text">{{ $producto->descripcion }}</p>
                    <p class="card-text"><strong>Precio Base:</strong> ${{ $producto->precio_base }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4 justify-content-center"> <!-- Justificar contenido al centro -->
        <div class="col-md-12 text-center"> <!-- Mantener el texto a la derecha, aunque esté centrado -->
            <a href="#" class="btn btn-danger">Cancelar</a>
            <a href="#" class="btn btn-success">Ofertar</a>
            {{-- {{ route('productos.index', $producto->id_remate) }}
            {{ route('ofertas.create', $producto->id_producto) }} --}}
        </div>
    </div>
</div>

@stop

@section('css')
<style>
    .product-title {
        font-size: 2.5rem; /* Tamaño de fuente grande */
        font-weight: bold; /* Negrita */
        color: #333; /* Color del texto */
        text-align: center; /* Centrar el texto */
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Sombra del texto */
        margin: 20px 0; /* Margen superior e inferior */
    }
</style>
@stop
