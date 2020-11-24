@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Preguntas</h3>
                <a style="margin-right: 30px;" href="preguntas/nuevapregunta" class="btn btn-primary pull-right">Nueva Pregunta</a>
            </div>
            <div class="box-body">

                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- The time line -->
                        <ul class="timeline">
                            <!-- timeline time label -->

                            <!-- /.timeline-label -->
                            <!-- timeline item -->

                            @foreach($preguntas as $pregunta)
                            <li>
                                <i class="fa fa-question bg-blue"></i>
                             
                                <div class="timeline-item">


                                    <h3 class="timeline-header"><a href="#">{{$pregunta->ITEM_ID}}</a> {{$pregunta->ITEM_RETROALIMENTACION}}</h3>

                                    <div class="timeline-body">
                                        {{$pregunta->ITEM_PREGUNTA}}
                                        @foreach($respuestas as $respuesta)
                                            @if($respuesta->ITD_ITEM==$pregunta->ITEM_ID)
                                            <p></p>
                                           <p><a ><i style="color: #000;" class="fa fa-circle-o"></i>{{$respuesta->ITD_RESPUESTA}}</a></p>
                                          
                                            @endif
                                        @endforeach
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
                            </li>
                            @endforeach

                        </ul>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->







            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    @endsection