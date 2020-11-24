@extends('admin.layout')
@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Usuarios</h3>
        <a style="margin-right: 30px;" href="usuarios/nuevousuario" class="btn btn-primary pull-right">Agregar Usuarios</a>
      </div>
      <div class="box-body">


        <table id="example1" class="table table-bordered table-striped">
         
          <thead>
            <tr role="row">
              <th>No.</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Activar</th>
              <th style="width:60px;">Editar</th>
              <th style="width:60px;">Eliminar</th>
            </tr>
          </thead>
          <tbody id="SectorListTable">

            @foreach($usuarios as $usuario)
           
            <tr>
           
              <td>{{$usuario->US_NUMBER}} </td>
              <td>{{$usuario->US_NOMBRE}} </td>
              <td>{{$usuario->US_EMAIL}} </td>
              <td><input type="checkbox" onchange="setPrueba({{$usuario->US_NUMBER}},this);" @if($usuario->PR_ACTIVO=="A")checked @endif ></td>

              <td>
                <a class="btn btn-success" href="{{url('usuarios/'.$usuario->US_NUMBER) }}"><i class="fa fa-btn fa-edit"></i></a>
              </td>
              <td>
                <form action="{{url('usuarios/'.$usuario->US_NUMBER) }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-danger"><i class="fa fa-btn fa-trash"></i></button>
                </form>
              </td>
            </tr>
     

            @endforeach

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
    $(function() {
      $('#example1').DataTable({
        "language": {
          "search": "Buscar:",
          "lengthMenu": "Mostrar : _MENU_ ",
          "info": "Clientes _START_ al _END_ de _TOTAL_ Clientes",
          "paginate": {
            "first": "Primera",
            "last": "Ultima",
            "next": "Siguiente",
            "previous": "Anterior"
          },
        }
      });

    });

    function setPrueba(id, bool) {
     
      $.ajax({
          method: "POST",
          url: "{{route('prueba.store')}}",
          data: {
            id: id,
            bool: bool.checked,
            _token:"{{csrf_token()}}"
          }
        })
        .done(function(msg) {
          //alert("Data Saved: " + msg);
        });
    }
  </script>
  @stop