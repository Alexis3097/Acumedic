@extends('Shared.masterAdmin')

@section('content')
<div class="content-page" style="background:url('{{asset('../img/bg-7.jpg')}}'); background-size:cover; background-repeat:no-repeat; margin-top:0px!important; padding-top:4%;min-height:93vh; ">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid" style="position: relative;">
        <div class="row">
            <div class="col-md-3 col-md-3 col-xl-3 cardClienteInfo" style="padding:2%; box-sizing:border-box;">
                <a href="{{ route('citas.list') }}">
                <div class="card" style="background-color:rgba(255,255,255,.7);">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Citas Totales del Dia</span>
                                    <h2 class="mb-0">{{$citasDelDia}}</h2>
                                </div>
                                <div class="align-self-center">
                                    <span class="icon-lg icon-dual-primary" data-feather="calendar"></span>
                                </div>   
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-md-3 col-xl-3 cardClienteInfo" style="padding:2%; box-sizing:border-box;">
                <a href="{{ route('paciente.list') }}">
                <div class="card" style="background-color:rgba(255,255,255,.7);">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Pacientes totales</span>
                                    <h2 class="mb-0">{{$totalPacientes}}</h2>
                                </div>
                                <div class="align-self-center">
                                    <span class="icon-lg icon-dual-primary" data-feather="user-check"></span>
                                </div>    
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-md-3 col-xl-3 cardClienteInfo" style="padding:2%; box-sizing:border-box;">
                <a href="{{route('ordenes.pendientes')}}">
                <div class="card" style="background-color:rgba(255,255,255,.7);">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Ordenes pendientes</span>
                                    @if($numeroOrdenes == 0)
                                        <h2 class="mb-0">0</h2>
                                    @else
                                        <h2 class="mb-0">{{$numeroOrdenes}}</h2>
                                    @endif
                                </div>
                                <div class="align-self-center">
                                    <span class="icon-lg icon-dual-primary" data-feather="shopping-cart"></span>
                                </div>    
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-md-3 col-xl-3 cardClienteInfo" style="padding:2%; box-sizing:border-box;">
                <a href="{{route('solicitudCita.pendientes')}}">
                <div class="card" style="background-color:rgba(255,255,255,.7);">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Solicitudes de citas pendientes</span>
                                    @if($numeroSolicitudPendientes == 0)
                                        <h2 class="mb-0">0</h2>
                                    @else
                                        <h2 class="mb-0">{{$numeroSolicitudPendientes}}</h2>
                                    @endif
                                </div>
                                <div class="align-self-center">
                                    <span class="icon-lg icon-dual-primary" data-feather="clipboard"></span>
                                </div>    
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <a href="{{ route('citas.list') }}" class="col-xl-12 col-lg-12 col-md-12 col-xd-12 cardClienteInfo">
            <div class="col-xl-12">
                <div class="card" style="background-color:rgba(255,255,255,.8);">
                    <div class="card-body">
                        <h5 class="card-title mt-0 mb-0 header-title">Citas del día</h5>
                        <div class="table-responsive mt-4">
                            <table class="table table-hover table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Hora</th>
                                        <th scope="col">Estatus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($citas as $cita)
                                    <tr>
                                        <td>{{$cita->paciente->NombreCompleto}}</td>
                                        <td>
                                            @foreach($cita->horarios as $horario)
                                                {{$horario->Horario}}<br>
                                            @endforeach
                                        </td>
                                        <td>
                                            <span class="@if($cita->estatusConsulta->Nombre == 'En espera') badge badge-soft-primary py-1 @else badge badge-soft-info py-1 @endif">
                                                {{$cita->estatusConsulta->Nombre}}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                                    <tr class="wCitas">
                                        <p class="wCitas"> @if(count($citas)>0)Citas pendientes del dia <span class="icon-lg icon-dual-primary" data-feather="book"></span> @else Sin citas el día de hoy <span class="icon-lg icon-dual-primary" data-feather="trending-down"></span> @endif</p>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
            </a>
        </div>
            <div class="reloj">
                <body onLoad="initClock()">
                <div id="timedate">
                    <a id="mon">January</a>
                    <a id="d">1</a>,
                    <a id="y">0</a><br />
                    <a id="h">12</a> :
                    <a id="m">00</a>:
                    <a id="s">00</a>
                    <p style="font-size:.3em;">Version: 1.0.0</p>
                </div>
            </div>
        </div>
    </div> <!-- content -->
</div>
@endsection
