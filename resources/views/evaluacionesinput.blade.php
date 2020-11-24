@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Agregar Evaluacion</h3>
              
                <button class="btn btn-primary pull-right" onclick="$('#AddUserForm').submit();"> Guardar</button>

            </div>
            <div class="box-body">
                <form id="AddUserForm" method="POST" action="@isset($evaluacion){{url('evaluaciones/'.$evaluacion->EV_ID)}}@else{{route('evaluaciones.store')}}@endisset">
                    @csrf
                    @isset($evaluacion)
                    {{ method_field('PATCH')}}
                    @endisset
                    <div class="form-group row">
                   @unless($evaluacion)
                    <div class="col-sm-1">
                            <input style="margin-bottom:0" type="text" class="form-control @error('EV_TITULO') is-invalid @enderror"  name="EV_ID" placeholder="ID" value="@isset($evaluacion){{$evaluacion->EV_ID}}@endisset{{old('EV_ID')}}">

                            @error("EV_ID")
                            <div class=" alert-danger" role="alert">
                                <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                            </div>
                            @enderror
                        </div>
                    @endunless
                        <div class="col-sm-9">
                            <input style="margin-bottom:0" type="text" class="form-control @error('EV_TITULO') is-invalid @enderror"  name="EV_TITULO" placeholder="Nombre de la Evaluacion" value="@isset($evaluacion){{$evaluacion->EV_TITULO}}@endisset{{old('EV_TITULO')}}">

                            @error("EV_TITULO")
                            <div class=" alert-danger" role="alert">
                                <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                            </div>
                            @enderror
                        </div>
                        <div class="col-sm-2">
                            <select name="EV_ACTIVO" class="form-control @error('EV_ACTIVO') is-invalid @enderror">

                                <option value="A">Activo</option>
                                <option value="N">No Vigente</option>
                                <select>
                                    @error("EV_ACTIVO")
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                        </div>
                    </div>

                    <div class="row " style="margin-top:25px">
                        <div class="col-sm-12">
                            <div class="box"></div>
                            <div class="box-header with-border">
                                <h3 class="box-title">Detalles de Evalacion</h3>
                            </div>
                            <div class="form-group row">

                                <div class="col-sm-3">
                                    <select name="ED_CATEGORIA" class="form-control @error('ED_CATEGORIA') is-invalid @enderror">
                                        <option disabled> CATEGORIA</option>
                                        @foreach($categorias as $categoria)
                                        <option value="{{$categoria->CA_IDENTIFICADOR}}">{{$categoria->CA_IDENTIFICADOR}}</option>
                                        @endforeach
                                        <select>
                                            @error("ED_CATEGORIA")
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                </div>

                                <div class="col-sm-2">
                                    <input style="margin-bottom:0" type="text" class="form-control @error('name') is-invalid @enderror" name="ED_NUMERO_ITEMS" placeholder="No.Preguntas" value="@isset($evaluacion_detalle){{$evaluacion_detalle->ED_NUMERO_ITEMS}} @endisset {{old('ED_NUMERO_ITEMS')}}">

                                    @error("ED_NUMERO_ITEMS")
                                    <div class=" alert-danger" role="alert">
                                        <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <input style="margin-bottom:0" type="date" class="form-control @error('name') is-invalid @enderror" name="ED_FECHA_EVAUACION"  value="@isset($evaluacion_detalle){{$evaluacion_detalle->ED_FECHA_EVAUACION->format('Y-m-d')}}@endisset{{old('ED_FECHA_EVAUACION')}}">

                                    @error("EV_TITULO")
                                    <div class=" alert-danger" role="alert">
                                        <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-2">
                                    <input style="margin-bottom:0" type="time" class="form-control @error('name') is-invalid @enderror" name="PR_HORA_INICIO"  value="@isset($evaluacion_detalle){{$evaluacion_detalle->PR_HORA_INICIO->format('H:i')}}@endisset{{old('PR_HORA_INICIO')}}">

                                    @error("EV_TITULO")
                                    <div class=" alert-danger" role="alert">
                                        <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-2">
                                    <input style="margin-bottom:0" type="number" class="form-control @error('PR_DURACION ') is-invalid @enderror"  name="PR_DURACION" placeholder="Duracion" value="@isset($evaluacion_detalle){{$evaluacion_detalle->PR_DURACION}}@endisset{{old('PR_DURACION ')}}">

                                    @error("PR_DURACION ")
                                    <div class=" alert-danger" role="alert">
                                        <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                    </div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.box -->
</div>
<!-- /.col -->
@endsection