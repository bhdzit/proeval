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
                                    <h2>Informacion de Usuarios</h2>
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

<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Lista de Usuarios</h4>
                    <div class="add-product">
                        <a href="usuarios/newuser">Agregar Usuarios</a>
                    </div>
                    <table>
                        <tr>
                            <th>No.</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>status</th>
                            <th>Setting</th>
                        </tr>
                        @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->US_NUMBER}}</td>
                            <td>{{$usuario->US_NOMBRE }} {{$usuario->US_NOMBRE_2}} {{$usuario->US_AP_PATERNO}} {{$usuario->US_AP_MATERNO}} </td>
                            <td>{{$usuario->US_EMAIL}} </td>
                            <td><input type="checkbox" onchange="setPrueba({{$usuario->US_NUMBER}},this);" @if($usuario->PR_ACTIVO=="A")checked @endif ></td>

                            <td>
                                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed" onclick='window.location.href = "{{url('usuarios/'.$usuario->US_NUMBER) }}"'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                <form style="display: inline-block;" action="{{url('usuarios/'.$usuario->US_NUMBER) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </form>
                                </td>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('script')
  <script type="text/javascript">
 

    function setPrueba(id, bool) {
     
      $.ajax({
          method: "POST",
          url: "{{route('examen.store')}}",
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