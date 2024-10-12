@extends('welcome')

@section('title', 'Listado de Remates')

@section('content_header')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Éxito',
        text: '{{ session('success') }}',
    });
</script>
@endif
    <h1>Listado de Remates</h1>
@stop

@section('content')

@section('content')
<div class="container">
    <div class="row">
        @foreach($remates as $remate)
        <div class="col-md-12 mb-3">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ $remate->nombre }}</h3>
                </div>
                <div class="card-body">
                    <p>{{ $remate->descripcion }}</p>
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
                <div class="card-footer text-right">
                    {{-- Si el usuario es administrador --}}
                    @if(auth()->check())
                        @if(auth()->user()->id==1)
                            <a href="{{ route('admin.remate.show', $remate->id_remates) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('admin.remate.edit', $remate->id_remates) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('admin.remate.destroy', $remate->id_remates) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        @else
                            {{-- Si el remate está activo, muestra el botón Publicar --}}
                            @if($remate->estado == 0)
                            <a href="{{ route('productos.create',  $remate->id_remates)}}" class="btn btn-primary">Publicar</a>
                            @endif
                        @endif
                    @endif
                    @if($remate->estado == 1)
                    <a  href="{{ route('productos.index', $remate->id_remates) }}" class="btn btn-primary">Ver productos</a>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
    
        @if ($remates->isEmpty())
        <h2>No tiene remates registrados</h2>
        @endif
    </div>
</div>
@stop
