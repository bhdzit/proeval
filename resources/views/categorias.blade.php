@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Categorias</h3>
                <a style="margin-right: 30px;" href="categorias/nuevacategoria" class="btn btn-primary pull-right" >Agregar Categoria</a>
            </div>
            <div class="box-body">

 
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr role="row">
                      <th>No.</th>
                      <th>IDENTIFICADOR</th>
                      <th>NOMBRE</th>
                      <th>ESTATUS</th>
                      <th style="width:60px;">Editar</th>
                      <th style="width:60px;">Eliminar</th>
                </tr>
              </thead>
                  <tbody id="SectorListTable">
                  <tr>
                      <td>1</td>
                      <td>GNR</td>
                      <td>GENERALIDADES</td>
                      <td>ACTIVO</td>
                      <td>
                                <button class="btn btn-success" onclick=""><i class="fa fa-btn fa-edit"></i></button>
                          </td>
                          <td>
                            <form action="" method="POST">
                              {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              <button type="submit" class="btn btn-danger"><i class="fa fa-btn fa-trash"></i></button>
                            </form>
                          </td>
                    </tr>

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
