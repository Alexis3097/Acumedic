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
                                                <div id="sw-dots-step-1">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                            <label for="sw-dots-confirm">Hospitalarios</label>
                                                                <input type="text" class="form-control" placeholder="Antecedentes hospitalarios">

                                                            </div>
                                                            <div class="form-group">
                                                            <label for="sw-dots-confirm">Cirugias</label>
                                                                <input type="text" class="form-control" placeholder="Ingrese cirugias">

                                                            </div>
                                                            <div class="form-group mt-3 mt-xl-0">
                                                            <label>Padecimientos</label>
                                                                <select class="form-control wide" data-plugin="customselect" multiple>
                                                                        <option value="0" selected>Diabetes</option>
                                                                        <option value="1">Hipertensión</option>
                                                                        <option value="2">Enfermedades respiratorias</option>
                                                                        <option value="2">Enfermedades tiroideas</option>
                                                                </select>
                                                            </div>                                                            
                                                            <div class="form-group mb-0">
                                                            <label for="sw-dots-confirm">Enfermedades cardiacas</label>
                                                                <input type="text" class="form-control" placeholder="Ingrese enfermedades cardiacas">
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <label for="sw-dots-confirm">Transfusiones</label>
                                                                <input type="text" class="form-control" placeholder="Ingrese si tuvo transfusiones">
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <label for="sw-dots-confirm">Cáncer</label>
                                                                <input type="text" class="form-control" placeholder="Ingrese si el paciente tiene cáncer">
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <label for="sw-dots-confirm">Traumatismo</label>
                                                                <input type="text" class="form-control" placeholder="Ingrese si el paciente de traumatismo">
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                </div>
                                                <div id="sw-dots-step-2">
                                                    <div class="row">
                                                        <div class="col-12">
                                                        <div class="form-group mt-3 mt-xl-0">
                                                            <label>Addicciones</label>
                                                                <select class="form-control wide" data-plugin="customselect" multiple>
                                                                    <option value="0" selected>Tabaquismo</option>
                                                                    <option value="1">Alcoholismo</option>
                                                                    <option value="2">Sustancias o drogas</option>
                                                                </select>
                                                            </div> 
                                                            <div class="form-group">
                                                                <label for="sw-dots-confirm">Actividades Físicas</label>
                                                                <input type="text" class="form-control" placeholder="Ingrese si el paciente hace alguna actividad física">
                                                            </div>                            
                                                            <div class="form-group mb-0">
                                                                <label for="sw-dots-confirm">Vacunas</label>
                                                                <input type="text" class="form-control" placeholder="Ingrese vacunas recientes">
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <label for="sw-dots-confirm">Otros padecimientos</label>
                                                                <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                </div>
                                                <div id="sw-dots-step-3">
                                                <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                    <label for="sw-dots-first-name">Fecha de primer menstruación </label>
                                                                <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="sw-dots-last-name">Fecha de ultima menstruación</label>
                                                                <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <label for="sw-dots-email">Caracteristicas de menstruación</label>
                                                                <input type="email" id="sw-dots-email" class="form-control" placeholder="">
                                                            </div>
                                                            <div class="form-group mt-3 mt-xl-0">
                                                                <label for="sw-dots-email">Padecimientos cancerigenos</label>
                                                                    <select class="form-control wide" data-plugin="customselect" multiple>
                                                                        <option value="0" selected>Ningunos</option>
                                                                        <option value="1">Cáncer cervico</option>
                                                                        <option value="2">Cáncer uterino</option>
                                                                        <option value="3">Cáncer de mama</option>
                                                                    </select>
                                                            </div> 
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                </div>
                                                <div id="sw-dots-step-4">
                                                <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="TipoConsulta">Tipo de consulta</label>
                                                                    <select data-plugin="customselect" class="form-control @error('TipoConsulta') is-invalid @enderror" name="TipoConsulta">
                                                                        <option value="0">Diabetes</option>
                                                                        <option value="1">Hipertención</option>
                                                                        <option value="2">Enfermedades tiroides</option>
                                                                    </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="sw-dots-last-name">Otros antecedentes</label>
                                                                <input type="text" class="form-control" placeholder="">
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
                                                                <button class="btn btn-primary">Terminar</button>
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                </div>
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