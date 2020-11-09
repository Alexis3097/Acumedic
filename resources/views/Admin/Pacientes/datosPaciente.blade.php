@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Datos del paciente: <span>Caralampio</span></h4>
                        </div>
                        <div class="col-sm-8 col-xl-6">
                            <form class="form-inline float-sm-right mt-3 mt-sm-0">
                                <div class="btn-group mb-sm-0 mr-2">

                                    <button type="button" class="btn btn-outline-primary">
                                        <i class='fas fa-arrow-left'></i> Regresar
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
                                        <img style="width: 20%; height: 30%;" src="{{asset('../img/Admin/users/avatar-4.jpg')}}" alt=""
                                            class="avatar-xl rounded-circle" />
                                        <h3 class="mt-2 mb-0">Paciente: #131323 </h3>
                                        <div class="mt-4 pt-3 border-top text-left">
                                            <div class="media px-3 py-4 border-bottom">
                                                <div class="media-body" >
                                                    
                                                    <h4 class="mt-0 mb-1 font-size-19 font-weight-normal">Luis Felipe Martínez Ortega Pérez</h4>
                                                    <span class="text-muted">Tipo de sangre: A+</span>
                                                </div>
                                                <i data-feather="users" class="align-self-center icon-dual icon-lg"></i>
                                            </div>
    
                                            <!-- stat 2 -->
                                            <div class="media px-3 py-4 border-bottom">
                                                <div class="media-body" >
                                                    <h4 class="mt-0 mb-1 font-size-19 font-weight-normal">Nombre del padecimiento</h4>
                                                    <span class="text-muted">Patologico</span>
                                                </div>
                                                <i data-feather="heart" class="align-self-center icon-dual icon-lg"></i>
                                            </div>
    
                                            <!-- stat 3 -->
                                            <div class="media px-3 py-4">
                                                <div class="media-body" >
                                                    <h4 class="mt-0 mb-1 font-size-19 font-weight-normal">Mazátlan, Sinaloa</h4>
                                                    <span class="text-muted">22 Años</span>
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
                                <div class="card-body" style="padding:3.5%;">
                                    <div class="media px-3 py-4 border-bottom" style="margin-left: -1%; padding: 0% 0% 2% 0%!important;">
                                        <div class="media-body">
                                            <h3 class="mt-0 mb-1 font-size-22 font-weight-normal">Acciones a realizar</h3>
                                            <span class="text-muted">Seleccionela la categoria del paciente que quisiera editar</span>
                                        </div>
                                        <i data-feather=" settings" class="align-self-center icon-dual icon-lg"></i>
                                    </div>
                                    <div class="button-list">
                                        <h6 class="mt-0 mb-1 font-size-20 font-weight-normal" style="padding:1% 0%;"><i style="font-size: 1.2em; color:#232323;" class="icon-dual fas fa-prescription"></i> Historial Clínico</h6>
                                        <p style="margin:0;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repelle</p>
                                        <button type="button" style="margin:0;" class="btn btn-small btn--md btn-primary">Realizar</button>
                                        <h6 class="mt-0 mb-1 font-size-20 font-weight-normal" style="padding:1% 0%;"><i style="font-size: 1.2em; color:#232323;" class="icon-dual fas fa-file-prescription"></i> Consulta médica</h6>
                                        <p style="margin:0;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repelle</p>
                                        <button type="button" style="margin:0;" class="btn btn-small btn--md btn-primary">Realizar</button>
                                        <h6 class="mt-0 mb-1 font-size-20 font-weight-normal" style="padding:1% 0%;"><i style="font-size: 1.2em; color:#232323;" class="icon-dual fas fa-diagnoses"></i> Antecedentes</h6>
                                        <p style="margin:0;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repelle</p>
                                        <button type="button" style="margin:0;" class="btn btn-small btn--md btn-primary">Realizar</button>
                                        <h6 class="mt-0 mb-1 font-size-20 font-weight-normal" style="padding:1% 0%;"><i style="font-size: 1.2em; color:#232323;" class="icon-dual fas fa-clinic-medical"></i> Estudios de gabinete</h6>
                                        <p style="margin:0;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repelle</p>
                                        <button type="button" style="margin:0;" class="btn btn-small btn--md btn-primary">Realizar</button>
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