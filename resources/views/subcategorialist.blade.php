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
                    <h4>Lista de Subcategorias</h4>
                    <div class="add-product">
                        <a href="subcategorias/newsubcategoria">Agregar Subategoria</a>
                    </div>
                    <table>
                        <tr>
                            <th>No.</th>
                            <th>Categoria</th>
                            <th>Descripcion</th>
                            <th>Setting</th>
                        </tr>

                        @foreach($subcategorias as $subcategoria)
                        <tr>
                            <td>{{$subcategoria->SB_ID}} </td>
                            <td>{{$subcategoria->SB_DESCRIPCION}} </td>
                            <td>{{$subcategoria->SB_CVE_CATEGORIA}} </td>
                            <td>
                                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed" onclick='window.location.href="{{url('subcategorias/'.$subcategoria->SB_ID) }}"'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                <form style="display: inline-block;" action="{{url('subcategorias/'.$subcategoria->SB_ID)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </form>
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