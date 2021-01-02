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
                                                        <button type="button" class="btn btn-outline-success"  name="delete_modal" data-toggle="modal" data-target="#verDescripcion1" ><i class="fa fa-eye"></i></button>
                                                        <a href="{{ route('sobreNosotros.descripcion')}}" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Descripción o historia de tu empresa</td>
                                                    
                                                    <td>
                                                        <button type="button" class="btn btn-outline-success"  name="delete_modal" data-toggle="modal" data-target="#verDescripcion2" ><i class="fa fa-eye"></i></button>
                                                        <a href="{{ route('sobreNosotros.segundaSeccion')}}" class="btn btn-outline-warning"  ><i class="fa fa-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Contacto</td>
                                                    
                                                    <td>
                                                        <button type="button" class="btn btn-outline-success"  name="delete_modal" data-toggle="modal" data-target="#verInformacion" ><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-outline-warning"  id="infoContacto"><i class="fa fa-edit"></i></button>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>¿Cuales son tus servicios? (Solo 6) <span><i class="fa fa-eye-slash"></i></span></td>
                                                    
                                                    <td>
                                                    <button type="button" class="btn btn-outline-success"  name="delete_modal" data-toggle="modal" data-target="#verServicios" ><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-outline-warning" name="delete_modal" data-toggle="modal" data-target="#editServ"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-danger" name="delete_modal" data-toggle="modal" data-target="#ocultar" disabled><i class="fa fa-eye-slash"></i></button>

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
<!-- seleccionar servicios -->
<div class="modal fade" id="editServ" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="display: inline; width: 100%;" id="exampleModalLongTitle" >Añade tus seis servicios principales</h5>
                        <br>
                        <h6 style="display: inline; width: 100%;">Esta sección se pone disponible cuando cuentas con 6 servicios o más:</h6>
                        <div class="modal-footer"></div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation row" novalidate>
                            <div class="form-group col-md-12">
                                <label for="validationCustom01">Añade tus servicios</label>
                                <select class="form-control wide" data-plugin="customselect" multiple>
                                    @foreach($servicios as $servicio)
                                        <option value="{{$servicio->id}}">{{$servicio->Nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <button class="btn btn-danger" type="submit">Cancelar</button>
                                <button class="btn btn-primary" type="submit">Guardar</button>
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
                        <form class="needs-validation row" id="form">
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
                        <h5 class="modal-title" id="exampleModalLongTitle">Ocultar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <input type="hidden" name="IdModal" id="IdModal">
                            <p>¿Esta seguro que quieres ocultar está sección?</p>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Si, ocultar</button>
                            </div>
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
<script src="{{asset('js/Admin/pages/form-advanced.init.js')}}"></script>
<script src="{{asset('js/Admin/contacto.js')}}"></script>
@endsection