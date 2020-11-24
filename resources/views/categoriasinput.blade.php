@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Agregar Categorias</h3>

            </div>
            <div class="box-body">

                <form method="POST" action="@isset($categoria) {{url('categorias/')}}/{{$categoria->CA_IDENTIFICADOR}}@else{{route('categorias.store')}}@endisset">
                    @csrf
                    @isset($categoria)
                    @method('PATCH')
                    @endisset
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Identificador') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="CA_IDENTIFICADOR" value="@isset($categoria){{$categoria->CA_IDENTIFICADOR}}@endisset{{ old('name')}}" required autocomplete="name" autofocus>

                            @error('CA_IDENTIFICADOR')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="CA_NOMBRE" value="@isset($categoria){{$categoria->CA_NOMBRE}}@endisset {{ old('last_name') }}" required autocomplete="name" autofocus>

                            @error('CA_NOMBRE')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Estatus') }}</label>

                        <div class="col-sm-6">
                            <select name="CAT_ACTIVO" class="form-control @error('name') is-invalid @enderror">
                                <option value="A">Activo</option>
                                <option value="N">No Vigente</option>
                                <select>
                                    @error("CAT_ACTIVO")
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                        </div>
                    </div>



                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Guardar') }}
                            </button>
                        </div>
                    </div>
                </form>






            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    @endsection
    @section('script')



    </script>
    @stop