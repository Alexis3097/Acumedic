@extends('Shared.masterAdmin')
@section('estilosAntecedentes')
<link rel="stylesheet" href="{{asset('js/Admin/libs/smartwizard/smart_wizard.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('js/Admin/libs/smartwizard/smart_wizard_theme_arrows.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('js/Admin/libs/smartwizard/smart_wizard_theme_circles.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('js/Admin/libs/smartwizard/smart_wizard_theme_dots.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('js/Admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('js/Admin/libs/multiselect/multi-select.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('js/Admin/libs/select2/select2.min.css')}}" type="text/css">
@endsection
@section('content')
<div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row page-title align-items-center">
                    <div class="col-xs-10 col-md-10 col-xl-10">
                        <h2 class="mb-1 mt-0"><i style="font-size: 1.2em; color:#232323;"
                                class="icon-dual fas fa-file-prescription"></i> Antecedentes</span></h2>
                    </div>
                    <div class="col-xs-2 col-md-2 col-xl-2">
                        <a href="{{route('consulta.pacientePerfil',['IdPaciente' =>$paciente->id])}}" class="btn btn-outline-primary">
                            <i class='fas fa-arrow-left'></i> Regresar
                        </a>
                    </div>
                </div>
                <!-- content -->
                <!-- row -->

                <!-- products -->
                <div class="row">
                    <div class="col-md-12 col-xl-12 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="media col-xs-3 col-md-3 col-xl-3" style="display: inline-flex">
                                    @if(is_null($paciente->Foto))
                                    <img src="{{asset('../img/Admin/users/avatar-4.jpg')}}" class="avatar-lg rounded-circle mr-2"
                                        alt="foto">
                                    @else
                                    <img src="{{asset('../uploads/'.$paciente->Foto)}}" class="avatar-lg rounded-circle mr-2"
                                        alt="foto">
                                    @endif
                                    <div class="media-body">
                                        <h5 class="mt-2 mb-0">{{$paciente->NombreCompleto}}</h5>
                                        <h6 class="text-muted font-weight-normal mt-1 mb-4">{{$paciente->LugarOrigen}}</h6>
                                    </div>
                                </div>
                                <div class="media col-md-9 button-list" style="display: inline-flex; top:-35px;">
                                    <a href="{{route('antecedente.patologico',['IdPaciente'=>$paciente->id])}}" class="btn btn-info" style="width: 100%;" type="submit">Patologicos</a>
                                    <button class="btn btn-outline-info" data-toggle="modal" data-target="#modal-error"
                                        style="width: 100%;" type="submit">No Patologicos</button>
                                    <a href="{{route('antecedente.ginecologico',['IdPaciente'=>$paciente->id])}}" class="btn btn-info" style="width: 100%;"
                                        type="submit">Ginecológicos</a>
                                    <a href="{{route('antecedente.familiares',['IdPaciente'=>$paciente->id])}}" class="btn btn-info" style="width: 100%;" type="submit">H.
                                        Familiares</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-1 mt-0">No Patologicos</h4>
                            <form action="{{ route('antecedente.NoPatologico.guardar') }}" method="post">
                            @csrf
                            <input type="hidden" name="IdPaciente" value="{{$paciente->id}}">
                                <div class="form-group mt-3 mt-xl-0">
                                    <label for="ActividadFisica">Actividades Físicas</label>
                                    <input type="text" class="form-control" name="ActividadFisica" id="ActividadFisica"
                                        placeholder="Ingrese si el paciente hace alguna actividad física">
                                </div>
                                <div class="form-group">
                                    <label for="Tabaquismo">Tabaquismo</label>
                                    <input type="text" class="form-control" name="Tabaquismo" id="Tabaquismo"
                                        placeholder="Ingrese si el paciente consume tabaco">
                                </div>
                                <div class="form-group mb-0">
                                    <label for="Alcoholismo">Alcoholismo</label>
                                    <input type="text" class="form-control" name="Alcoholismo" id="Alcoholismo"
                                        placeholder="Ingrese si el paciente consume alcohol">
                                </div>
                                <div class="form-group mb-0">
                                    <label for="SustanciasODrogas">Uso de sustancias o drogas</label>
                                    <input type="text" class="form-control" name="SustanciasODrogas" id="SustanciasODrogas"
                                        placeholder="Ingrese si el paciente usa sustancias o drogas">
                                </div>
                                <div class="form-group mb-0">
                                    <label for="VacunasRecientes">Vacunas recientes</label>
                                    <input type="text" class="form-control" name="VacunasRecientes" id="VacunasRecientes"
                                        placeholder="Ingrese si el paciente usa sustancias o drogas">
                                </div>
                                <div class="form-group mb-0">
                                    <label for="Otros">Otros</label>
                                    <input type="text" class="form-control" name="Otros" id="Otros"
                                        placeholder="Otro antecedente no patologico">
                                </div>
                                <div class="form-group col-md-12" style="padding-top:2%;">
                                    <a href="{{route('consulta.pacientePerfil',['IdPaciente' =>$paciente->id])}}" class="btn btn-danger" >Cancelar</a>
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
@section('scriptAntecedentes')
<script src="{{asset('js/jquery.js')}}"></script>   
<script src="{{asset('js/Admin/vendor.min.js')}}"></script>
<script src="{{asset('js/Admin/app.min.js')}}"></script>
<script src="{{asset('js/Admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('js/Admin/libs/select2/select2.min.js')}}"></script>
<script src="{{asset('js/Admin/libs/multiselect/jquery.multi-select.js')}}"></script>
<script src="{{asset('js/Admin/libs/smartwizard/jquery.smartWizard.min.js')}}"></script>
<script src="{{asset('js/Admin/libs/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('js/Admin/pages/form-advanced.init.js')}}"></script>
<script src="{{asset('js/Admin/pages/form-wizard.init.js')}}"></script>
<script src="{{asset('js/Admin/pages/form-advanced.init.js')}}"></script>
@endsection