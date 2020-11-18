@extends('Shared.masterAdmin')
@section('estilosCitasIndex')
<link rel="stylesheet" href="{{asset('js/Admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('js/Admin/libs/multiselect/multi-select.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('js/Admin/libs/select2/select2.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('js/Admin/libs/flatpickr/flatpickr.min.css')}}" type="text/css">
@endsection
@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                <div class="row page-title align-items-center">

                        <form action="{{route('citas.buscarPaciente')}}" method="post">
                            @csrf
                            <div class="col-sm-4 col-md-4 col-xl-4">
                                <h4 class="mb-1 mt-0">Citas</h4>
                                <div class="input-group">
                                <input type="text" class="form-control col-lg-12" placeholder="Buscar paciente" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                            <button type="submit" style="margin: 24px -8px 0px;" class="form-control btn width-xs btn-primary">Buscar</button>
                            </div>
                        </form>
                        <form action="{{route('citas.buscarFecha')}}" method="post" class="row">
                            @csrf
                                <div class="form-group mb-3">
                                                <h4>Buscar por fechas</h4>
                                                <input type="text" id="range-datepicker" name="Fechas" value="{{$fecha}}" class="form-control col-lg-12 @error('Fechas') is-invalid @enderror" required>
                                                @error('Fechas')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" style="margin: 39px 18px 0px;" class="form-control btn width-xs btn-primary">Buscar</button>
                                </div>
                        </form>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <a href="{{ route('citas.new') }}" style="margin-right:10px;" class="btn btn-primary btn-sm float-right">
                                        <i class='fa fa-plus'></i> Crear cita
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
                                                    <input type="hidden"id="IdCita" value="{{ $cita->id}}">
                                                    <td>{{$cita->paciente->NombreCompleto}}</td>
                                                    <td>{{$cita->Fecha}}</td>
                                                    <td>
                                                        @foreach($cita->horarios as $horario)
                                                            {{$horario->Horario}}<br>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                    @if($cita->estatusConsulta->Nombre == 'En espera')
                                                        <span class="badge badge-soft-primary py-1">{{$cita->estatusConsulta->Nombre}}</span>
                                                    @elseif($cita->estatusConsulta->Nombre == 'Presente')
                                                        <span class="badge badge-soft-info py-1">{{$cita->estatusConsulta->Nombre}}</span>
                                                    @elseif($cita->estatusConsulta->Nombre == 'En cita')
                                                        <span class="badge badge-soft-success py-1">{{$cita->estatusConsulta->Nombre}}</span>
                                                    @elseif($cita->estatusConsulta->Nombre == 'Cancelada')
                                                        <span class="badge badge-soft-warning py-1">{{$cita->estatusConsulta->Nombre}}</span>
                                                    @else
                                                        <span class="badge badge-soft-danger py-1">{{$cita->estatusConsulta->Nombre}}</span>
                                                    @endif
                                                    </td>
                                                    <td>
                                                        <span title="Editar cita"><a href="{{ route('citas.edit', ['id' => $cita->id]) }}"  class="btn btn-outline-warning"><i class="fa fa-edit"></i></a></span>
                                                        <span title="Nueva ficha"><a  href="{{ route('ficha.new',['id' => $cita->paciente->id])}}" class="btn btn-outline-info"><i class="fa fa-file-medical"></i></a></span>
                                                        <span title="Eliminar cita"><button type="button" name="delete_modal" class="btn btn-outline-danger delete" data-toggle="modal" data-target="#eliminarCita">
                                                            <i class="fa fa-trash"></i>
                                                        </button></span>
                                                        <span title="Consulta"><a href="{{route('consulta.paciente',['IdPaciente' =>$cita->paciente->id])}}" class="btn btn-outline-primary"> <i class="fas fa-notes-medical"></i> </a></span>
                                                    </td>
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
<div class="modal fade" id="eliminarCita" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Eliminar cita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('citas.delete')}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="IdModal" id="IdModal">
                    <p>¿Esta seguro que desea eliminar esta cita?</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Si, Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scriptPacientes')
    <script src="{{asset('js/Admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('js/Admin/libs/select2/select2.min.js')}}"></script>
    <script src="{{asset('js/Admin/libs/multiselect/jquery.multi-select.js')}}"></script>
    <script src="{{asset('js/Admin/libs/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('js/Admin/pages/form-advanced.init.js')}}"></script>
    <script src="{{asset('js/Admin/modales.js')}}"></script>
@endsection