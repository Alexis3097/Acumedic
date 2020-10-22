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

                                    <a class="btn btn-outline-danger" href="{{ route('listaCitas') }}">
                                        <i class='fas fa-times'></i> Cancelar
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- content -->
                    <!-- row -->
            
                    <!-- products -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('CrearCita') }}" class="needs-validation row" novalidate method="POST">
                                    @csrf
                                        <!-- <div class="form-group col-md-12">
                                            <label for="validationCustom01">Buscar</label>
                                            <input type="text" class="form-control" placeholder="Buscar">
                                        </div> -->
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom01">Nombre (s)</label>
                                            <input type="text" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror" id="validationCustom01" placeholder="Nombre" required>
                                            @error('Nombre')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom02">Apellido paterno</label>
                                            <input type="text" name="ApellidoPaterno" class="form-control @error('ApellidoPaterno') is-invalid @enderror" id="validationCustom02" placeholder="Apellido paterno" required>
                                            @error('ApellidoPaterno')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom02">Apellido materno</label>
                                            <input type="text" name="ApellidoMaterno" class="form-control @error('ApellidoMaterno') is-invalid @enderror" id="validationCustom02" placeholder="Apellido materno" required>
                                            @error('ApellidoMaterno')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom01">Fecha de nacimiento</label>
                                            <input type="date" name="FechaNacimiento" class="form-control @error('FechaNacimiento') is-invalid @enderror" id="validationCustom01" placeholder="Fecha de nacimiento" value="{{ $fecha->format('Y-m-d')}}" required>
                                            @error('FechaNacimiento')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom02">Teléfono</label>
                                            <input type="text" name="Telefono" class="form-control @error('Telefono') is-invalid @enderror" id="validationCustom02" placeholder="Telefono" required>
                                            @error('Telefono')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom02">Tipo de consulta</label>
                                            <select data-plugin="customselect" class="form-control" name="TipoConsulta">
                                            @foreach($tipoConsultas as $tipoConsulta)
                                                <option value="{{$tipoConsulta->id}}">{{$tipoConsulta->Nombre}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="col-lg-2 col-form-label"
                                            for="example-date">Fecha</label>
                                            <input class="form-control @error('Fecha') is-invalid @enderror" name="Fecha" id="example-date" type="date" value="{{ $fecha->format('Y-m-d')}}">
                                            @error('Fecha')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Hora">Horario</label>
                                            <select data-plugin="customselect" class="form-control" name="Horario">
                                            @foreach($horarios as $horario)
                                                <option value="{{$horario->id}}">{{$horario->Horario}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <a href="{{ route('listaCitas') }}" class="btn btn-danger" >Cancelar</a>
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
