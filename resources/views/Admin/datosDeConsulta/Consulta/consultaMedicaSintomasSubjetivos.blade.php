@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <!-- content -->
                <!-- row -->
                <div class="row page-title align-items-center">
                    <div class="col-sm-12 col-xl-11">
                        <h2 class="mb-1 mt-0"><i style="font-size: 1.2em; color:#232323;" class="icon-dual fas fa-file-prescription"></i> Consulta médica</span></h2>
                    </div>
                    <div class="col-sm-1 col-xl-1">
                                <button type="button" class="btn btn-outline-primary">
                                    <i class='fas fa-arrow-left'></i> Regresar
                                </button>
                    </div>
                </div>
                <!-- products -->
                <div class="row">
                    <div class="col-md-12 col-xl-12 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="media col-xl-2" style="display: inline-flex">
                                    <img src="{{asset('../img/Admin/users/avatar-4.jpg')}}" class="avatar-lg rounded-circle mr-2"
                                        alt="shreyu">
                                    <div class="media-body">
                                        <h5 class="mt-2 mb-0">Caralampio Martínez</h5>
                                        <h6 class="text-muted font-weight-normal mt-1 mb-4">New York, USA</h6>
                                    </div>
                                </div>
                                <div class="media col-md-9 button-list" style="display: inline-flex; top:-35px;">
                                    <button class="btn btn-info" style="width: 100%;" type="submit">Aparatos y
                                        sistemas</button>
                                    <button class="btn btn-outline-info" data-toggle="modal" data-target="#modal-error"
                                        style="width: 100%;" type="submit">Síntomas subjetivos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-12 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <a data-toggle="modal" data-target="#nuevo-sintoma" href="" style="margin-bottom:10px;" class="btn btn-primary btn-sm float-right">
                                    <i class='uil uil-export ml-2 fas fa-plus'></i> Nuevo sintoma
                                </a>
                                <h5 class="card-title mt-0 mb-0 header-title">Lista de sintomas</h5>

                                <div class="table-responsive mt-12">
                                    <table class="table table-hover table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Padecimiento</th>
                                                <th scope="col">Descripción</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>krikoso</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit...</td>
                                                <td><button type="button" class="btn btn-outline-warning"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button data-toggle="modal" data-target="#sintoma-texto"  type="button" class="btn btn-outline-info"><i
                                                            class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-outline-danger"><i
                                                            class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>krikoso</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit...</td>
                                                <td><button type="button" class="btn btn-outline-warning"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button data-toggle="modal" data-target="#sintoma-texto" type="button" class="btn btn-outline-info"><i
                                                            class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-outline-danger"><i
                                                            class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>krikoso</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit...</td>
                                                <td><button type="button" class="btn btn-outline-warning"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button data-toggle="modal" data-target="#sintoma-texto" type="button" class="btn btn-outline-info"><i
                                                            class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-outline-danger"><i
                                                            class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card-body-->
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <!-- stats + charts -->

            </div>
        </div> <!-- content -->
    </div>
        <!-- modal text sintoma -->
    <!--  Modal content for the above example -->
    <div class="modal fade" id="sintoma-texto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Nombre del sintoma</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat molestias iste repellendus autem saepe laborum explicabo, veritatis cumque, alias reprehenderit perferendis, tenetur eaque numquam rerum inventore ad adipisci. Aliquam, voluptas?</p>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- modal text sintoma -->
    <!-- modal nuevo sintoma -->
    <!--  Modal content for the above example -->
    <div class="modal fade" id="nuevo-sintoma" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Agregar nuevo sintoma</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation row" novalidate>
                        <div class="form-group col-md-12">
                            <label for="validationCustom02">Nombre del sintoma</label>
                            <input type="text" class="form-control" id="validationCustom02" required>
                            <div class="valid-feedback">
                                Guardado
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Descripción</label>
                            <div>
                                <textarea required class="form-control" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                                <button class="btn btn-danger" type="submit">Cancelar</button>
                                <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- modal nuevo sintoma -->
    <!-- modal error -->
    <div class="modal fade" id="modal-error" tabindex="-1" role="dialog" aria-labelledby="modal-errorLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-errorLabel">¡Estas en esta página!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <i data-feather="alert-octagon" style="font-size: 3em;"
                        class="uil-no-entry text-warning display-3"></i>
                    <p class="w-75 mx-auto text-muted">¡Ya te encuentras en esta página!</p>
                    <div class="mt-4">
                        <a href="#" class="btn btn-outline-primary btn-rounded width-md" data-dismiss="modal"><i
                                class="uil uil-arrow-left mr-1 fas fa-arrow-left"></i>Regresar</a>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection