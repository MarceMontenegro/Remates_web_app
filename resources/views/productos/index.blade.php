@extends('adminlte::page')

@section('title', 'Productos del Remate')

@section('content_header')
    <h1>Productos en {{ $remate->nombre }}</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        @foreach($productos as $producto)
        @if($producto->estado == 1) <!-- Solo productos aprobados -->
        <div class="col-md-4">
            <div class="card mb-4">
                <!-- Imagen traída desde la base de datos -->
                <img src="{{ asset('storage/' . $producto->imagen_URL) }}" id="image_{{ $producto->id }}" class="card-img-top" alt="{{ $producto->nombre }}" style="height: 200px; object-fit: cover;">

                <div class="card-body">
                    <h5 class="card-title">{{ $producto->nombre }}</h5>
                    <p class="card-text">{{ Str::limit($producto->descripcion, 100) }}</p>
                    <p class="card-text"><strong>Precio Base:</strong> ${{ $producto->precio_base }}</p>
                    <!-- Botón Ver con Bootstrap -->
                    <a href="{{ route('productos.index', $producto->id_producto) }}" class="btn btn-primary">Ver</a>
                    {{-- {{ route('productos.show', $producto->id) }} --}}
                </div>
            </div>
        </div>
        @endif
        @endforeach

        @if ($productos->isEmpty())
        <div class="col-md-12">
            <div class="alert alert-info">No hay productos en este remate.</div>
        </div>
        @endif
    </div>
</div>

<script>
    // Previsualización de la imagen
    function archivo(evt){
        var files = evt.target.files; // Lista de archivos
        for(var i = 0, f; f = files[i]; i++ ){
            if(!f.type.match('image.*')){
                continue;
            }
            var reader = new FileReader();
            reader.onload = (function(theFile){
                return function(e){
                    document.getElementById("image_preview_" + evt.target.dataset.id).innerHTML = ['<img class="thumb thumbail" src="', e.target.result,'" width="100%" title="', escape(theFile.name),'"/>'].join('');
                };
            })(f);
            reader.readAsDataURL(f);
        }
    }

    document.querySelectorAll('.image-input').forEach(function(input){
        input.addEventListener('change', archivo, false);
    });
</script>
@stop
