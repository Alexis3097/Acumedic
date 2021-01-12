@extends('Shared.masterAdmin')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row page-title align-items-center">
                <form action="">
                    <div class="col-sm-4 col-xl-6">
                        <h4 class="mb-1 mt-0">Solicitudes de citas</h4>
                        <div class="input-group">
                            <input type="text" name="Nombre" class="form-control col-lg-12 @error('Nombre') is-invalid @enderror" placeholder="Buscar solicitud" required>
                            <div class="invalid-feedback">
                            </div>
                        </div>      
                    </div>
                    <div class="form-group mb-3" style="display:inline-block;">
                            <button type="submit" style="margin:38px 19px 0px;" class="form-control btn btn-large btn-primary">Buscar</button>
                    </div>  
                </form>
            </div>
            <div class="form-group mb-4">
                <a href="{{route('solicitudCita.pendientes')}}" style="margin:45px 40px 0px;" class="form-control btn btn-small width-xs btn-info">Solicitud de citas pendientes</a>
            </div>
                    <!-- content -->
                    <!-- row -->       
                    <!-- products -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mt-0 mb-0 header-title">Lista de solicitud</h5>
                            <div class="table-responsive mt-12">
                                <table class="table table-hover table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre </th>
                                            <th scope="col">Número</th>
                                            <th scope="col">Ciudad</th>
                                            <th scope="col">Correo electrónico</th>
                                            <th scope="col">Tiempo de solicitud</th>
                                            <th scope="col">Estatus</th>
                                            <th scope="col">Cambiar estatus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div class="container">
                                            @foreach($solicitudCitas as $solicitud)
                                                <tr>
                                                    <td>{{$solicitud->NombreCompleto}}</td>
                                                    <td>{{$solicitud->Telefono}}</td>
                                                    <td>{{$solicitud->Ciudad}}</td>
                                                    <td>{{$solicitud->Correo}}</td>
                                                    <td>{{$solicitud->created_at->diffForHumans()}}</td>
                                                    <td>
                                                        <span class="@if($solicitud->estatusSolicitud->Estatus == 'Pendiente') badge badge-soft-warning py-1 @elseif($solicitud->estatusSolicitud->Estatus == 'En proceso') badge badge-soft-primary py-1 @elseif($solicitud->estatusSolicitud->Estatus == 'Cancelado') badge badge-soft-danger py-1 @else badge badge-soft-success py-1 @endif">
                                                        {{$solicitud->estatusSolicitud->Estatus}}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Estatus <i class="fas fa-chevron-down"></i></button>
                                                            <div class="dropdown-menu estatus">
                                                                <input type="hidden" value="{{$solicitud->id}}">
                                                                <button type="button" class="dropdown-item changeEstatus" data-toggle="modal" data-target="#Estatus" value="2" id="">En proceso</button>
                                                                <button type="button" class="dropdown-item changeEstatus" data-toggle="modal" data-target="#Estatus" value="3" id="Completado">Completado</button>
                                                                <button type="button" class="dropdown-item changeEstatus" data-toggle="modal" data-target="#Estatus" value="4" id="">Cancelado</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </div>
                                        {{ $solicitudCitas->links() }}
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
    </div> <!-- content -->
</div>
<div class="modal fade" id="Estatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Cambiar estatus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('solicitudCita.changeEstatus')}}" method="post">
                    @csrf
                    @method('put')
                    <input type="hidden" name="IdEstatus" id="IdEstatus">
                    <input type="hidden" name="IdSolicitudCita" id="IdSolicitudCita">
                    <p>¿Esta seguro que desea cambiar el estatus?</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary Btndelete">Si, cambiar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('orden')
    <script src="{{asset('js/Admin/OrdenDeCita.js')}}"></script>
@endsection