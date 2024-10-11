@extends('adminlte::page')

@section('title', 'Publicar Producto')

@section('content')
<div class="container">
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Card Box -->
            <div class="card {{ config('adminlte.classes_auth_card', 'card-outline card-primary') }}">
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
                            <input type="file" id="file" class="form-control" name="imagen_URL" accept="image/*">
                        </div>
                            <br>
                            <center><output id="list"></output></center>
                            <script>
                                function archivo(evt){
                                   var files = evt.target.files; //file List objet
                                   //Obtenemos la imagen del campo "file"
                                   for(var i = 0, f; f = files[i]; i++ ){
                                      //solo admitimos imagenes
                                      if(!f.type.match('image.*')){
                                        continue;
                                      }
                                      var reader = new FileReader();
                                      reader.onload = (function (theFile){
                                        return function (e) {
                                            //insertamos la imagen
                                            document.getElementById("list").innerHTML = ['<img class="thumb thumbail" src="',e.target.result,'" width="40%" title="',escape(theFile.name),'"/>'].join('');
                                        };
                                      })(f);
                                      reader.readAsDataURL(f);

                                   }

                                }
                                document.getElementById('file').addEventListener('change', archivo, false);
                           </script> 
                           <br>

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



