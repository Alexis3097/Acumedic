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
                        <div class="col-sm-12 col-xl-11">
                            <h2 class="mb-1 mt-0"><i style="font-size: 1.2em; color:#232323;" class="icon-dual fas fa-file-prescription"></i> Antecedentes</span></h2>
                        </div>
                        <div class="col-sm-1 col-xl-1">
                            <a href="{{route('consulta.paciente',['IdPaciente' =>$paciente->id])}}" class="btn btn-outline-primary">
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
                                    <div class="media col-xl-2" style="display: inline-flex">
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
                                        <button class="btn btn-outline-info" data-toggle="modal" data-target="#modal-error" style="width: 100%;" type="submit">Patologicos</button>
                                            <a href="{{route('antecedente.NoPatologico',['IdPaciente'=>$paciente->id])}}" class="btn btn-info" style="width: 100%;" type="submit">No Patologicos</a>
                                            <a href="{{route('antecedente.ginecologico',['IdPaciente'=>$paciente->id])}}" class="btn btn-info" style="width: 100%;" type="submit">Ginecológicos</a>
                                            <a href="{{route('antecedente.familiares',['IdPaciente'=>$paciente->id])}}" class="btn btn-info" style="width: 100%;" type="submit">H. Familiares</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-1 mt-0">Patologicos</h4>
                                    <form action="{{ route('antecedente.patologico.actualizar') }}" method="post">
                                    @csrf
                                    @method('PUT')
                                        <input type="hidden" name="Id" value="{{$antePatologico->id}}">
                                        <div class="form-group">
                                            <label for="Hospitalarios">Hospitalarios</label>
                                            <input type="text" class="form-control" name="Hospitalarios" id="Hospitalarios" placeholder="Antecedentes hospitalarios" value="{{$antePatologico->Hospitalarios}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="Cirugias">Cirugias</label>
                                            <input type="text" class="form-control" name="Cirugias" id="Cirugias"placeholder="Ingrese si el paciente a tenido alguna cirugia" value="{{$antePatologico->Cirugias}}">
                                        </div>                                                            
                                        <div class="form-group mb-0">
                                            <label for="EnfermedadesCardiacas">Enfermedades cardiacas</label>
                                            <input type="text" class="form-control" name="EnfermedadesCardiacas" id="EnfermedadesCardiacas" placeholder="Ingrese si el paciente tiene enfermedades cardiacas" value="{{$antePatologico->EnfermedadesCardiacas}}">
                                        </div>
                                        <div class="form-group mb-0">
                                            <label for="Transfusiones">Transfusiones</label>
                                            <input type="text" class="form-control" name="Transfusiones" id="Transfusiones" placeholder="Ingrese si el paciente tuvo transfusiones" value="{{$antePatologico->Transfusiones}}">
                                        </div>
                                        <div class="form-group mb-0">
                                            <label for="Cancer">Cáncer</label>
                                            <input type="text" class="form-control" name="Cancer" id="Cancer"placeholder="Ingrese si el paciente tiene cáncer" value="{{$antePatologico->Cancer}}">
                                        </div>
                                        <div class="form-group mb-0">
                                            <label for="Traumatismo">Traumatismo</label>
                                            <input type="text" class="form-control" name="Traumatismo" id="Traumatismo" placeholder="Ingrese si el paciente tiene algun traumatismo" value="{{$antePatologico->Traumatismo}}">
                                        </div>
                                        <div class="form-group mb-0">
                                            <label for="Otros">Otros</label>
                                            <input type="text" class="form-control" name="Otros" id="Otros" placeholder="Otro antecedente patologico" value="{{$antePatologico->Otros}}">
                                        </div>

                                        <div class="form-group col-md-12" style="padding-top:2%;">
                                                <a href="{{route('consulta.paciente',['IdPaciente' =>$paciente->id])}}" class="btn btn-danger" >Cancelar</a>
                                                <button class="btn btn-primary" type="submit">Actualizar</button>
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