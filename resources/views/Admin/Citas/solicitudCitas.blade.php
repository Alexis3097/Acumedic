@extends('Shared.masterAdmin')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row page-title align-items-center">
                <div class="col-sm-4 col-xl-6">
                    <h4 class="mb-1 mt-0">Solicitudes de citas</h4>
                           
                </div>
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
                                            <th scope="col">Estatus</th>
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
                                                    <td>
                                                        <span class="@if($solicitud->estatusSolicitud->Estatus == 'Pendiente') badge badge-soft-warning py-1 @elseif($solicitud->estatusSolicitud->Estatus == 'En proceso') badge badge-soft-primary py-1 @elseif($solicitud->estatusSolicitud->Estatus == 'Cancelado') badge badge-soft-danger py-1 @else badge badge-soft-success py-1 @endif">
                                                        {{$solicitud->estatusSolicitud->Estatus}}
                                                        </span>
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
@endsection