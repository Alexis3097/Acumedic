@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Datos del paciente</h4>
                        </div>
                        <div class="col-sm-8 col-xl-6">
                            <form class="form-inline float-sm-right mt-3 mt-sm-0">
                                <div class="btn-group mb-sm-0 mr-2">

                                    <button type="button" class="btn btn-outline-danger">
                                        <i class='fas fa-times'></i> Cancelar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- content -->
                    <!-- row -->
            
                    <!-- products -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="text-center mt-3">
                                        @if(is_null($paciente->Foto))
                                        <img style="width: 30%; height: 30%;" src="{{asset('../img/Admin/users/avatar-4.jpg')}}" alt=""
                                            class="avatar-xl rounded-circle" />
                                        @else
                                        <img style="width: 30%; height: 30%;" src="{{asset('../uploads/'.$paciente->Foto)}}" alt=""
                                            class="avatar-xl rounded-circle" />
                                        @endif
                                        <h3 class="mt-2 mb-0">Paciente: #{{$paciente->id}} </h3>
                                        <!-- <h6 class="text-muted font-weight-normal mt-2 mb-4">User Experience
                                            Specialist
                                        </h6> -->
                                        <div class="mt-4 pt-3 border-top text-left">
                                            <h3 class="text-muted mb-2">Datos:</h3>
                                            <div class="media px-3 py-4 border-bottom">
                                                <div class="media-body">
                                                    <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">{{$paciente->NombreCompleto}}</h4>
                                                    <span class="text-muted">Tipo de sangre: {{$paciente->TipoSangre}}</span>
                                                </div>
                                                <i data-feather="users" class="align-self-center icon-dual icon-lg"></i>
                                            </div>
    
                                            <!-- stat 2 -->
                                            <div class="media px-3 py-4 border-bottom">
                                                <div class="media-body">
                                                    <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">{{$paciente->Telefono}}</h4>
                                                    <span class="text-muted">{{$paciente->Correo}}</span>
                                                </div>
                                                <i data-feather="phone" class="align-self-center icon-dual icon-lg"></i>
                                            </div>
    
                                            <!-- stat 3 -->
                                            <div class="media px-3 py-4">
                                                <div class="media-body">
                                                    <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">{{$paciente->LugarOrigen}}</h4>
                                                    <span class="text-muted">{{$paciente->Edad}} Años</span>
                                                </div>
                                                <i data-feather="map" class="align-self-center icon-dual icon-lg"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media px-3 py-4 border-bottom">
                                        <div class="media-body">
                                            <h3 class="mt-0 mb-1 font-size-22 font-weight-normal">Acciones a realizar</h3>
                                            <span class="text-muted">Seleccionela la categoria que quieras ver a detalle</span>
                                        </div>
                                        <i data-feather=" settings" class="align-self-center icon-dual icon-lg"></i>
                                    </div>
                                    <div class="button-list">
                                        <h6 class="mt-0 mb-1 font-size-20 font-weight-normal">Historial Clínico</h6>
                                        <p>Permite ver el historial de las consultas previamente hechas</p>
                                        <a href="{{route('consulta.historial',['IdPaciente'=>$paciente->id])}}" class="btn btn-large btn--md btn-primary">Realizar</a>

                                        <h6 class="mt-0 mb-1 font-size-20 font-weight-normal">Consulta médica</h6>
                                        <p>Inicia la consulta y solicita los campos para ello</p>
                                        <button type="button" class="btn btn-large btn--md btn-primary">Realizar</button>

                                        <h6 class="mt-0 mb-1 font-size-20 font-weight-normal">Antecedentes</h6>
                                        <p>Permite crear y editar los antecedentes del paciente</p>
                                        <button type="button" class="btn btn-large btn--md btn-primary">Realizar</button>

                                        <h6 class="mt-0 mb-1 font-size-20 font-weight-normal">Estudios de gabinete</h6>
                                        <p>Permite ver y agregar las fotos de los estudios</p>
                                        <button type="button" class="btn btn-large btn--md btn-primary">Realizar</button>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> 
                    </div>
                    <!-- end row -->
                    <!-- stats + charts -->

                </div>
            </div> <!-- content -->
        </div>
@endsection