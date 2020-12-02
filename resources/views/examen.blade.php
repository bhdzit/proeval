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
                                    <h2>Informacion de Evaluaciones</h2>
                                    @if(count($respuestas)==0)

                                    @if($prueba[0]->bool!="true")
                                    <h2>No tienes evaluaciones activas, Consulta con tu profesor</h2>
                                    @else

                                    <h2>Una vez empezada la evaluacion no se podra dentener</h2>
                                    <a style="margin-right: 30px;" href="prueba" class="btn btn-primary ">Realizar Evaluacion</a>
                                    @endif

                                    @else
                                    <h2>Ya Realizaste tu Prueba /
                                        @php
                                        $puntos=0;

                                        for($i=0;$i<count($respuestas);$i++) $puntos+=$respuestas[$i]->ITD_VALOR
                                            @endphp

                                            <strong> Obtuviste {{$puntos}} puntos.</strong></h2>
                                    @endif
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
@stop