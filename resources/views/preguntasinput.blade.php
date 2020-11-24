@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Preguntas</h3>
                <button style="margin-right: 30px;" class="btn btn-primary pull-right" onclick="$('#AddCuestion').submit()">GUARDAR</button>
            </div>
            <div class="box-body">
                <form id="AddCuestion" method="POST" action="{{route('preguntas.store')}}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <input style="margin-bottom:0" type="text" class="form-control @error('name') is-invalid @enderror" name="ITEM_ID" placeholder="GP00001" value="@isset($pregunta){{$pregunta->ITEM_ID}}@endisset{{old('sec_name')}}">

                            @error("ITEM_PREGUNTA")
                            <div class=" alert-danger" role="alert">
                                <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                            </div>
                            @enderror
                        </div>
                        <div class="col-sm-10">
                            <input style="margin-bottom:0" type="text" class="form-control @error('name') is-invalid @enderror" name="ITEM_PREGUNTA" placeholder="Pregunta" value="@isset($pregunta){{$pregunta->ITEM_PREGUNTA}}@endisset{{old('sec_name')}}">

                            @error("ITEM_PREGUNTA")
                            <div class=" alert-danger" role="alert">
                                <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                            </div>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Subcategoria</label>
                            <select name="ITEM_SUB_CATEGORIA" class="form-control @error('name') is-invalid @enderror">

                                @foreach($subcategorias as $subcategoria)
                                <option value="{{$subcategoria->SB_ID}}">{{$subcategoria->SB_CVE_CATEGORIA}}</option>
                                @endforeach
                                <select>
                                    @error("CAT_ACTIVO")
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                        </div>
                        <div class="col-sm-4">
                            <label>Tipo de Pregunta</label>
                            <select name="ITEM_TIPO_PREGUNTA" class="form-control @error('name') is-invalid @enderror">
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
                            <label>Estado</label>
                            <select name="ITEM_ACTIVO" class="form-control @error('name') is-invalid @enderror">
                                <option value="A">Activo</option>
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
                            <input style="margin-bottom:0" type="text" class="form-control @error('name') is-invalid @enderror" name="ITEM_RETROALIMENTACION" placeholder="Retroalementacion" value="@isset($pregunta){{$pregunta->ITEM_RETROALIMENTACION}}@endisset{{old('sec_name')}}">

                            @error("ITEM_RETROALIMENTACION")
                            <div class=" alert-danger" role="alert">
                                <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="box-header">
                        <h3 class="box-title">Preguntas</h3>
                        <a style="margin-right: 14px;" class="btn btn-primary pull-right" onclick="addRespuesta()"><i class="fas fa-plus"></i></a>
                    </div>

                    <div id="respuestas_div">
                        <div class="form-group row" hidden id="respusta_content">
                            <div class="col-sm-5">
                                <input style="margin-bottom:0" type="textarea" class="form-control @error('name') is-invalid @enderror" name="ITD_RESPUESTA" id="ITD_RESPUESTA"  placeholder="Respuesta" value="{{old('sec_name')}}">

                                @error("EV_TITULO")
                                <div class=" alert-danger" role="alert">
                                    <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                </div>
                                @enderror
                            </div>
                            <div class="col-sm-4">
                                <input style="margin-bottom:0" type="textarea" class="form-control @error('name') is-invalid @enderror" name="ITD_RETRO_RESPUESTA" id=ITD_RETRO_RESPUESTA placeholder="Retroaliemtacion" value="{{old('sec_name')}}">

                                @error("EV_TITULO")
                                <div class=" alert-danger" role="alert">
                                    <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                </div>
                                @enderror
                            </div>

                            <div class="col-sm-2">
                                <input style="margin-bottom:0" type="number" class="form-control @error('name') is-invalid @enderror" id="ITD_VALOR" name="ITD_VALOR" placeholder="Valoracion" value="{{old('sec_name')}}">

                                @error("EV_TITULO")
                                <div class=" alert-danger" role="alert">
                                    <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                </div>
                                @enderror
                            </div>
                            <div class="col-sm-1">
                            <a id="eliminar" class="btn btn-danger"><i class="fa fa-btn fa-trash"></i></a>
                            </div>


                        </div>

                        @isset($respuestas)
                            @foreach($respuestas as $respuesta)
                           
                           

                            <div class="form-group row" id="respusta_content">
                            <div class="col-sm-5">
                                <input style="margin-bottom:0" type="textarea" class="form-control @error('name') is-invalid @enderror" name="ITD_RESPUESTA" id="ITD_RESPUESTA"  placeholder="Respuesta" value="{{$respuesta->ITD_RESPUESTA}}{{old('sec_name')}}">

                                @error("EV_TITULO")
                                <div class=" alert-danger" role="alert">
                                    <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                </div>
                                @enderror
                            </div>
                            <div class="col-sm-4">
                                <input style="margin-bottom:0" type="textarea" class="form-control @error('name') is-invalid @enderror" name="ITD_RETRO_RESPUESTA" id=ITD_RETRO_RESPUESTA placeholder="Retroaliemtacion" value="{{$respuesta->ITD_RETRO_RESPUESTA}}{{old('sec_name')}}">

                                @error("EV_TITULO")
                                <div class=" alert-danger" role="alert">
                                    <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                </div>
                                @enderror
                            </div>

                            <div class="col-sm-2">
                                <input style="margin-bottom:0" type="number" class="form-control @error('name') is-invalid @enderror" id="ITD_VALOR" name="ITD_VALOR" placeholder="Valoracion" value="{{$respuesta->ITD_VALOR}}{{old('sec_name')}}">

                                @error("EV_TITULO")
                                <div class=" alert-danger" role="alert">
                                    <strong>¡Error al Cargar Usuario!</strong>Nombre de Usuario requerido
                                </div>
                                @enderror
                            </div>
                            <div class="col-sm-1">
                            <a id="eliminar" class="btn btn-danger"><i class="fa fa-btn fa-trash"></i></a>
                            </div>


                        </div>
                        @endforeach
                        @endisset


                    </div>

                </form>

            </div>
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
@endsection
@section('script')
<script type="text/javascript">
    const respuestaText = $("#respuestas_div").html();
    var i=1;
    function addRespuesta() {
        var respuestaHTML = $(respuestaText);
        var d = document.createDocumentFragment();
        console.log(respuestaHTML);
        d.appendChild(respuestaHTML[0]);
        d.getElementById("ITD_RESPUESTA").name="ITD_RESPUESTA"+i;
       d.getElementById("ITD_RETRO_RESPUESTA").name= "ITD_RETRO_RESPUESTA"+i;
       d.getElementById("ITD_VALOR").name= "ITD_VALOR"+i;
        d.getElementById('eliminar').addEventListener("click", function(evt) {
            $(this).closest('#respusta_content').remove();
        });
        $("#respuestas_div").append(d);
        i++;
    }
</script>
@endsection