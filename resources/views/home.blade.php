@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Datos de usuario</h3>

            </div>
            <div class="box-body">

                <div class="form-group row">
                    <div class="col-sm-3">
                    <img src="/adminlte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                        @error("wc_name")
                        <div class=" alert-danger" role="alert">
                            <strong>¡Error al Cargar Cliente!</strong>Nombre de Cliente requerido
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
                        <input style="margin-bottom:0" type="text" class="form-control swal2-input" id="wc_name" name="wc_name" placeholder="Nombre" required value="{{auth()->user()->US_NOMBRE }}{{old('wc_name')}}">
                        @error("wc_name")
                        <div class=" alert-danger" role="alert">
                            <strong>¡Error al Cargar Cliente!</strong>Nombre de Cliente requerido
                        </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input style="margin-bottom:0" type="text" class="form-control swal2-input" id="wc_name" name="wc_name" placeholder="Nombre" required value="{{auth()->user()->US_NOMBRE_2 }}{{old('wc_name')}}">
                        @error("wc_name")
                        <div class=" alert-danger" role="alert">
                            <strong>¡Error al Cargar Cliente!</strong>Nombre de Cliente requerido
                        </div>
                        @enderror
                    </div>

                    <div class="col-sm-3">
                        <input style="margin-bottom:0" type="text" class="form-control swal2-input" id="wc_name" name="wc_name" placeholder="Nombre" required value="{{auth()->user()->US_AP_PATERNO }}{{old('wc_name')}}">
                        @error("wc_name")
                        <div class=" alert-danger" role="alert">
                            <strong>¡Error al Cargar Cliente!</strong>Nombre de Cliente requerido
                        </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input style="margin-bottom:0" type="text" class="form-control swal2-input" id="wc_last_name" name="wc_last_name" placeholder="Apellido" required value="{{auth()->user()->US_AP_MATERNO }}{{old('wc_last_name')}}">
                        @error("wc_last_name")
                        <div class=" alert-danger" role="alert">
                            <strong>¡Error al Cargar Cliente!</strong>Apellido de Cliente requerido
                        </div>
                        @enderror
                    </div>
                </div>


                <div class="form-group row">

                    <div class="col-sm-3">
                        <input style="margin-bottom:0" type="text" class="form-control swal2-input" id="wc_name" name="wc_name" placeholder="Nombre" required value="{{auth()->user()->email }}{{old('wc_name')}}">
                        @error("wc_name")
                        <div class=" alert-danger" role="alert">
                            <strong>¡Error al Cargar Cliente!</strong>Nombre de Cliente requerido
                        </div>
                        @enderror
                    </div>

                    <div class="col-sm-3">
                        <input style="margin-bottom:0" type="text" class="form-control swal2-input" id="wc_name" name="wc_name" placeholder="Cambiar Contraseña" required value="********">
                        @error("wc_name")
                        <div class=" alert-danger" role="alert">
                            <strong>¡Error al Cargar Cliente!</strong>Nombre de Cliente requerido
                        </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <label>Creado</label>
                        <p>{{auth()->user()->US_FEC_ALTA }}</p>
                    </div>
                    <div class="col-sm-3">
                        <label>ROL</label>
                        @if(auth()->user()->US_ROL=='U')
                        <p>Estudiante</p>
                        @endif
                    </div>


                </div>


            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>

    @endsection