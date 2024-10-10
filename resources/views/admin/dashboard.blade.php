@extends('adminlte::page')

@section('title', 'Panel de Administración')

@section('content_header')
    <h1>Panel de Administración</h1>
@stop

@section('content')
    <div class="container">
        <h3>Solicitudes de Publicación de Productos</h3>

        @if($solicitudes->isEmpty())
            <div class="alert alert-info">
                No hay solicitudes pendientes.
            </div>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Imagen</th> <!-- Nueva columna para la imagen -->
                        <th>Nombre del Producto</th>
                        <th>Descripción</th>
                        <th>Precio Inicial</th>
                        <th>Remate</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($solicitudes as $producto)
                        <tr>
                            <!-- Columna para previsualizar la imagen -->
                            <td>
                                @if($producto->imagen_url)
                                    <img src="{{ asset('storage/' . $producto->imagen_URL) }}" alt="{{ $producto->nombre }}" style="width: 100px; height: 100px; object-fit: cover;">
                                @else 
                                    <span>No hay imagen disponible</span>
                                @endif
                            </td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->precio_base }}</td>
                            <td>{{ $producto->remate->nombre }}</td>
                            <td>
                                <!-- Aceptar Producto -->
                                <form action="{{ route('admin.producto.aceptar', $producto->id_producto) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-success">Aceptar</button>
                                </form>

                                <!-- Rechazar Producto -->
                                <form action="{{ route('admin.producto.rechazar', $producto->id_producto) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-danger">Rechazar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@stop
