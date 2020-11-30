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
                                <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i>Infromacion{{$update}}</a></li>
                            </ul>
                            <form id="AddUserForm" method="POST" action="@if($update && !$haserrors){{route('usuarios.store')}}@else{{route('usuarios.store')}} @endif">
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
                                                        <input type="text" class="form-control" placeholder="Apellido Paterno" value="@if($update && !$haserrors){{$usuario->US_AP_PATERNO }}@endif{{old('name')}}" name="US_AP_PATERNO">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-mail" aria-hidden="true"></i></span>
                                                        <input type="mail" class="form-control" placeholder="Correo" value="@if($update && !$haserrors){{$usuario->US_EMAIL }}@endif{{old('name')}}>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-unlocked" aria-hidden="true"></i></span>
                                                        <input type="password" class="form-control" placeholder="Contraseña">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Segundo Nombre" value="@if($update && !$haserrors){{$usuario->US_NOMBRE_2 }}@endif{{old('name')}}">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Apellido Materno" value="@if($update && !$haserrors){{$usuario->US_AP_MATERNO }}@endif{{old('name')}}">
                                                    </div>

                                                    <select name="select" class="input-group mg-b-pro-edt form-control pro-edt-select form-control-primary">
                                                        <option value="opt1">Tipo de Usuario</option>
                                                        <option value="opt2">Usuario</option>
                                                        <option value="opt3">Adminsitrador</option>
                                                    </select>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-unlocked" aria-hidden="true"></i></span>
                                                        <input type="password" class="form-control" placeholder="Confirma Contraseña">
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