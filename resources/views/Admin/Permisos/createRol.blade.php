@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row page-title align-items-center">
                            <div class="col-sm-4 col-xl-6">
                                <h4 class="mb-1 mt-0">Crear rol</h4>
                            </div>
                        </div>

                        <!-- content -->

                        <!-- widgets -->
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <form action="{{route('permisos.rol.store')}}" method="post" class="needs-validation">
                                @csrf
                                    <div class="card">
                                        <div class="card-body pt-2">
                                                <div class="table-responsive mt-12 custom-control custom-checkbox">
                                                    <div class="form-group col-md-9">
                                                        <label for="Rol">Nombre del nuevo rol</label>
                                                        <input type="text" class="form-control @error('Rol') is-invalid @enderror" id="Rol" placeholder="Nombre del rol" name="Rol" required>
                                                        @error('Rol')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
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
                                                            <tr>
                                                                <td>
                                                                    <input type="checkbox" class="custom-control-input checks" id="AgendarCitas">
                                                                    <label class="custom-control-label" for="AgendarCitas">
                                                                        Agendar citas
                                                                    </label></td>
                                                                <td><input type="checkbox" class="check" name="ListadoCitas" value="ListadoCitas"></td>
                                                                <td><input type="checkbox" class="check" name="CrearCita" value="CrearCita"></td>
                                                                <td><input type="checkbox" class="check" name="EditarCita" value="EditarCita"></td>
                                                                <td><input type="checkbox" class="check" name="EliminarCita" value="EliminarCita"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="checkbox" class="custom-control-input checks" id="Pacientes">
                                                                    <label class="custom-control-label" for="Pacientes">
                                                                        Pacientes
                                                                    </label></td>
                                                                <td><input type="checkbox" class="check" name="ListadoPacientes" value="ListadoPacientes"></td>
                                                                <td><input type="checkbox" class="check" name="CrearPaciente" value="CrearPaciente"></td>
                                                                <td><input type="checkbox" class="check" name="EditarPaciente" value="EditarPaciente"></td>
                                                                <td><input type="checkbox" class="check" name="EliminarPaciente" value="EliminarPaciente"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="checkbox" class="custom-control-input checks" id="Fichas">
                                                                    <label class="custom-control-label" for="Fichas">
                                                                        Fichas
                                                                    </label></td>
                                                                <td><input type="checkbox" class="check" name="ListadoFicha" value="ListadoFicha"></td>
                                                                <td><input type="checkbox" class="check" name="CrearFicha" value="CrearFicha"></td>
                                                                <td><input type="checkbox" class="check" name="EditarFicha" value="EditarFicha"></td>
                                                                <td><input type="checkbox" class="check" name="EliminarFicha" value="EliminarFicha"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="checkbox" class="custom-control-input checks" id="Usuarios">
                                                                    <label class="custom-control-label" for="Usuarios">
                                                                        Usuarios
                                                                    </label></td>
                                                                <td><input type="checkbox" class="check" name="ListadoUsuarios" value="ListadoUsuarios"></td>
                                                                <td><input type="checkbox" class="check" name="CrearUsuario" value="CrearUsuario"></td>
                                                                <td><input type="checkbox" class="check" name="EditarUsuario" value="EditarUsuario"></td>
                                                                <td><input type="checkbox" class="check" name="EliminarUsuario" value="EliminarUsuario"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="checkbox" class="custom-control-input checks" id="Roles">
                                                                    <label class="custom-control-label" for="Roles">
                                                                        Roles
                                                                    </label></td>
                                                                <td><input type="checkbox" class="check" name="ListarRoles" value="ListarRoles"></td>
                                                                <td><input type="checkbox" class="check" name="CrearRol" value="CrearRol"></td>
                                                                <td><input type="checkbox" class="check" name="EditarRol" value="EditarRol"></td>
                                                                <td><input type="checkbox" class="check"name="EliminarRol" value="EliminarRol"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="checkbox" class="custom-control-input checks" id="Productos">
                                                                    <label class="custom-control-label" for="Productos">
                                                                        Productos
                                                                    </label></td>
                                                                <td><input type="checkbox" class="check" name="ListadoProducto" value="ListadoProducto"></td>
                                                                <td><input type="checkbox" class="check" name="CrearProducto" value="CrearProducto"></td>
                                                                <td><input type="checkbox" class="check" name="EditarProducto" value="EditarProducto"></td>
                                                                <td><input type="checkbox" class="check"name="EliminarProducto" value="EliminarProducto"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="checkbox" class="custom-control-input checks" id="Servicios">
                                                                    <label class="custom-control-label" for="Servicios">
                                                                        Servicios
                                                                    </label></td>
                                                                <td><input type="checkbox" class="check" name="ListadoServicio" value="ListadoServicio"></td>
                                                                <td><input type="checkbox" class="check" name="CrearServicio" value="CrearServicio"></td>
                                                                <td><input type="checkbox" class="check" name="EditarServicio" value="EditarServicio"></td>
                                                                <td><input type="checkbox" class="check"name="EliminarServicio" value="EliminarServicio"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body pt-2">
                                            <div class="table-responsive mt-12 custom-control custom-checkbox">
                                                <table class="table table-hover table-nowrap mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Nombre de permisos</th>
                                                            <th scope="col">Perfil de consulta</th>
                                                            <th scope="col">Historial</th>
                                                            <th scope="col">Inicar consulta</th>
                                                            <th scope="col">Antecedentes</th>
                                                            <th scope="col">Estudios de gabinete</th>
                                                        </tr>
                                                    </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <input type="checkbox" class="custom-control-input checks" id="DatosConsulta">
                                                                    <label class="custom-control-label" for="DatosConsulta">
                                                                        Datos de consulta
                                                                    </label></td>
                                                                <td><input type="checkbox" class="check" name="Consulta" value="Consulta"></td>
                                                                <td><input type="checkbox" class="check" name="Historial" value="Historial"></td>
                                                                <td><input type="checkbox" class="check" name="InicarConsulta" value="InicarConsulta"></td>
                                                                <td><input type="checkbox" class="check" name="Antecedentes" value="Antecedentes"></td>
                                                                <td><input type="checkbox" class="check" name="EstudiosGabinete" value="EstudiosGabinete"></td>
                                                            </tr>
                                                        </tbody>
                                                </table>
                                                <div class="form-group col-md-12" style="padding-top: 2%;">
                                                    <a  href="{{route('permisos.rol')}}"class="btn btn-danger" >Cancelar</a>
                                                    <button class="btn btn-primary" type="submit">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                </div> <!-- content -->
</div>
@endsection
@section('checksPermisos')
    <script src="{{asset('js/Admin/checksPermisos.js')}}"></script>
@endsection