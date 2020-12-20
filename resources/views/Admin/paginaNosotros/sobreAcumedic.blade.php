@extends('Shared.masterAdmin')

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
                                                        <button type="button" class="btn btn-outline-warning"><i class="fa fa-edit"></i></button>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Descripción o historia de tu empresa</td>
                                                    
                                                    <td>
                                                        <button type="button" class="btn btn-outline-success"  name="delete_modal" data-toggle="modal" data-target="#verDescripcion2" ><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-outline-warning"  ><i class="fa fa-edit"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Información  <span><i class="fa fa-eye-slash"></i></span></td>
                                                    
                                                    <td>
                                                        <button type="button" class="btn btn-outline-success"  name="delete_modal" data-toggle="modal" data-target="#verInformacion" ><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-outline-warning"  name="delete_modal" data-toggle="modal" data-target="#editInfo" ><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-danger delete" name="delete_modal" data-toggle="modal" data-target="#ocultar"><i class="fa fa-eye-slash"></i></button>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>¿Cuales son tus servicios? (Solo 6) <span><i class="fa fa-eye-slash"></i></span></td>
                                                    
                                                    <td>
                                                        <button type="button" class="btn btn-outline-success"  name="delete_modal" data-toggle="modal" data-target="#verServicios" ><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-outline-warning"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-danger" name="delete_modal" data-toggle="modal" data-target="#ocultar"><i class="fa fa-eye-slash"></i></button>

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
                        <form class="needs-validation row" novalidate>
                            <div class="form-group col-md-12">
                                <label for="validationCustom01">Escribe tu número</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Pon el dato actual aqui" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="validationCustom01">Escribe tu horario</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Pon el dato actual aqui" required>
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
                        <img src="assets/images/desc-1.png" style="width: 100%;" alt="">
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
                        <img src="assets/images/desc-2.png" style="width: 100%;" alt="">
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
                        <img src="assets/images/desc-3.png" style="width: 100%;" alt="">
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
                        <img src="assets/images/desc-4.png" style="width: 100%;" alt="">
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
