@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Pacientes</h4>
                        </div>
                    </div>
                    <!-- products -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <a href="{{ route('paciente.new') }}" style="margin-right:10px;" class="btn btn-primary btn-sm float-right">
                                        <i class='uil uil-export ml-2'></i> Nuevo paciente
                                    </a>
                                    <h5 class="card-title mt-0 mb-0 header-title">Lista de pacientes</h5>

                                    <div class="table-responsive mt-12">
                                        <table class="table table-hover table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Edad</th>
                                                    <th scope="col">Telefono</th>
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <div class="container">
                                                    @foreach($pacientes as $paciente)
                                                        <tr>
                                                            <td>{{$paciente->NombreCompleto}}</td>
                                                            <td>{{$paciente->Edad}}</td>
                                                            <td>{{$paciente->Telefono}}</td>
                                                            <td>
                                                                <a href="{{ route('paciente.edit', ['id' => $paciente->id]) }}" class="btn btn-outline-danger"><i class="fa fa-edit"></i></a>
                                                                <button type="button" class="btn btn-outline-success"><i class="fa fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </div>
                                                {{ $pacientes->links() }}
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->
                </div>
            </div> <!-- content -->
        </div>
@endsection