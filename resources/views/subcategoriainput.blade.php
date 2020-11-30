@extends('layouts.nalikalayout')
@section('content')
<div class="breadcome-area">
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
                                    <h2>Agregar de Subategoria</h2>
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
                        <form id="AddUserForm" method="POST" action="@isset($subcategoria) {{url('subcategorias/')}}/{{$subcategoria->SB_ID}}@else{{route('subcategorias.store')}}@endisset">
                            @csrf
                            @isset($subcategoria)
                            {{ method_field('PATCH')}}
                            @endisset
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="icon nalika-info" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="SB_ID" placeholder="Identificador" value="@isset($subcategoria){{$subcategoria->SB_ID}}@endisset{{ old('SB_ID')}}" required autofocus>
                                                @error("SB_ID")
                                                <div class=" alert-danger" role="alert">
                                                    <strong>¡Error al Cargar!</strong>
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fas fa-stream" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="SB_DESCRIPCION" placeholder="Descripcion" value="@isset($subcategoria){{$subcategoria->SB_DESCRIPCION}}@endisset{{ old('SB_DESCRIPCION') }}" required>
                                                @error("SB_DESCRIPCION")
                                                <div class=" alert-danger" role="alert">
                                                    <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fas fa-tag" aria-hidden="true"></i></span>
                                                <select name="SB_CVE_CATEGORIA" class="form-control @error('name') is-invalid @enderror">
                                                    @foreach($categorias as $categoria)
                                                    <option value="{{$categoria->CA_IDENTIFICADOR}}">{{$categoria->CA_IDENTIFICADOR}}</option>
                                                    @endforeach
                                                </select>
                                                @error("EV_ID")
                                                <div class=" alert-danger" role="alert">
                                                    <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fas fa-tag" aria-hidden="true"></i></span>
                                                <select name="SB_ACTIVO" class="form-control @error('name') is-invalid @enderror">
                                                    <option value="A">Activo</option>
                                                    <option value="N">No Vigente</option>
                                                    <select>
                                                        @error("EV_ID")
                                                        <div class=" alert-danger" role="alert">
                                                            <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                                        </div>
                                                        @enderror
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