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
                                    <h2>Informacion de Categorias</h2>
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
                    <h4>Lista de Categorias</h4>
                    <div class="add-product">
                        <a href="categorias/newcategoria">Agregar Categoria</a>
                    </div>
                    <table>
                        <tr role="row">
                            <th>No.</th>
                            <th>IDENTIFICADOR</th>
                            <th>NOMBRE</th>
                            <th>ESTATUS</th>
                            <th>Setting</th>
                        </tr>

                        @php $i=1 @endphp

                        @foreach($categorias as $categoria)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$categoria->CA_IDENTIFICADOR}} </td>
                            <td>{{$categoria->CA_NOMBRE}} </td>
                            <td>{{$categoria->CAT_ACTIVO}}</td>

                            <td>
                                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed" onclick='window.location.href="{{url('categorias/'.$categoria->CA_IDENTIFICADOR) }}"'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                <form style="display: inline-block;" action="{{url('categorias/'.$categoria->CA_IDENTIFICADOR) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </form>
                            </td>
                            </td>
                        </tr>
                        @php $i++; @endphp


                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@stop