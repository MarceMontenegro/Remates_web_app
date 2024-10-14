@extends('welcome')

@section('title', 'Realizar Oferta')

@section('content_header')
<center><h1 class="product-title">Realizar Oferta para: {{ $producto->nombre }}</h1></center>
@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card {{ config('adminlte.classes_auth_card', 'card-outline card-primary') }}">
                <div class="card-header">
                    <h3>Formulario de Oferta</h3>
                </div>
                <div class="card-body">
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
                            <label for="dni" class="form-label">Número de Identidad (DNI)</label>
                            <input type="text" class="form-control" id="dni" name="numero_identidad" required>
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
                            <label for="telefono" class="form-label">Número de Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="numero_telefono" required>
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
                            <input type="hidden" name="id_remate" value="{{ $producto->id_remate }}">

                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Oferta</button>
                        <a href="{{ route('productos.index', $producto->id_producto) }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
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
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Sombra del texto */
        margin: 20px 0; /* Margen superior e inferior */
    }
</style>
@stop
