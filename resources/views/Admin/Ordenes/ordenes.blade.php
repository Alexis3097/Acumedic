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
                                            <th scope="col">Datos generales</th>
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
                                            <td><span data-toggle="tooltip" data-placement="left" title=""><button type="button" name="" class="btn btn-outline-info" data-toggle="modal" data-target="#verDireccion"><i class="fa fa-eye"></i></button></span></td>
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
<div id="verDireccion" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Datos de dirección</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>Dirección:</h6>
                <p><span>Estado: </span>Chiapas</p>
                <p><span>Municipio: </span>Tuxtla</p>
                <p><span>Colonia: </span>Campayork</p>
                <p><span>Calle: </span>Av. Fontana</p>
                <hr>
                <h6>Referencias</h6>
                <p><span>Número exterior:# </span>332</p>
                <p><span>Número interior: </span>AB</p>
                <p><span>Calle referencia 1: </span>Av. Santa Maria</p>
                <p><span>Calle referencia 2: </span>Circuto las flores sur</p>
            </div>
            <div class="modal-footer">
            <h6>Seleccionar estatus</h6>
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warn">Cancelado</button>
                <button type="button" class="btn btn-info">Pendiente</button>
                <button type="button" class="btn btn-success">Completado</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection