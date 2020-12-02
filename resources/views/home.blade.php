@extends('layouts.nalikalayout')
@php
$update=@isset($usuario);
$haserrors=false;
if(old('name')!=null)$haserrors=true;
if(!$update){
$usuario=auth()->user();
if(count(request()->segments())<2)$update=true; } @endphp @section('content') <div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="icon nalika-home"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Informacion de Usuario</h2>
                                    <p>Bienvendio<span class="bread-ntd"> a Proeval</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-report">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="single-product-tab-area mg-b-30">
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-tab-pro-inner">
                            <ul id="myTab3" class="tab-review-design">
                                <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i>Infromacion</a></li>
                            </ul>
                            <form id="AddUserForm" method="POST" action="@if($update && !$haserrors){{url('usuarios/')}}/{{$usuario->US_NUMBER}}@else{{route('usuarios.store')}} @endif">
                                @csrf
                                @if($update)
                                {{ method_field('PATCH') }}
                                @endif
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Nombre" value="@if($update && !$haserrors){{$usuario->US_NOMBRE }}@endif{{old('name')}}" name="name">
                                                        @error("name")
                                                        <div class=" alert-danger" role="alert">
                                                            <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Apellido Paterno" value="@if($update && !$haserrors){{$usuario->US_AP_PATERNO }}@endif{{old('US_AP_PATERNO')}}" name="US_AP_PATERNO">
                                                        @error("US_AP_PATERNO")
                                                        <div class=" alert-danger" role="alert">
                                                            <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-mail" aria-hidden="true"></i></span>
                                                        <input type="mail" class="form-control" placeholder="Correo" value="@if($update && !$haserrors){{$usuario->US_EMAIL }}@endif{{old('US_EMAIL')}}" name="US_EMAIL">
                                                        @error("US_EMAIL")
                                                        <div class=" alert-danger" role="alert">
                                                            <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-unlocked" aria-hidden="true"></i></span>
                                                        <input type="password" class="form-control" placeholder="Contraseña" name="password">
                                                        @error("US_AUT_TEXT")
                                                        <div class=" alert-danger" role="alert">
                                                            <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                                        </div>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Segundo Nombre" value="@if($update && !$haserrors){{$usuario->US_NOMBRE_2 }}@endif{{old('US_NOMBRE_2')}}" name="US_NOMBRE_2">
                                                        @error("US_NOMBRE_2")
                                                        <div class=" alert-danger" role="alert">
                                                            <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Apellido Materno" value="@if($update && !$haserrors){{$usuario->US_AP_MATERNO }}@endif{{old('US_AP_MATERNO')}}" name="US_AP_MATERNO">
                                                        @error("US_AP_MATERNO")
                                                        <div class=" alert-danger" role="alert">
                                                            <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                                        </div>
                                                        @enderror
                                                    </div>

                                                    <select @if(auth()->user()->US_ROL=="U")disabled @endif id="US_ROL" class="input-group mg-b-pro-edt form-control pro-edt-select form-control-primary" name="US_ROL">
                                                        <option >Tipo de Usuario</option>
                                                        <option value="U">Usuario</option>
                                                        <option value="A">Adminsitrador</option>
                                                        @error("US_ROL")
                                                        <div class=" alert-danger" role="alert">
                                                            <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                                        </div>
                                                        @enderror
                                                    </select>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-unlocked" aria-hidden="true"></i></span>
                                                        <input type="password" class="form-control" placeholder="Confirma Contraseña" name="password_confirmation">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    @if(count(request()->segments())==2){
                                                    <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
                                                    </button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
    @section('script')
<script type="text/javascript">
    $("#US_ROL").val("{{$usuario->US_ROL}}");
</script>
@endsection