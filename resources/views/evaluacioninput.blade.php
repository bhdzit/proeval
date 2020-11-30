@extends('layouts.nalikalayout')
@section('content')
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
                                <h2>Informacion de Evaluaion</h2>
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
                        <form id="AddUserForm" method="POST" action="@isset($evaluacion){{url('evaluaciones/'.$evaluacion->EV_ID)}}@else{{route('evaluaciones.store')}}@endisset">
                            @csrf
                            @isset($evaluacion)
                            {{ method_field('PATCH')}}
                            @endisset
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="icon nalika-info" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="EV_ID" placeholder="ID" value="@isset($evaluacion){{$evaluacion->EV_ID}}@endisset{{old('EV_ID')}}">
                                                @error("EV_ID")
                                                <div class=" alert-danger" role="alert">
                                                    <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="icon nalika-price-tag" aria-hidden="true"></i></span>
                                                <select name="ED_CATEGORIA" class="form-control @error('ED_CATEGORIA') is-invalid @enderror">
                                                    <option disabled> CATEGORIA</option>
                                                    @foreach($categorias as $categoria)
                                                    <option value="{{$categoria->CA_IDENTIFICADOR}}">{{$categoria->CA_IDENTIFICADOR}}</option>
                                                    @endforeach
                                                </select>
                                                @error("ED_CATEGORIA")
                                                <div class=" alert-danger" role="alert">
                                                    <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fas fa-calendar-week" aria-hidden="true"></i></span>
                                                <input type="date" class="form-control" name="ED_FECHA_EVAUACION" value="@isset($evaluacion_detalle){{$evaluacion_detalle->ED_FECHA_EVAUACION->format('Y-m-d')}}@endisset{{old('ED_FECHA_EVAUACION')}}">
                                                @error("ED_FECHA_EVAUACION")
                                                <div class=" alert-danger" role="alert">
                                                    <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fas fa-clock" aria-hidden="true"></i></span>
                                                <input type="number" class="form-control" name="PR_DURACION" placeholder="Duracion" value="@isset($evaluacion_detalle){{$evaluacion_detalle->PR_DURACION}}@endisset{{old('PR_DURACION ')}}">
                                                @error("PR_DURACION")
                                                <div class=" alert-danger" role="alert">
                                                    <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="EV_TITULO" placeholder="Nombre de la Evaluacion" value="@isset($evaluacion){{$evaluacion->EV_TITULO}}@endisset{{old('EV_TITULO')}}">
                                                @error("name")
                                                <div class=" alert-danger" role="alert">
                                                    <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fas fa-list" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="ED_NUMERO_ITEMS" placeholder="No.Preguntas" value="@isset($evaluacion_detalle){{$evaluacion_detalle->ED_NUMERO_ITEMS}} @endisset {{old('ED_NUMERO_ITEMS')}}">
                                                @error("ED_NUMERO_ITEMS")
                                                <div class=" alert-danger" role="alert">
                                                    <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fas fa-clock" aria-hidden="true"></i></span>
                                                <input type="number" class="form-control" name="PR_HORA_INICIO" placeholder="Hora de Inicio" value="@isset($evaluacion_detalle){{$evaluacion_detalle->PR_HORA_INICIO->format('H:i')}}@endisset{{old('PR_HORA_INICIO')}}">
                                                @error("name")
                                                <div class=" alert-danger" role="alert">
                                                    <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                <select name="EV_ACTIVO" class="form-control @error('EV_ACTIVO') is-invalid @enderror">

                                                    <option value="A">Activo</option>
                                                    <option value="N">No Vigente</option>
                                                </select>
                                                @error("name")
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