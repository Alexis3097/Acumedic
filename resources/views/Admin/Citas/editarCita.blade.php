@extends('Shared.masterAdmin')
@section('estilosCitas')
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
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Editar cita</h4>
                        </div>
                    </div>
                    <!-- content -->
                    <!-- row -->
                    <!-- products -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('citas.update', ['id' => $cita->id]) }}" class="needs-validation row" method="POST">
                                    @csrf
                                    @method('PUT')
                                        <input type="hidden" id="IdCita" value="{{$cita->id}}">
                                        <div class="form-group col-md-4">
                                            <label for="Nombre">Nombre (s)</label>
                                            <input type="text" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror" id="Nombre" placeholder="Nombre" required value="{{$cita->paciente->Nombre}}">
                                            @error('Nombre')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="ApellidoPaterno">Apellido paterno</label>
                                            <input type="text" name="ApellidoPaterno" class="form-control @error('ApellidoPaterno') is-invalid @enderror" id="ApellidoPaterno" placeholder="Apellido paterno" required value="{{$cita->paciente->ApellidoPaterno}}">
                                            @error('ApellidoPaterno')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="ApellidoMaterno">Apellido materno</label>
                                            <input type="text" name="ApellidoMaterno" class="form-control @error('ApellidoMaterno') is-invalid @enderror" id="ApellidoMaterno" placeholder="Apellido materno" required value="{{$cita->paciente->ApellidoMaterno}}">
                                            @error('ApellidoMaterno')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Telefono">Teléfono</label>
                                            <input type="text" name="Telefono" class="form-control @error('Telefono') is-invalid @enderror" id="Telefono" placeholder="Telefono" required value="{{$cita->paciente->Telefono}}">
                                            @error('Telefono')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="TipoConsulta">Tipo de consulta</label>
                                            <select data-plugin="customselect" class="form-control @error('TipoConsulta') is-invalid @enderror" name="TipoConsulta">
                                                <option value="0">Seleccione</option>
                                            @foreach($tipoConsultas as $tipoConsulta)
                                                <option value="{{$tipoConsulta->id}}"
                                                @if( (int) $tipoConsulta->id === (int) $cita->IdTipoConsulta) selected='selected' @endif>{{$tipoConsulta->Nombre}}</option>
                                            @endforeach
                                            </select>
                                            @error('TipoConsulta')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label 
                                            for="Fecha">Fecha</label>
                                            <input class="form-control @error('Fecha') is-invalid @enderror" name="Fecha" id="FechaEdit" type="date" value="{{old('Fecha',$cita->Fecha)}}">
                                            @error('Fecha')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="IdEstatusConsulta">Estatus de consulta</label>
                                            <select data-plugin="customselect" class="form-control @error('IdEstatusConsulta') is-invalid @enderror" name="IdEstatusConsulta" id="IdEstatusConsulta">
                                            @foreach($estatus as $estatu)
                                                <option value="{{$estatu->id}}"
                                                @if( (int) $estatu->id === (int) $cita->IdEstatusConsulta) selected='selected' @endif>{{$estatu->Nombre}}</option>
                                            @endforeach
                                            </select>
                                            @error('IdEstatusConsulta')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Hora">Horario</label>
                                            <select data-plugin="customselect" class="form-control @error('Horario') is-invalid @enderror" name="Horario[]" required id="Hora" multiple>
                                            @foreach($horarios as $clave =>$valor)
                                                <option value="{{$clave}}" @if(in_array($clave,$cita->horarios->pluck('id')->toArray())) selected @endif>{{$valor}}</option>
                                            @endforeach
                                            </select>
                                            @error('Horario')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <a href="{{ route('citas.list') }}" class="btn btn-danger" >Cancelar</a>
                                            <button class="btn btn-primary" type="submit">Actualizar cita</button>
                                        </div>
                                    </form>

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
@section('scriptCrearCitas')
<script src="{{asset('js/Admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('js/Admin/libs/select2/select2.min.js')}}"></script>
<script src="{{asset('js/Admin/libs/multiselect/jquery.multi-select.js')}}"></script>
<script src="{{asset('js/Admin/libs/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('js/Admin/pages/form-advanced.init.js')}}"></script>
<script src="{{asset('js/Admin/modales.js')}}"></script>
@endsection