@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Agregar Evaluacion</h3>
            </div>
            <div class="box-body">
                <form id="AddEvaluaicon" method="POST" acction="">
                    @csrf
                    <div class="row " style="margin-top:25px">
                        <div class="col-sm-12">
                            <div class="box"></div>
                            <div class="box-header with-border">
                                <h3 class="box-title">Preguntas</h3>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input style="margin-bottom:0" type="text" class="form-control @error('name') is-invalid @enderror" id="wc_name" name="EV_TITULO" placeholder="Pregunta" value="{{old('sec_name')}}">

                                    @error("EV_TITULO")
                                    <div class=" alert-danger" role="alert">
                                        <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                    </div>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <select name="CAT_ACTIVO" class="form-control @error('name') is-invalid @enderror">
                                        <option value="A">Subcategorias</option>
                                        @foreach($subcategorias as $subcategoria)
                                        <option>{{$subcategoria->SB_CVE_CATEGORIA}}</option>
                                        @endforeach
                                        <select>
                                            @error("CAT_ACTIVO")
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                </div>
                                <div class="col-sm-4">
                                    <select name="CAT_ACTIVO" class="form-control @error('name') is-invalid @enderror">
                                        <option value="A">Tipo de Pregunta</option>
                                        @foreach($tipo_preguntas as $tipo_pregunta)
                                        <option>{{$tipo_pregunta->TP_ID}}</option>
                                        @endforeach
                                        <select>
                                            @error("EV_TITULO")
                                            <div class=" alert-danger" role="alert">
                                                <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                            </div>
                                            @enderror
                                </div>
                                <div class="col-sm-4">
                                    <select name="CAT_ACTIVO" class="form-control @error('name') is-invalid @enderror">
                                        <option value="A">GENR</option>
                                        <option value="N">No Vigente</option>
                                        <select>
                                            @error("CAT_ACTIVO")
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input style="margin-bottom:0" type="text" class="form-control @error('name') is-invalid @enderror" id="wc_name" name="EV_TITULO" placeholder="Retroalementacion" value="{{old('sec_name')}}">

                                    @error("EV_TITULO")
                                    <div class=" alert-danger" role="alert">
                                        <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <input style="margin-bottom:0" type="textarea" class="form-control @error('name') is-invalid @enderror" id="wc_name" name="EV_TITULO" placeholder="Respuesta" value="{{old('sec_name')}}">

                                    @error("EV_TITULO")
                                    <div class=" alert-danger" role="alert">
                                        <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-5">
                                    <input style="margin-bottom:0" type="textarea" class="form-control @error('name') is-invalid @enderror" id="wc_name" name="EV_TITULO" placeholder="Retroaliemtacion" value="{{old('sec_name')}}">

                                    @error("EV_TITULO")
                                    <div class=" alert-danger" role="alert">
                                        <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-2">
                                    <input style="margin-bottom:0" type="number" class="form-control @error('name') is-invalid @enderror" id="wc_name" name="EV_TITULO" placeholder="Valoracion" value="{{old('sec_name')}}">

                                    @error("EV_TITULO")
                                    <div class=" alert-danger" role="alert">
                                        <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>