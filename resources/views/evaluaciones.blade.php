@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Evaluaciones</h3>
                <a style="margin-right: 30px;" href="evaluaciones/nuevaevaluacion" class="btn btn-primary pull-right">Agregar Evaluacion</a>
            </div>
            <div class="box-body">

 
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr role="row">
                      <th>No.</th>
                      <th>Titulo</th>
                      <th>Estatus</th>
                      <th>No.Preguntas</th>
                      <th>Contestaron</th>
                      <th style="width:60px;">Editar</th>
                      <th style="width:60px;">Eliminar</th>
                </tr>
              </thead>
                  <tbody id="SectorListTable">
                    @forelse($evaluaciones as $evaluacion)
                        <tr>
                          <td>{{$evaluacion->EV_ID}} </td>
                          <td>{{$evaluacion->EV_TITULO}} </td>
                          <td>{{$evaluacion->EV_ACTIVO}} </td>
                         <td>100</td> 
                          <td>30/50</td>
                          <td>
                                <a class="btn btn-success" href="{{url('evaluaciones/'.$evaluacion->EV_ID) }}"><i class="fa fa-btn fa-edit"></i></a>
                          </td>
                          <td>
                            <form action="{{url('evaluaciones/'.$evaluacion->EV_ID)}}" method="POST">
                              {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              <button type="submit" class="btn btn-danger"><i class="fa fa-btn fa-trash"></i></button>
                            </form>
                          </td>
 
                    </tr>
                    @empty

                    @endforelse

                  </tbody>
              <tfoot>
              </tfoot>
            </table>






            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    @endsection
    @section('script')
    <script type="text/javascript">

    $(function () {
        $('#example1').DataTable({
          "language": {
                "search":         "Buscar:",
               "lengthMenu":     "Mostrar : _MENU_ ",
               "info":           "Clientes _START_ al _END_ de _TOTAL_ Clientes",
               "paginate": {
                  "first":      "Primera",
                  "last":       "Ultima",
                  "next":       "Siguiente",
                  "previous":   "Anterior"
              },
          }
        });

    });
 

    </script>
    @stop
