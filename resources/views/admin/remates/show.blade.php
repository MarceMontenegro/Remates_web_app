@extends('welcome')

@section('title', 'Detalles del Remate')

@section('content_header')
    <h1>Detalles del Remate</h1>
@stop

@section('content')
<div class="container">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $remate->nombre }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Descripción:</strong> {{ $remate->descripcion }}</p>
            <p><strong>Fecha de inicio:</strong> {{ $remate->fecha_inicio }}</p>
            <p><strong>Fecha de finalización:</strong> {{ $remate->fecha_fin }}</p>
            <p><strong>Estado:</strong>
                @switch($remate->estado)
                    @case(0)
                        Pendiente
                        @break
                    @case(1)
                        Activo
                        @break
                    @case(2)
                        Finalizado
                        @break
                    @default
                        Desconocido
                @endswitch
            </p>
        </div>
        <div class="card-footer">
            
            <a href="{{ route('admin.remate.index') }}" class="btn btn-secondary float-right">Volver a la lista</a>
        </div>
    </div>
</div>
@stop
