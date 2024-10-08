
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
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
                    <b>Registro de nuevo remate</b>
                </h3>
            </div>
      

        {{-- Card Body --}}
        <div class="card-body {{ $auth_type ?? 'login' }}-card-body {{ config('adminlte.classes_auth_body', '') }}">
            <form action="{{url('crear-remate/create')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            {{-- <label for="logo">Logo</label>
                            <input type="file" id="file" name="logo" class="form-control">
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
                                            document.getElementById("list").innerHTML = ['<img class="thumb thumbail" src="',e.target.result,'" widtch="40%" title="',escape(theFile.name),'"/>'].join('');
                                        };
                                      })(f);
                                      reader.readAsDataURL(f);

                                   }

                                }
                                document.getElementById('file').addEventListener('change', archivo, false);
                           </script> --}}
                            <label for="nombre">Nombre del remate</label>
                            <input type="text" class="form-control" name="nombre" required>
                            @error('nombre')
                                <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="descripcion">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" required>
                        @error('descripcion')
                                <small style="color: red">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="fecha_inicio">Fecha de inicio</label>
                        <input type="date" class="form-control" name="fecha_inicio" required>
                        @error('fecha_inicio')
                                <small style="color: red">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="fecha_fin">Fecha de finalización</label>
                        <input type="date" class="form-control" name="fecha_fin" required>
                        @error('fecha_fin')
                                <small style="color: red">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn-lg btn btn-primary ">Crear remate</button>
                    </div>
                </div>
            </div>
        </div>
        

        {{-- Card Footer --}}
        @hasSection('auth_footer')
            <div class="card-footer {{ config('adminlte.classes_auth_footer', '') }}">
                @yield('auth_footer')
            </div>
        @endif

    </div>
            
        </div>
    </div>
    

</div>
@stop


