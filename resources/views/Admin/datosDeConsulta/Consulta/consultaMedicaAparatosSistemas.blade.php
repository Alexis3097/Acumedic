@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
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
                    <!-- content -->
                    <!-- row -->
            
                    <!-- products -->
                    <div class="row">
                        <div class="col-md-12 col-xl-12 col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media col-xl-2" style="display: inline-flex">
                                        <img src="{{asset('../img/Admin/users/avatar-4.jpg')}}"
                                            class="avatar-lg rounded-circle mr-2" alt="shreyu">
                                        <div class="media-body">
                                            <h5 class="mt-2 mb-0">Caralampio Martínez</h5>
                                            <h6 class="text-muted font-weight-normal mt-1 mb-4">New York, USA</h6>
                                        </div>
                                    </div>
                                    <div class="media col-md-9 button-list" style="display: inline-flex; top:-35px;">
                                            <button class="btn btn-outline-info" data-toggle="modal" data-target="#modal-error" style="width: 100%;" type="submit">Aparatos y sistemas</button>
                                            <a href="{{ route('consulta.SintomasSubjetivos') }}" class="btn btn-info" style="width: 100%;" type="submit">Síntomas subjetivos</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-1 mt-0">Aparatos y sistemas</h4>
                                    <form class="needs-validation row" novalidate>
                                        <div class="form-group col-md-6">
                                            <label for="validationCustom01">Cabeza</label>
                                            <input type="text" class="form-control" id="validationCustom01" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="validationCustom02">Cuello</label>
                                            <input type="text" class="form-control" id="validationCustom02" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="validationCustom02">Tronco</label>
                                            <input type="text" class="form-control" id="validationCustom02" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="validationCustom01">Pelvis</label>
                                            <input type="text" class="form-control" id="validationCustom01" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="validationCustom02">Miembro inferior</label>
                                            <input type="text" class="form-control" id="validationCustom02" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="validationCustom02">Miembro superior</label>
                                            <input type="text" class="form-control" id="validationCustom02" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="validationCustom02">Cabello</label>
                                            <input type="text" class="form-control" id="validationCustom02" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="validationCustom02">Dientes</label>
                                            <input type="text" class="form-control" id="validationCustom02" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="validationCustom02">Lengua</label>
                                            <input type="text" class="form-control" id="validationCustom02" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="validationCustom02">Pulso</label>
                                            <input type="text" class="form-control" id="validationCustom02" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
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
                    <!-- end row -->
                    <!-- stats + charts -->

                </div>
        </div> <!-- content -->
        <div class="modal fade" id="modal-error" tabindex="-1" role="dialog" aria-labelledby="modal-errorLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-errorLabel">¡Estas en esta página!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <i data-feather="alert-octagon" style="font-size: 3em;" class="uil-no-entry text-warning display-3"></i>
                        <p class="w-75 mx-auto text-muted">¡Ya te encuentras en esta página!</p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-outline-primary btn-rounded width-md"  data-dismiss="modal"><i class="uil uil-arrow-left mr-1 fas fa-arrow-left"></i>Regresar</a>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
@endsection