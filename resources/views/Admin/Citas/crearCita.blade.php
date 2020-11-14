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
                    <div class="form-group mb-3 row page-title align-items-center">
                        @livewire('contact-search-bar')
                        <div class="form-group mb-3">
                                <button type="button" style="margin: 30px 18px 0px;" class="form-control btn btn-large btn-primary">Buscar</button>
                        </div>
                    </div>
                    <!-- content -->
                    <!-- row -->
                    <!-- products -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('citas.create') }}" class="needs-validation row" novalidate method="POST">
                                    @csrf
                                        <input type="hidden" name="id" value="0">
                                        <div class="form-group col-md-4">
                                            <label for="Nombre">Nombre (s)</label>
                                            <input type="text" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror" id="Nombre" placeholder="Nombre" required>
                                            @error('Nombre')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="ApellidoPaterno">Apellido paterno</label>
                                            <input type="text" name="ApellidoPaterno" class="form-control @error('ApellidoPaterno') is-invalid @enderror" id="ApellidoPaterno" placeholder="Apellido paterno" required>
                                            @error('ApellidoPaterno')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="ApellidoMaterno">Apellido materno</label>
                                            <input type="text" name="ApellidoMaterno" class="form-control @error('ApellidoMaterno') is-invalid @enderror" id="ApellidoMaterno" placeholder="Apellido materno" required>
                                            @error('ApellidoMaterno')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Telefono">Teléfono</label>
                                            <input type="text" name="Telefono" class="form-control @error('Telefono') is-invalid @enderror" id="Telefono" placeholder="Telefono" required>
                                            @error('Telefono')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="TipoConsulta">Tipo de consulta</label>
                                            <select data-plugin="customselect" class="form-control @error('TipoConsulta') is-invalid @enderror" name="TipoConsulta" id="TipoConsulta">
                                                <option value="0">Seleccione</option>
                                            @foreach($tipoConsultas as $tipoConsulta)
                                                <option value="{{$tipoConsulta->id}}">{{$tipoConsulta->Nombre}}</option>
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
                                            <input class="form-control @error('Fecha') is-invalid @enderror" name="Fecha" id="Fecha" type="date" value="{{ $fecha->format('Y-m-d')}}">
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
                                                <option value="{{$estatu->id}}">{{$estatu->Nombre}}</option>
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
                                            <select data-plugin="customselect" class="form-control @error('Horario') is-invalid @enderror" name="Horario[]" id="Hora" multiple>
                                            @foreach($horarios as $clave => $valor)
                                                <option value="{{$clave}}">{{$valor}}</option>
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
                                            <button class="btn btn-primary" type="submit">Crear cita</button>
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