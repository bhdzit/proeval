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
                                    <h2>Informacion de Preguntas</h2>
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
<div class="widgets-programs-area mg-t-15">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Lista de Preguntas</h4>
                    <div class="add-product">
                        <a href="preguntas/newpregunta">Agregar Pregunta</a>
                    </div>
                    @foreach($preguntas as $pregunta)
                    <div class="col-12">
                        <div class="hpanel mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4 style="color:#3f506b">{{$pregunta->ITEM_ID}}</a> {{$pregunta->ITEM_RETROALIMENTACION}}</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="fa fa-desktop" aria-hidden="true"></i>
                                </div>
                                <div class="m-t-xl">
                                    <h1 class="text-success">{{$pregunta->ITEM_PREGUNTA}}</h1>
                                    @foreach($respuestas as $respuesta)
                                    @if($respuesta->ITD_ITEM==$pregunta->ITEM_ID)
                                    <p></p>
                                    <p><a><i style="color: #000;" class="fa fa-circle-o"></i>{{$respuesta->ITD_RESPUESTA}}</a></p>

                                    @endif
                                    @endforeach
                                    <small>
                                        Lorem Ipsum is simply dummy text of the printing and Lorem <strong>typesetting industry</strong> spa.
                                    </small>
                                </div>
                                <div class="timeline-footer">
                                    <a href="preguntas/{{$pregunta->ITEM_ID}}" class="btn btn-success btn-xs">Edit</a>
                                    <form action="{{url('preguntas/'.$pregunta->ITEM_ID)}}" method="POST" class="btn btn-danger btn-xs">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-xs">Elminiar</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop