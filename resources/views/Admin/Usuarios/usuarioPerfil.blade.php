@extends('Shared.masterAdmin')
@section('content')
<div class="content-page">
    <div class="content">
    <!-- Start Content-->
        <div class="container-fluid">
            <div class="row page-title">
                <div class="col-md-12">
                    <h4 class="mb-1 mt-0">Profile</h4>
                </div>
            </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mt-3">
                        <img style="width: 200px;" src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle" />
                        <h2 class="mt-2 mb-0">Felipe Martínez</h2>
                        <h6 class="text-muted font-weight-normal mt-1 mb-4">San Francisco, CA</h6>
                        </div>
                        <!-- profile  -->
                        <div class="mt-3 pt-2 border-top">
                            <h4 class="mb-3 font-size-15">Datos del Usuario</h4>
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0 text-muted">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Correo electronico</th>
                                            <td>xyz123@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Télefono</th>
                                            <td>(123) 123 1234</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Cumpleaños</th>
                                            <td>1975 Boring Lane, San Francisco, California, United States -94108</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tipo de rol:</th>
                                            <td>Mecanico</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->    
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <a class="" href="" name="delete_modal" data-toggle="modal" data-target="#contraseniaUsuario">
                                <div class="hover-list media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Cambiar contraseña</span>
                                        <!-- <h2 class="mb-0">$2100</h2> -->
                                    </div>
                                    <div class="align-self-center">
                                        <span class="icon-lg icon-dual-primary" data-feather="key"></span>
                                    </div>
                                </div>
                            </a>
                            <a class="" href="{{route('usuarios.edit',['IdUsuario'=>$usuario->id])}}">
                                <div class="hover-list media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Editar datos</span>
                                        <!-- <h2 class="mb-0">$2100</h2> -->
                                    </div>
                                    <div class="align-self-center">
                                        <span class="icon-lg icon-dual-primary" data-feather="edit"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <!-- end row -->
            </div> <!-- container-fluid -->
        </div> <!-- content -->
    </div>
</div>
<div class="modal fade" id="contraseniaUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Cambiar contraseña</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <input type="hidden" name="idUsuario" id="idUsuario">
                    <div class="form-group col-md-12 mb-3">
                        <label for="password">Contraseña actual</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Escriba la contraseña" required>
                        <div id="" style="color:red;"></div>
                        <div id="" style="color:red;"></div>
                    </div>
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
                        <button type="button" class="btn btn-primary enviar" id="buttonAdd">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection