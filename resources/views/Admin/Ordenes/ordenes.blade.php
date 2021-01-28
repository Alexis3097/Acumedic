@extends('Shared.masterAdmin')
@section('content')
@can('OrdenDeCompra')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <form action="{{route('ordenes.buscar')}}">
                <div class="row page-title align-items-center">
                    <div class="col-sm-4 col-xl-6">
                        <h4 class="mb-1 mt-0">Órdenes de productos pendientes</h4> 
                        <div class="input-group">
                            <input type="text" name="buscar" class="form-control col-lg-12" placeholder="Buscar orden" required>
                        </div>    
                    </div>
                    <div class="form-group mb-3" style="display:inline-block;">
                        <button type="submit" style="margin:38px 19px 0px;" class="form-control btn btn-large btn-primary">Buscar</button>
                    </div>  
            </form>
                    <div class="form-group mb-4">
                        <a href="{{route('ordenes.todas')}}" style="margin:45px 40px 0px;" class="form-control btn btn-small width-xs btn-info">Todas las ordenes</a>
                    </div>
                </div>
                <!-- content -->
                <!-- row -->            
                <!-- products -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mt-0 mb-0 header-title">Lista de órdenes</h5>
                                <div class="table-responsive mt-12">
                                <table class="table table-hover table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre </th>
                                            <th scope="col">Número</th>
                                            <th scope="col">Correo</th>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Tiempo</th>
                                            <th scope="col">Estatus</th>
                                            <th scope="col">Detalles</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <div class="container">
                                        @foreach($ordenes as $orden)
                                            <tr>
                                                <input type="hidden" value="{{$orden->direccion->Estado}}">
                                                <input type="hidden" value="{{$orden->direccion->Municipio}}">
                                                <input type="hidden" value="{{$orden->direccion->Colonia}}">
                                                <input type="hidden" value="{{$orden->direccion->Calle}}">
                                                <input type="hidden" value="{{$orden->direccion->NoExterior}}">
                                                <input type="hidden" value="{{$orden->direccion->NoInterior}}">
                                                <input type="hidden" value="{{$orden->direccion->Calle1}}">
                                                <input type="hidden" value="{{$orden->direccion->Calle2}}">
                                                <input type="hidden" value="{{$orden->id}}">
                                                <input type="hidden" value="{{$orden->estatusSolicitud->Estatus}}">
                                                <input type="hidden" value="{{$orden->created_at->toDateTimeString()}}">
                                                <td>{{$orden->NombreCompleto}}</td>
                                                <td>{{$orden->Telefono}}</td>
                                                <td>{{$orden->Correo}}</td>
                                                <td>{{$orden->producto->Nombre}}</td>
                                                <td>{{$orden->Cantidad}}</td>
                                                <td><span>$ </span>{{$orden->Total}}</td>
                                                <td>{{$orden->created_at->diffForHumans()}}</td>
                                                <td>
                                                    <span class="@if($orden->estatusSolicitud->Estatus == 'Pendiente') badge badge-soft-warning py-1 @elseif($orden->estatusSolicitud->Estatus == 'En proceso') badge badge-soft-primary py-1 @elseif($orden->estatusSolicitud->Estatus == 'Cancelado') badge badge-soft-danger py-1 @else badge badge-soft-success py-1 @endif">
                                                        {{$orden->estatusSolicitud->Estatus}}
                                                    </span>
                                                </td>
                                                <td><span data-toggle="tooltip" data-placement="left" title="Ver detalles de direccion"><button type="button" name=""  class="btn btn-outline-info ver" data-toggle="modal" data-target="#verDireccion"><i class="fa fa-eye"></i></button></span></td>
                                            </tr>
                                        @endforeach
                                    </div>
                                    {{ $ordenes->links() }}
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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Datos de dirección</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="IdOrden">
                <h6>Fecha y hora de solicitud: <span id="FechaHora"></span></h6>
                <h6>Dirección:</h6>
                <p>Estado: <span id="Estado"></span></p>
                <p>Municipio: <span id="Municipio"></span></p>
                <p>Colonia: <span id="Colonia"></span></p>
                <p>Calle: <span id="Calle"></span></p>
                <hr>
                <h6>Referencias</h6>
                <p>Número exterior: <span id="NoExterior"></span></p>
                <p>Número interior: <span id="NoInterior"></span></p>
                <p>Calle referencia 1: <span id="Calle1"></span></p>
                <p>Calle referencia 2: <span id="Calle2"></span></p>
            </div>
            <div class="modal-footer">
            <h6>Seleccionar estatus</h6>
                <button type="button" class="btn btn-info IdEstatus" data-toggle="modal" data-target="#Estatus" value="2">En proceso</button>
                <button type="button" class="btn btn-success IdEstatus" data-toggle="modal" data-target="#Estatus"  value="3" id="Completado">Completado</button>
                <button type="button" class="btn btn-danger IdEstatus" data-toggle="modal" data-target="#Estatus"  value="4">Cancelado</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
                <form action="{{route('ordenes.changeEstatus')}}" method="post">
                    @csrf
                    @method('put')
                    <input type="hidden" name="IdEstatus" id="IdEstatus">
                    <input type="hidden" name="IdOrden" id="IdOrdenEdit">
                    <p>¿Está seguro que desea cambiar el estatus?</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary Btndelete">Si, cambiar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endcan
@endsection
@section('orden')
    <script src="{{asset('js/Admin/ordenDeCompra.js')}}"></script>
@endsection