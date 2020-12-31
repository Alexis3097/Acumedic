@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
    @can('ListadoInventario')
        <div class="content">
            <div class="container-fluid">
                <form action="{{route('productos.buscar')}}" method="get">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-6 col-md-6 col-xl-6">
                            <h4 class="mb-1 mt-0">Buscar producto</h4>
                            <div class="input-group">
                                <input type="text" name="Nombre" class="form-control col-lg-12 @error('Nombre') is-invalid @enderror" placeholder="Buscar producto" required>
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
                <div class="form-group mb-4">
                    <a href="{{route('inventario.list')}}"  class="form-control btn btn-small width-xs btn-info">Todos los productos</a>
                </div>
                <!-- content -->
                <!-- row -->
                <!-- products -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mt-0 mb-0 header-title">Lista de productos en inventario</h5>

                                <div class="table-responsive mt-12">
                                    <table class="table table-hover table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nombre de producto</th>
                                                <th scope="col">Cantidad total en inventario</th>
                                                <th scope="col">Stock minimo</th>
                                                <th scope="col">Precio publico</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <div class="container">
                                            @foreach($productos as $producto)
                                                <tr>
                                                    <input type="hidden" value="{{ $producto->id}}">
                                                    <td>{{$producto->Nombre}}</td>
                                                    <td>@if(isset($producto->inventario->Cantidad)){{$producto->inventario->Cantidad}}@else 0 @endif</td>
                                                    <td>@if(isset($producto->inventario->StockMinimo)){{$producto->inventario->StockMinimo}}@else 0 @endif</td>
                                                    <td>{{$producto->PrecioPublico}}</td>
                                                    
                                                    <td>
                                                    @can('CrearInventario')
                                                        <span data-toggle="tooltip" data-placement="left" title="Agregar prducto"><button type="button"  class="btn btn-outline-success AgregarProducto"  data-toggle="modal" data-target="#agregarProducto"><i class="fas fa-plus-circle"></i></button></span>  
                                                    @endcan
                                                    @can('EditarInventario')
                                                    <span data-toggle="tooltip" data-placement="left" title="Editar inventario" ><button class="btn btn-outline-warning editar agregarId" data-toggle="modal" data-target="#editarInventario"><i class="fa fa-edit"></i></button></span>    
                                                    @endcan
                                                    @can('EliminarInventario')
                                                        <span data-toggle="tooltip" data-placement="left" title="Vaciar inventario">
                                                            <button type="button" class="btn btn-outline-danger agregarId" name="delete_modal" data-toggle="modal" data-target="#eliminarProducto"
                                                                @if(isset($producto->inventario->Cantidad)) enabled @else disabled @endif>
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </span>
                                                    @endcan
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </div>
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
    @endcan
    <a href="{{route('inventario.list')}}" id="list"></a>
</div> <!-- content -->
<!-- vaciar inventario -->
<div class="modal fade" id="eliminarProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Vaciar inventario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('inventario.destroy')}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="IdModal" id="IdModal" class="IdProducto">
                    <p>¿Esta seguro que desea vaciar el inventario de este producto?</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Si, vaciar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- agregar solo producto -->
<div class="modal fade" id="agregarProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar producto a inventario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form">
                    @csrf
                    <input type="hidden" name="IdModal" id="IdProducto" class="IdProducto">
                    <label for="Cantidad">Cantidad a agregar</label>
                    <input type="text" class="form-control" required name="Cantidad" id="Cantidad">
                    <div id="errorCantidad1" style="color:red;"></div>
                    <div id="errorCantidad2" style="color:red;"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary enviar" id="buttonAdd">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- editar cantidad y stock -->
<div class="modal fade" id="editarInventario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Actualiazar inventario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form">
                    @csrf
                    <input type="hidden" name="IdModal" id="IdProductoEditar" class="IdProducto">
                    <label for="Cantidad">Cantidad total</label>
                    <input type="text" class="form-control" required name="Cantidad" id="editCantidad">
                    <div id="errorEditCantidad1" style="color:red;"></div>

                    <label for="Cantidad">Stock minimo</label>
                    <input type="text" class="form-control" required name="StockMinimo" id="Stock">
                    <div id="errorStock1" style="color:red;"></div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary update" id="buttonEditar">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
@section('scriptInventario')
    <script src="{{asset('js/Admin/AgregarCantidadProducto.js')}}"></script>
@endsection