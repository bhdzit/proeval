@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Evaluacion </h3>

                @if(count($respuestas)==0)

                @if($prueba[0]->bool!="true")
                <H1>No tienes evaluaciones activas, Consulta con tu profesor</H1>
                @else

                <H1>Una vez empezada la evaluacion no se podra dentenersdfsdfs</H1>
                <a style="margin-right: 30px;" href="prueba" class="btn btn-primary ">Realizar Evaluacion</a>
                @endif

                @else
                <H1>Ya Realizaste tu Prueba /
                @php
                $puntos=0;
              
                for($i=0;$i<count($respuestas);$i++)
                $puntos+=$respuestas[$i]->ITD_VALOR
                @endphp
              
               <strong> Obtuviste {{$puntos}} puntos.</strong></H1>
               @endif
            </div>
            <div class="box-body">
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    @endsection