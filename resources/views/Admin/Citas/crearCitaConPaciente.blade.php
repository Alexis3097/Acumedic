@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Crear nueva cita</h4>
                        </div>
                        <div class="col-sm-8 col-xl-6">
                            <form class="form-inline float-sm-right mt-3 mt-sm-0">
                                <div class="btn-group mb-sm-0 mr-2">

                                    <a class="btn btn-outline-danger" href="{{ route('citas.new') }}">
                                        <i class='fas fa-redo-alt'></i> Desvincular paciente
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                    @livewire('contact-search-bar')

                    <!-- content -->
                    <!-- row -->
            
                    <!-- products -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('citas.create') }}" class="needs-validation row" novalidate method="POST">
                                    @csrf
                                        <input type="hidden" name="id" value="{{ $paciente->id }}">
                                        <div class="form-group col-md-4">
                                            <label for="Nombre">Nombre (s)</label>
                                            <input type="text" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror" id="Nombre" placeholder="Nombre" required value="{{ $paciente->Nombre }}" >
                                            @error('Nombre')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="ApellidoPaterno">Apellido paterno</label>
                                            <input type="text" name="ApellidoPaterno" class="form-control @error('ApellidoPaterno') is-invalid @enderror" id="ApellidoPaterno" placeholder="Apellido paterno" required value="{{ $paciente->ApellidoPaterno }}" >
                                            @error('ApellidoPaterno')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="ApellidoMaterno">Apellido materno</label>
                                            <input type="text" name="ApellidoMaterno" class="form-control @error('ApellidoMaterno') is-invalid @enderror" id="ApellidoMaterno" placeholder="Apellido materno" required value="{{ $paciente->ApellidoMaterno }}" >
                                            @error('ApellidoMaterno')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Telefono">Teléfono</label>
                                            <input type="text" name="Telefono" class="form-control @error('Telefono') is-invalid @enderror" id="Telefono" placeholder="Telefono" required value="{{ $paciente->Telefono }}" >
                                            @error('Telefono')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="TipoConsulta">Tipo de consulta</label>
                                            <select data-plugin="customselect" class="form-control @error('TipoConsulta') is-invalid @enderror" name="TipoConsulta" id="TipoConsulta">
                                            @if($primeraCita == true)
                                                @foreach($tipoConsultas as $tipoConsulta)
                                                    <option value="{{$tipoConsulta->id}}"
                                                    @if( (int) $tipoConsulta->id === 1) selected='selected' @endif>{{$tipoConsulta->Nombre}}</option>
                                                @endforeach
                                            @else
                                                @foreach($tipoConsultas as $tipoConsulta)
                                                    <option value="{{$tipoConsulta->id}}"
                                                    @if( (int) $tipoConsulta->id === 2) selected='selected' @endif>{{$tipoConsulta->Nombre}}</option>
                                                @endforeach
                                            @endif
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

            

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

@endsection

