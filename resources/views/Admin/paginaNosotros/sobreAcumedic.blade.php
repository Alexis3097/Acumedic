@extends('Shared.masterAdmin')


@section('estilosAbouts')
<link rel="stylesheet" href="{{asset('js/Admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('js/Admin/libs/multiselect/multi-select.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('js/Admin/libs/select2/select2.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('js/Admin/libs/flatpickr/flatpickr.min.css')}}" type="text/css">
@endsection
@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0 col-md-6">Servicios</h4>
                        </div>
                    </div>

                    <!-- content -->
                    <!-- row -->
            
                    <!-- products -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-0 mb-0 header-title">Lista de páginas</h5>

                                    <div class="table-responsive mt-12">
                                    <div id="alerta"></div>
                                        <table class="table table-hover table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nombre de sección</th>
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Descripción de tu empresa</td>
                                                    
                                                    <td>
                                                        <span data-toggle="tooltip" data-placement="left" title="Ejemplo de como se veria"><button type="button" class="btn btn-outline-success"  name="delete_modal" data-toggle="modal" data-target="#verDescripcion1" ><i class="fa fa-eye"></i></button></span>
                                                        <span data-toggle="tooltip" data-placement="left" title="Editar sección"><a href="{{ route('sobreNosotros.descripcion')}}" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a></span>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Descripción de segunda sección</td>
                                                    
                                                    <td>
                                                        <span data-toggle="tooltip" data-placement="left" title="Ejemplo de como se veria"><button type="button" class="btn btn-outline-success"  name="delete_modal" data-toggle="modal" data-target="#verDescripcion2" ><i class="fa fa-eye"></i></button></span>
                                                        <span data-toggle="tooltip" data-placement="left" title="Editar sección"><a href="{{ route('sobreNosotros.segundaSeccion')}}" class="btn btn-outline-warning"  ><i class="fa fa-edit"></i></a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Contacto</td>
                                                    
                                                    <td>
                                                        <span data-toggle="tooltip" data-placement="left" title="Ejemplo de como se veria"><button type="button" class="btn btn-outline-success"  name="delete_modal" data-toggle="modal" data-target="#verInformacion" ><i class="fa fa-eye"></i></button></span>
                                                        <span data-toggle="tooltip" data-placement="left" title="Editar sección"><button type="button" class="btn btn-outline-warning"  id="infoContacto"><i class="fa fa-edit"></i></button></span>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>¿Cuales son tus servicios? (Solo funcional cuando tiene 6 o más servicios registrados) 
                                                        <span>
                                                            @if($verServicio->Servicios)
                                                            <span data-toggle="tooltip" data-placement="right" title="Los servicios están visible"><i class="fa fa-eye"></i></span>
                                                            @else
                                                            <span data-toggle="tooltip" data-placement="right" title="Los servicios no están visible"><i class="fa fa-eye-slash"></i></span>
                                                            @endif
                                                            
                                                        </span>
                                                    </td>
                                                    
                                                    <td>
                                                        <span data-toggle="tooltip" data-placement="left" title="Ejemplo de como se veria"><button type="button" class="btn btn-outline-success"  name="delete_modal" data-toggle="modal" data-target="#verServicios" ><i class="fa fa-eye"></i></button></span>
                                                        <span data-toggle="tooltip" data-placement="left" title="Editar sección"><button type="button" class="btn btn-outline-warning editServ" id="agregarServicios" @if(count($servicios)>=6) enabled @else disabled @endif><i class="fa fa-edit"></i></button></span>
                                                        
                                                        <!-- servicios es de tipo bool -->
                                                        @if($verServicio->Servicios)
                                                        <span data-toggle="tooltip" data-placement="left" title="Ocultar sección"><button type="button" class="btn btn-outline-danger" name="delete_modal" data-toggle="modal" data-target="#ocultar" @if(count($servicios)>=6) enabled @else disabled @endif ><i class="fa fa-eye-slash"></i></button></span>
                                                        @else
                                                        <span data-toggle="tooltip" data-placement="left" title="Hacer visible la sección"><button type="button" class="btn btn-outline-info" name="delete_modal" data-toggle="modal" data-target="#ocultar" @if($numeroDeServicios>=6) enabled @else disabled @endif ><i class="fa fa-eye"></i></button></span>
                                                        @endif

                                                    </td>
                                                </tr>
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
<!-- SECCION DE HELPERS PARA VALIDACIONES -->
<a href="{{route('sobreNosotros')}}" id="list"></a>
<!-- FIN DE SECCION DE HLEPERS -->
<!-- seleccionar servicios -->
<div class="modal fade" id="editServ" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="display: inline; width: 100%;" id="exampleModalLongTitle" >Añade tus seis servicios principales</h5>
                        <br>
                        <h6 style="display: inline; width: 100%;">Esta sección se pone disponible cuando cuentas con 6 servicios o más:</h6>
                        <br>
                        <div id="errorMax" style="color:red; display: inline; width: 100%;"></div>
                        <div class="modal-footer"></div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation row form">
                            @csrf
                            <div class="form-group col-md-12">
                                <label for="validationCustom01">Añade tus servicios</label>
                                <select class="form-control wide" data-plugin="customselect" multiple id="servicios" name="servicios[]">
                                    @foreach($servicios as $servicio)
                                        <option value="{{$servicio->id}}" @if(in_array($servicio->id,$servicio->ServiciosSeleccionado->pluck('IdServicio')->toArray())) selected @endif>{{$servicio->Nombre}}</option>
                                    @endforeach
                                </select>
                                <div id="errorServicio" style="color:red;"></div>
                            </div>
                            <div class="form-group col-md-12">
                                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                                <button class="btn btn-primary" type="submit" id="btnServicios">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</div>
<!-- end seleccionar servicios -->
<!-- contacto -->
<div class="modal fade" id="editInfo" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">La sección que vas a editar es la siguiente:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation row form" >
                        @csrf
                            <input type="hidden" id="id">
                            <div class="form-group col-md-12">
                                <label for="Telefono">Escribe tu número</label>
                                <input type="text" class="form-control" id="Telefono"  name="Telefono" placeholder="Agrega el número telefónico" >
                                <div id="errorTelefono" style="color:red;"></div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Horario">Escribe tu horario</label>
                                <input type="text" class="form-control" id="Horario" name="Horario"  placeholder="Agrega tu horario" >
                                <div id="errorHorario" style="color:red;"></div>
                            </div>
                            <div class="form-group col-md-12">
                                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                                <button class="btn btn-primary ActualziarContacto" type="submit">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<!-- end contacto -->
        <div class="modal fade" id="verDescripcion1" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">La sección que vas a editar es la siguiente:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{asset('../img/Admin/desc-1.png')}}" style="width: 100%;" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="verDescripcion2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">La sección que vas a editar es la siguiente:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{asset('../img/Admin/desc-2.png')}}" style="width: 100%;" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="verInformacion" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">La sección que vas a editar es la siguiente:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{asset('../img/Admin/desc-3.png')}}" style="width: 100%;" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="verServicios" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">La sección que vas a editar es la siguiente:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{asset('../img/Admin/desc-4.png')}}" style="width: 100%;" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="ocultar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                        @if($verServicio->Servicios)
                        Ocultar
                        @else
                        Hacer visible
                        @endif
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <form action="{{route('visibilidadServicio')}}" method="post">  
                            @csrf
                            @method('put')
                            @if($verServicio->Servicios)
                            <p>¿Esta seguro que quieres ocultar está sección?</p>
                            <input type="hidden" name="opcion" value="0">
                            @else
                            <p>¿Esta seguro que quieres hacer visible está sección?</p>
                            <input type="hidden" name="opcion" value="1"> 
                            @endif
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Si</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</div>
@endsection
@section('scriptAbout')
<script src="{{asset('js/Admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('js/Admin/libs/select2/select2.min.js')}}"></script>
<script src="{{asset('js/Admin/libs/multiselect/jquery.multi-select.js')}}"></script>
<script src="{{asset('js/Admin/libs/flatpickr/flatpickr.min.js')}}"></script>
<!-- <script src="{{asset('js/Admin/pages/form-advanced.init.js')}}"></script> -->
<script src="{{asset('js/Admin/contacto.js')}}"></script>
@endsection