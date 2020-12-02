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
                                    <h2>Examen</h2>

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
            <form method="POST" action="{{route('prueba.store')}}">
                @csrf
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        @foreach($preguntas as $pregunta)
                        <div class="col-12">
                            <div class="hpanel mg-b-30">
                                <div class="panel-body">
                                    <div class="stats-title pull-left">
                                        <h4 style="color:#3f506b">{{$pregunta->ITEM_ID}}</a> {{$pregunta->ITEM_RETROALIMENTACION}}</h4>
                                    </div>

                                    <div class="m-t-xl">
                                        <h1 class="text-success">{{$pregunta->ITEM_PREGUNTA}}</h1>
                                        @foreach($respuestas as $respuesta)
                                        @if($respuesta->ITD_ITEM==$pregunta->ITEM_ID)
                                        <p></p>
                                        <input type="radio" name="{{$pregunta->ITEM_ID}}" value="{{$respuesta->ITD_ID}}" required>
                                        <label for="{{$respuesta->ITD_ID}}">{{$respuesta->ITD_RESPUESTA}}</label><br>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center custom-pro-edt-ds">
                                               
                                                <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
                                                </button>
                                               
                                            </div>
                                        </div>
                                    </div>
            </form>
        </div>
        
    </div>
</div>
@stop