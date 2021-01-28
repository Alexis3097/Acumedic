@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
    @can('ListadoServicio')
        <div class="content">
            <div class="container-fluid">
                <form action="{{route('servicios.buscar')}}" method="get">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-6 col-md-6 col-xl-6">
                            <h4 class="mb-1 mt-0">Buscar servicio</h4>
                            <div class="input-group">
                                <input type="text" name="Nombre" class="form-control col-lg-12 @error('Nombre') is-invalid @enderror" placeholder="Buscar servicio" >
                                @error('Nombre')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-3" style="display:inline-block;">
                                <button type="submit" style="margin:38px 19px 0px;" class="form-control btn btn-large btn-primary">Buscar</button>
                        </div>
                    </div>
                </form>

                <!-- content -->
                <!-- row -->
        
                <!-- products -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                @can('CrearServicio')
                                    <a href="{{route('servicios.create')}}" style="margin-right:10px; margin-bottom:10px;" class="btn btn-primary btn-sm float-right">
                                        <i class='fa fa-plus'></i> Nuevo servicio
                                    </a>
                                @endcan
                                <h5 class="card-title mt-0 mb-0 header-title">Lista de servicios</h5>

                                <div class="table-responsive mt-12">
                                    <table class="table table-hover table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nombre de servicio</th>
                                                <th scope="col">Precio del servicio</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <div class="container">
                                                @foreach($servicios as $servicio)
                                                    <tr>
                                                        <input type="hidden" value="{{ $servicio->id}}">
                                                        <td>{{$servicio->Nombre}}</td>
                                                        <td>${{$servicio->Precio}}</td>
                                                        <td>
                                                            @can('EditarServicio')
                                                                <a href="{{route('servicios.edit',['id'=>$servicio->id])}}" data-toggle="tooltip" data-placement="left" title="Editar servicio" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a>
                                                            @endcan
                                                            @can('EliminarServicio')
                                                            <span data-toggle="tooltip" data-placement="left" title="Eliminar servicio"> <button type="button" class="btn btn-outline-danger delete" name="delete_modal" data-toggle="modal" data-target="#eliminarServicio" ><i class="fa fa-trash"></i></button></span>
                                                            @endcan

                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </div>
                                            {{$servicios->links() }}
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->
                <!-- stats + charts -->
            </div>
        </div>
    @endcan
</div> <!-- content -->
<div class="modal fade" id="eliminarServicio" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Eliminar servicio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('servicios.destroy')}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="IdModal" id="IdModal">
                    <p>¿Esta seguro que desea eliminar este servicio?</p>
                    <p style="color:red;">(Si el servicio está en la sección de "nosotros", se eliminara y la sección se ocultara hasta que seleccione 6 servicios)</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Si, Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scriptPacientes')
    <script src="{{asset('js/Admin/modales.js')}}"></script>
@endsection