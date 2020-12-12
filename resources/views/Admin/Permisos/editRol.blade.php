@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row page-title align-items-center">
                            <div class="col-sm-4 col-xl-6">
                                <h4 class="mb-1 mt-0">Actualizar rol</h4>
                            </div>
                        </div>

                        <!-- content -->

                        <!-- widgets -->
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="card">
                                    <div class="card-body pt-2">
                                        <form action="{{route('permisos.rol.update',['id'=>$rol['id']])}}" method="post">
                                        @csrf
                                        @method('put')
                                            <div class="table-responsive mt-12 custom-control custom-checkbox">
                                                <div class="form-group col-md-9">
                                                    <label for="Rol">Nombre del rol</label>
                                                    <input type="text" class="form-control" id="Rol" placeholder="Nombre del rol" name="Rol" value="{{$rol['name']}}" required>
                                                </div>
                                                <table class="table table-hover table-nowrap mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Nombre de permisos</th>
                                                            <th scope="col">Listar</th>
                                                            <th scope="col">Crear</th>
                                                            <th scope="col">Editar</th>
                                                            <th scope="col">Eliminar</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- aqui va el forechazo -->
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="custom-control-input">
                                                                <label class="custom-control-label">
                                                                    Agendar citas
                                                                </label></td>
                                                            <td><input type="checkbox" name="ListadoCitas" value="ListadoCitas" {{$permisos['ListadoCitas']}}></td>
                                                            <td><input type="checkbox" name="CrearCita" value="CrearCita"  {{$permisos['CrearCita']}}></td>
                                                            <td><input type="checkbox" name="EditarCita" value="EditarCita"  {{$permisos['EditarCita']}}></td>
                                                            <td><input type="checkbox" name="EliminarCita" value="EliminarCita"  {{$permisos['EliminarCita']}}></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="custom-control-input">
                                                                <label class="custom-control-label">
                                                                    Pacientes
                                                                </label></td>
                                                            <td><input type="checkbox" name="ListadoPacientes" value="ListadoPacientes" {{$permisos['ListadoPacientes']}}></td>
                                                            <td><input type="checkbox" name="CrearPaciente" value="CrearPaciente" {{$permisos['CrearPaciente']}}></td>
                                                            <td><input type="checkbox" name="EditarPaciente" value="EditarPaciente"  {{$permisos['EditarPaciente']}}></td>
                                                            <td><input type="checkbox" name="EliminarPaciente" value="EliminarPaciente"  {{$permisos['EliminarPaciente']}}></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="custom-control-input">
                                                                <label class="custom-control-label">
                                                                    Fichas
                                                                </label></td>
                                                            <td><input type="checkbox" name="ListadoFicha" value="ListadoFicha"  {{$permisos['ListadoFicha']}}></td>
                                                            <td><input type="checkbox" name="CrearFicha" value="CrearFicha"  {{$permisos['CrearFicha']}}></td>
                                                            <td><input type="checkbox" name="EditarFicha" value="EditarFicha"  {{$permisos['EditarFicha']}}></td>
                                                            <td><input type="checkbox" name="EliminarFicha" value="EliminarFicha"  {{$permisos['EliminarFicha']}}></td>
                                                        </tr>
                                                        
                                                        <!-- aqui va el forechazo -->
                                                    </tbody>
                                                </table>
                                                <div class="form-group col-md-12" style="padding-top: 2%;">
                                                    <a  href="{{route('permisos.rol')}}"class="btn btn-danger" >Cancelar</a>
                                                    <button class="btn btn-primary" type="submit">Actualizar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                </div> <!-- content -->
</div>
@endsection