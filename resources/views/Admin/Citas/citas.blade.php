@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                <div class="row page-title align-items-center">
                            <div class="col-sm-4 col-xl-6">
                                <h4 class="mb-1 mt-0">Citas</h4>
                                <div class="input-group">
                                <input type="text" class="form-control col-lg-12" placeholder="Buscar">
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                                <form class="form-inline float-sm-right mt-4 mt-sm-0">
                                <div class="input-group">
                                <label class="col-md-3 col-form-label" for="example-date">Fecha Inicio:</label>
                                <input class="form-control  " id="example-date" placeholder="Buscar fecha" type="date" name="date">
                                <label class="col-md-3 col-form-label" for="example-date">Fecha fin:</label>
                                <input class="form-control " id="example-date" placeholder="Buscar fecha" type="date" name="date">
                                </div>
                                <!-- <div class="form-group mb-sm-0 mr-2">
                                        <input type="text" class="form-control" id="dash-daterange" style="min-width: 190px;" />
                                </div> -->

                                </form>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <a href="{{ route('citas.new') }}" style="margin-right:10px;" class="btn btn-primary btn-sm float-right">
                                        <i class='uil uil-export ml-2'></i> Crear cita
                                    </a>
                                    <h5 class="card-title mt-0 mb-0 header-title">Lista de citas</h5>
                                    <div class="table-responsive mt-12">
                                        <table class="table table-hover table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Paciente</th>
                                                    <th scope="col">Fecha </th>
                                                    <th scope="col">Hora</th>
                                                    <th scope="col">Estatus</th>
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Citas as $cita)
                                                <tr>
                                                    <td>{{$cita->paciente->NombreCompleto}}</td>
                                                    <td>{{$cita->Fecha}}</td>
                                                    <td>
                                                        @foreach($cita->horarios as $horario)
                                                            {{$horario->Horario}}<br>
                                                        @endforeach
                                                    </td>
                                                    <td><span class="badge badge-soft-warning py-1">{{$cita->estatusConsulta->Nombre}}</span></td>
                                                    <td><button type="button" class="btn btn-outline-success"><i class="fa fa-trash"></i></button>
                                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-warning"><i class="fa fa-check"></i></button>
                                                        <button type="button" class="btn btn-outline-info"><i class="fa fa-search"></i></button></td>
                                                </tr>
                                            @endforeach    
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
@endsection