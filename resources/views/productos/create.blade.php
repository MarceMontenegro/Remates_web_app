@extends('adminlte::page')

@section('title', 'Publicar Producto')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Card Box -->
            <div class="card">
                <div class="card-header">
                    <h3>Publicar Producto en {{ $remate->nombre }}</h3>
                </div>
                <div class="card-body">
                    <!-- Formulario -->
                    <form action="{{ route('productos.store', $remate->id_remates) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Nombre del Producto -->
                        <div class="form-group">
                            <label for="nombre">Nombre del Producto</label>
                            <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required>
                        </div>
                        
                        <!-- Descripción del Producto -->
                        <div class="form-group">
                            <label for="descripcion">Descripción del Producto</label>
                            <textarea class="form-control" name="descripcion" rows="3" required>{{ old('descripcion') }}</textarea>
                        </div>

                        <!-- Precio Base -->
                        <div class="form-group">
                            <label for="precio_base">Precio Base</label>
                            <input type="number" class="form-control" name="precio_base" value="{{ old('precio_base') }}" required>
                        </div>

                        <!-- Estado (Oculto, por defecto será Pendiente [0]) -->
                        <input type="hidden" name="estado" value="0">

                        <!-- Imagen del Producto -->
                        <div class="form-group">
                            <label for="imagen_URL">Imagen del Producto</label>
                            <input type="file" class="form-control" name="imagen_URL" accept="image/*">
                        </div>

                        <!-- Fecha de Solicitud (Oculta, será la fecha actual) -->
                        <input type="hidden" name="fecha_de_solicitud" value="{{ now()->format('Y-m-d') }}">

                        <!-- ID del Remate (Oculto) -->
                        <input type="hidden" name="id_remate" value="{{ $remate->id_remates }}">

                        <!-- ID del Usuario (Oculto) -->
                        <input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}">

                        <!-- Botón Publicar -->
                        <button type="submit" class="btn btn-primary">Publicar Producto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
