{{-- @extends('welcome')

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
@stop --}}

@extends('welcome')

@section('title', 'Detalles del Producto')

@section('content_header')
<h1 class="product-title">Detalles del producto: {{ $producto->nombre }}</h1>
@stop

@section('content')

<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-auto">
                <img src="{{ asset('storage/' . $producto->imagen_URL) }}" class="card-img-top" alt="{{ $producto->nombre }}" style="height: 300px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $producto->nombre }}</h5>
                    <p class="card-text">{{ $producto->descripcion }}</p>
                    <p class="card-text"><strong>Precio Base:</strong> ${{ $producto->precio_base }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4 justify-content-center">
        <div class="col-md-12 text-center">
            <a href="#" class="btn btn-danger">Cancelar</a>
            <a href="#" class="btn btn-success" id="btn-ofertar">Ofertar</a>
        </div>
    </div>

    <!-- Formulario de oferta -->
    <div class="row mt-4 justify-content-center d-none" id="form-oferta">
        <div class="col-md-8">
            <h3>Realizar Oferta</h3>
            <form action="{{ route('oferta.store', $producto->id_producto) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre_completo" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" required>
                </div>
                <div class="mb-3">
                    <label for="pais" class="form-label">País</label>
                    <input type="text" class="form-control" id="pais" name="pais" required>
                </div>
                <div class="mb-3">
                    <label for="provincia" class="form-label">Provincia</label>
                    <input type="text" class="form-control" id="provincia" name="provincia" required>
                </div>
                <div class="mb-3">
                    <label for="ciudad" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad" required>
                </div>
                <div class="mb-3">
                    <label for="numero_identidad" class="form-label">Número de Identidad (DNI)</label>
                    <input type="text" class="form-control" id="numero_identidad" name="numero_identidad" required>
                </div>
                <div class="mb-3">
                    <label for="cuil" class="form-label">CUIL</label>
                    <input type="text" class="form-control" id="cuil" name="cuil" required>
                </div>
                <div class="mb-3">
                    <label for="metodo_pago" class="form-label">Método de Pago</label>
                    <select class="form-select" id="metodo_pago" name="metodo_pago" required>
                        <option value="">Seleccione un método</option>
                        <option value="MasterCard">MasterCard</option>
                        <option value="Visa">Visa</option>
                        <option value="MercadoPago">MercadoPago</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="numero_telefono" class="form-label">Número de Teléfono</label>
                    <input type="text" class="form-control" id="numero_telefono" name="numero_telefono" required>
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" required>
                </div>
                <div class="mb-3">
                    <label for="codigo_postal" class="form-label">Código Postal</label>
                    <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" required>
                </div>
                <div class="mb-3">
                    <label for="monto" class="form-label">Monto de la Oferta</label>
                    <input type="number" class="form-control" id="monto" name="monto" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Oferta</button>
                <button type="button" class="btn btn-secondary" id="btn-cancelar-oferta">Cancelar</button>
            </form>
        </div>
    </div>
</div>

@stop

@section('css')
<style>
    .product-title {
        font-size: 2.5rem; 
        font-weight: bold; 
        color: #333; 
        text-align: center; 
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); 
        margin: 20px 0; 
    }
</style>
@stop

@section('js')
<script>
    document.getElementById('btn-ofertar').addEventListener('click', function() {
        document.getElementById('form-oferta').classList.remove('d-none');
    });

    document.getElementById('btn-cancelar-oferta').addEventListener('click', function() {
        document.getElementById('form-oferta').classList.add('d-none');
    });
</script>
@stop


