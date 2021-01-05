@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            @can('ListadoUsuarios')
            <div class="content">
                <div class="container-fluid">
                <form action="{{route('usuarios.buscar')}}" method="get">
                    <div class="row page-title align-items-center">
                            <div class="col-sm-6 col-md-6 col-xl-6">
                            <h4 class="mb-1 mt-0">Buscar usuario</h4>
                                <div class="input-group">
                                    <input type="text" name="Nombre" class="form-control col-lg-12 @error('Nombre') is-invalid @enderror" placeholder="Buscar usuario" required>
                                    @error('Nombre')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-3" style="display:inline-block;">
                                    <button type="submit" style="margin:38px 19px 0px;" class="form-control btn btn-large btn-primary">Buscar</button>
                            </div>
                        </form>
                        <div class="form-group mb-4" style="margin: 45px 40px 0px;">
                            <a href="{{route('usuarios.list')}}"  class="form-control btn btn-small width-xs btn-info">Todos los usuarios</a>
                        </div>
                    </div>
                    <!-- products -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                @can('CrearUsuario')
                                    <a href="{{ route('usuarios.new') }}" style="margin-right:10px;" class="btn btn-primary btn-sm float-right">
                                        <i class='fa fa-plus'></i> Nuevo usuario
                                    </a>
                                @endcan
                                    <h5 class="card-title mt-0 mb-0 header-title">Lista de usuarios</h5>
                                    <div style="padding:1%;" class="table-responsive mt-12">
                                    
                                        <div id="alerta">
                                            
                                        </div>
                                    
                                        <table class="table table-hover table-nowrap mb-0" data-form="deleteForm">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Telefono</th>
                                                    <th scope="col">Rol</th>
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <div class="container">
                                                   @foreach($usuarios as $usuario)
                                                        <tr>
                                                            <input type="hidden" value="{{ $usuario->id}}">
                                                            <td>{{$usuario->NombreCompleto}}</td>
                                                            <td>{{$usuario->Telefono}}</td>
                                                            <td>{{implode(" ",$usuario->getRoleNames()->toArray())}}</td>
                                                            <td>
                                                            @can('EditarUsuario')
                                                                <a href="{{route('usuarios.edit',['IdUsuario'=>$usuario->id])}}" class="btn btn-outline-warning"  data-toggle="tooltip" data-placement="left" title="Editar usuario"><i class="fa fa-edit"></i></a>
                                                            @endcan
                                                            @can('EliminarUsuario')
                                                                <span  data-toggle="tooltip" data-placement="left" title="Eliminar usuario"><button type="button" name="delete_modal" class="btn btn-outline-danger delete" data-toggle="modal" data-target="#eliminarPaciente">
                                                                    <i class="fa fa-trash"></i>
                                                                </button></span>
                                                            @endcan
                                                            @can('EditarUsuario')
                                                                <span  data-toggle="tooltip" data-placement="left" title="Cambiar contraseña"><button type="button" name="delete_modal" class="btn btn-outline-info change" data-toggle="modal" data-target="#contraseniaUsuario">
                                                                <i class="fas fa-key"></i>
                                                                    </button>
                                                                </span>
                                                            @endcan
                                                            </td>
                                                        </tr>
                                                   @endforeach
                                                </div>
                                              <!-- -->
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
            @endcan
        </div>
<div class="modal fade" id="eliminarPaciente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Eliminar usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('usuarios.delete')}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="text" name="IdModal" id="idUsuarioEliminar">
                    <p>¿Esta seguro que desea eliminar el usuario?</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Si, Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="contraseniaUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">cambiar contraseña</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                @csrf
                    <input type="hidden" name="idUsuario" id="idUsuario">
                    <div class="form-group col-md-12 mb-3">
                        <label for="password">Nueva contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Escriba la contraseña" required>
                        <div id="errorPassword1" style="color:red;"></div>
                        <div id="errorPassword2" style="color:red;"></div>
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="password_confirmation">Repetir contraseña</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Repita la contraseña" required autocomplete="new-password">
                        <div id="errorPasswordconfirmation" style="color:red;"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary enviar">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('changeUserPassword')
    <script src="{{asset('js/Admin/changeUserPassword.js')}}"></script>
@endsection