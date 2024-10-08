@extends('adminlte::page')

@section('title', 'Editar Remate')

@section('content_header')
    <h1>Editar Remate</h1>
@stop

@section('content')
<div class="container">
    <br>
    <center>
        <img src="{{asset("image/pixelcut-export.jpeg")}}" alt="" width="360" >
    </center>
    <br>
    
    <div class="row">
        <div class="col-md-12">
            {{-- Card Box --}}
            <div class="card {{ config('adminlte.classes_auth_card', 'card-outline card-primary') }}">

                {{-- Card Header --}}
                <div class="card-header {{ config('adminlte.classes_auth_header', '') }}">
                    <h3 class="card-title float-none text-center">
                        <b>Editar Remate</b>
                    </h3>
                </div>

                {{-- Card Body --}}
                <div class="card-body {{ $auth_type ?? 'login' }}-card-body {{ config('adminlte.classes_auth_body', '') }}">
                    <form action="{{ route('admin.remate.update', $remate->id_remates) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nombre">Nombre del remate</label>
                                    <input type="text" class="form-control" name="nombre" value="{{ $remate->nombre }}" required>
                                    @error('nombre')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="descripcion">Descripción</label>
                                <input type="text" class="form-control" name="descripcion" value="{{ $remate->descripcion }}" required>
                                @error('descripcion')
                                    <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="fecha_inicio">Fecha de inicio</label>
                                <input type="date" class="form-control" name="fecha_inicio" value="{{ $remate->fecha_inicio }}" required>
                                @error('fecha_inicio')
                                    <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="fecha_fin">Fecha de finalización</label>
                                <input type="date" class="form-control" name="fecha_fin" value="{{ $remate->fecha_fin }}" required>
                                @error('fecha_fin')
                                    <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn-lg btn btn-primary">Actualizar Remate</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
