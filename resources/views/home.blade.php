@extends('admin.layout')

@php
$update=@isset($usuario);
$haserrors=false;
if(old('name')!=null)$haserrors=true;
if(!$update){
    $usuario=auth()->user();
    if(count(request()->segments())<2)$update=true;
}




@endphp



@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                @if(count(request()->segments())==1)
                <h3 class="box-title">Datos de usuario</h3>
                @else
                <h3 class="box-title">Agregar Usuario</h3>
                <button class="btn btn-primary pull-right" onclick="$('#AddUserForm').submit();"> Guardar</button>
                @endif

            </div>
            <div class="box-body">
                <form  id="AddUserForm" method="POST" acction="@if($update && !$haserrors){{route('usuarios.store')}}@else{{route('usuarios.store')}} @endif">
                      @csrf
                      @if($update)
                      {{ method_field('PATCH') }}
                      @endif
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <img src="/adminlte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            @error("wc_name")
                            <div class=" alert-danger" role="alert">
                                <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                            </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <label>ESTATUS</label>
                            <p><i style="color:chartreuse;" class="fas fa-toggle-on fa-2x"></i></p>
                            <label>Examnes Realizados</label>
                            <p>30</p>
                            <label>Examnes Pendientes</label>
                            <p>4</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <input style="margin-bottom:0" type="text" class="form-control swal2-input" id="name" name="name" placeholder="Nombre" required value="@if($update && !$haserrors){{$usuario->US_NOMBRE }}@endif{{old('name')}}">
                            @error("name")
                            <div class=" alert-danger" role="alert">
                                <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                            </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input style="margin-bottom:0" type="text" class="form-control swal2-input"  name="sec_name" placeholder="Segundo Nombre" value="@if($update && !$haserrors){{$usuario->US_NOMBRE_2 }}@endif{{old('sec_name')}}">
                            @error("sec_name")
                            <div class=" alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>

                        <div class="col-sm-3">
                            <input style="margin-bottom:0" type="text" class="form-control swal2-input" id="wc_name" name="last_name" placeholder="Apellido Paterno" required value="@if($update && !$haserrors){{$usuario->US_AP_PATERNO }}@endif{{old('last_name')}}">
                            @error("last_name")
                            <div class=" alert-danger" role="alert">
                                <strong>¡Error al Cargar Usuario!</strong>Apellido de Usuario requerido
                            </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input style="margin-bottom:0" type="text" class="form-control swal2-input" id="wc_last_name" name="sec_last_name" placeholder="Apellido Materno" required value="@if($update && !$haserrors){{$usuario->US_AP_MATERNO }}@endif{{old('sec_last_name')}}">
                            @error("sec_last_name")
                            <div class=" alert-danger" role="alert">
                                <strong>¡Error al Cargar Usuario!</strong>Apellido de Usuario requerido
                            </div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">

                        <div class="col-sm-3">
                            <input style="margin-bottom:0" type="text" class="form-control swal2-input" id="wc_name" name="US_EMAIL" placeholder="Correo" required value="@if($update && !$haserrors){{$usuario->US_EMAIL }}@endif{{old('US_EMAIL')}}">
                            @error("US_EMAIL")
                            <div class=" alert-danger" role="alert">
                                <strong>¡Error al Cargar Usuario!</strong>{{ $message }}
                            </div>
                            @enderror
                    </div>

                        <div class="col-sm-3">
                            <input style="margin-bottom:0" type="password" class="form-control swal2-input" id="wc_name" name="password" placeholder="Contraseña" required value="">
                            @error("password")
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                      
                        @unless($update)
                        <div class="col-sm-3">
                            <input style="margin-bottom:0" type="password" class="form-control swal2-input" id="wc_name" name="password_confirmation" placeholder="Confirmar Contraseña" required value="">
                           
                        </div>
                        
                        @endunless
                        <div class="col-sm-3">
                            <select name="rol" class="form-control swal2-input">
                                <option value="U">Estudiante</option>
                                <option value="A">Profesor</option>
                                <select>
                                @error("rol")
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        @unless(!$update)
                        <div class="col-sm-3">
                            <label>Creado</label>
                            <p>{{auth()->user()->US_FEC_ALTA }}</p>
                        </div>
                        
                        @endunless


                    </div>
                </form>

            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>

    @endsection