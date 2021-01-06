@extends('Shared.masterAdmin')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row page-title align-items-center">
                <div class="col-sm-4 col-xl-6">
                    <h4 class="mb-1 mt-0">Ordenes de productos</h4>       
                </div>
            </div>
                <!-- content -->
                <!-- row -->            
                <!-- products -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mt-0 mb-0 header-title">Lista de ordenes</h5>
                                <div class="table-responsive mt-12">
                                <table class="table table-hover table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre </th>
                                            <th scope="col">Número</th>
                                            <th scope="col">Correo electrónico</th>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Estatus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($ordenes as $orden)
                                        <tr>
                                            <td>{{$orden->NombreCompleto}}</td>
                                            <td>{{$orden->Telefono}}</td>
                                            <td>{{$orden->Correo}}</td>
                                            <td>{{$orden->producto->Nombre}}</td>
                                            <td>{{$orden->Cantidad}}</td>
                                            <td><span>$ </span>{{$orden->Total}}</td>
                                            <td>
                                                <span class="@if($orden->estatusOrden->Estatus == 'Pendiente') badge badge-soft-danger py-1 @elseif($orden->estatusOrden->Estatus == 'En proceso') badge badge-soft-primary py-1 @else badge badge-soft-success py-1 @endif">
                                                    {{$orden->estatusOrden->Estatus}}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
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