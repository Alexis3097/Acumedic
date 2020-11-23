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
                            <h2 class="mb-1 mt-0"><i style="font-size: 1.2em; color:#232323;" class="icon-dual fas fa-file-prescription"></i>Antecedentes</span></h2>
                        </div>
                        <div class="col-sm-1 col-xl-1">
                                    <a href="{{route('consulta.paciente',['IdPaciente' => $paciente->id])}}" class="btn btn-outline-primary">
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
                                        <img src="{{asset('../img/Admin/users/avatar-4.jpg')}}"
                                            class="avatar-lg rounded-circle mr-2" alt="Foto de paciente">
                                    @else
                                        <img src="{{asset('../uploads/'.$paciente->Foto)}}"
                                            class="avatar-lg rounded-circle mr-2" alt="Foto de paciente">
                                    @endif
                                        <div class="media-body">
                                            <h5 class="mt-2 mb-0">{{$paciente->NombreCompleto}}</h5>
                                            <h6 class="text-muted font-weight-normal mt-1 mb-4">{{$paciente->LugarOrigen}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <div class="card">
                            <div class="card-body">
                                        <h4 class="header-title mt-0 mb-1">Dots in Header</h4>
                                        <p class="sub-header">Example of Dots wizard</p>
                                        <div id="smartwizard-dots">
                                            <ul>
                                                <li><a href="#sw-dots-step-1">Patologicos <small class="d-block">Antecedente</small></a></li>
                                                <li><a href="#sw-dots-step-2">No Patologicos<small class="d-block">Antecedente</small></a></li>
                                                <li><a href="#sw-dots-step-3">Ginecológicos<small class="d-block">Antecedente</small></a></li>
                                                <li><a href="#sw-dots-step-4">H. Familiares<small class="d-block">Antecedente</small></a></li>
                                                <li><a href="#sw-dots-step-5">Completado<small class="d-block">Antecedente</small></a></li>
                                            </ul>
                                            
                                            <div class="p-3">
                                                <form action="{{route('consulta.guardarAntecedente')}}" method="post">
                                                @csrf
                                                    <input type="hidden" name="IdPaciente" value="{{$paciente->id}}">
                                                    <div id="sw-dots-step-1">
                                                        <div class="row">
                                                            <div class="col-12">
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
                                                                    <label for="OtrosPat">Otros</label>
                                                                    <input type="text" class="form-control" name="OtrosPat" id="OtrosPat" placeholder="Otro antecedente patologico" value="{{$antePatologico->Otros}}">
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </div>
                                                    <!-- antecedentes no patologicos -->
                                                    <div id="sw-dots-step-2">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group mt-3 mt-xl-0">
                                                                    <label for="ActividadFisica">Actividades Físicas</label>
                                                                    <input type="text" class="form-control" name="ActividadFisica" id="ActividadFisica" placeholder="Ingrese si el paciente hace alguna actividad física" value="{{$anteNoPatologico->ActividadFisica}}">
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label for="Tabaquismo">Tabaquismo</label>
                                                                    <input type="text" class="form-control" name="Tabaquismo" id="Tabaquismo" placeholder="Ingrese si el paciente consume tabaco" value="{{$anteNoPatologico->Tabaquismo}}">
                                                                </div>                            
                                                                <div class="form-group mb-0">
                                                                    <label for="Alcoholismo">Alcoholismo</label>
                                                                    <input type="text" class="form-control" name="Alcoholismo" id="Alcoholismo"placeholder="Ingrese si el paciente consume alcohol" value="{{$anteNoPatologico->Alcoholismo}}">
                                                                </div>
                                                                <div class="form-group mb-0">
                                                                    <label for="SustanciasODrogas">Uso de sustancias o drogas</label>
                                                                    <input type="text" class="form-control" name="SustanciasODrogas" id="SustanciasODrogas"placeholder="Ingrese si el paciente usa sustancias o drogas" value="{{$anteNoPatologico->SustanciasODrogas}}">
                                                                </div>
                                                                <div class="form-group mb-0">
                                                                    <label for="VacunasRecientes">Vacunas recientes</label>
                                                                    <input type="text" class="form-control" name="VacunasRecientes" id="VacunasRecientes"placeholder="Ingrese si el paciente usa sustancias o drogas" value="{{$anteNoPatologico->VacunasRecientes}}">
                                                                </div>
                                                                <div class="form-group mb-0">
                                                                    <label for="OtrosNoPat">Otros</label>
                                                                    <input type="text" class="form-control" name="OtrosNoPat" id="OtrosNoPat"placeholder="Otro antecedente no patologico" value="{{$anteNoPatologico->Otros}}">
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </div>
                                                    <!-- antecedentes ginecologicos -->
                                                    <div id="sw-dots-step-3">
                                                    <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                        <label for="FechaPrimeraMenstruacion">Fecha de primer menstruación </label>
                                                                    <input class="form-control" type="date" value="{{$anteGinecologico->FechaPrimeraMenstruacion}}" name="FechaPrimeraMenstruacion" id="FechaPrimeraMenstruacion">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="FechaUltimaMenstruacion">Fecha de ultima menstruación</label>
                                                                    <input class="form-control" type="date" value="{{$anteGinecologico->FechaUltimaMenstruacion}}" name="FechaUltimaMenstruacion" id="FechaUltimaMenstruacion">
                                                                </div>
                                                                <div class="form-group mb-0">
                                                                    <label for="CaractMenstruacion">Caracteristicas de menstruación</label>
                                                                    <input type="text" name="CaractMenstruacion" id="CaractMenstruacion" class="form-control" placeholder="Caracteristica de menstruación" value="{{$anteGinecologico->CaractMenstruacion}}" >
                                                                </div>
                                                                <div class="form-group mt-3 mt-xl-0">
                                                                    <label for="Embarazos">Embarazos</label>
                                                                    <input type="text"  name="Embarazos"id="Embarazos" class="form-control" placeholder="Datos sobre embarazos" value="{{$anteGinecologico->Embarazos}}">
                                                                </div> 
                                                                <div class="form-group mt-3 mt-xl-0">
                                                                    <label for="CancerCervico">Cancer cervico</label>
                                                                    <input type="text" name="CancerCervico" id="CancerCervico" class="form-control" placeholder="Datos sobre cancer cervico" value="{{$anteGinecologico->CancerCervico}}">
                                                                </div> 
                                                                <div class="form-group mt-3 mt-xl-0">
                                                                    <label for="CancerUterino">Cancer uterino</label>
                                                                    <input type="text" id="CancerUterino" name="CancerUterino" class="form-control" placeholder="Datos sobre cancer uterino" value="{{$anteGinecologico->CancerUterino}}">
                                                                </div> 
                                                                <div class="form-group mt-3 mt-xl-0">
                                                                    <label for="OtrosGine">Otros</label>
                                                                    <input type="text" name="OtrosGine" id="OtrosGine" class="form-control" placeholder="Otro antecedente ginecologico"  value="{{$anteGinecologico->Otros}}">
                                                                </div> 
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </div>
                                                    <!-- antecedentes heredo familiares -->
                                                    <div id="sw-dots-step-4">
                                                    <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="Diabetes">Diabetes</label>
                                                                    <input type="text" name="Diabetes" id="Diabetes" class="form-control" placeholder="Datos sobre diabetes" value="{{$anteHFamiliarez->Diabetes}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="Hipertension">Hipertension</label>
                                                                    <input type="text" name="hipertension" id="Hipertension" class="form-control" placeholder="Datos sobre hipertension" value="{{$anteHFamiliarez->Hipertension}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="EnfTiroideas">Enermedades tiroideas</label>
                                                                    <input type="text" name="EnfTiroideas" id="EnfTiroideas" class="form-control" placeholder="Datos sobre enfermedades tireoideas" value="{{$anteHFamiliarez->EnfTiroideas}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="OtrosFam">Otros antecedentes</label>
                                                                    <input type="text"  name="OtrosFam" id="OtrosFam"class="form-control" placeholder="Otros antecedentes" value="{{$anteHFamiliarez->Otros}}">
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </div>
                                                    <div id="sw-dots-step-5">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="text-center">
                                                                    <div class="mb-3">
                                                                    <i data-feather="check-circle" class="icon-xxl icon-dual"></i>
                                                                    </div>
                                                                    <h3>¡Completado!</h3>

                                                                    <p class="w-75 mb-2 mx-auto text-muted">Para concluir de "click" en el botón terminar.</p>
                                                                        
                                                                    <div class="mb-3">
                                                                    <button type="submit" class="btn btn-primary">Terminar</button>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- stats + charts -->

                </div>
        </div> 
</div><!-- content -->
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