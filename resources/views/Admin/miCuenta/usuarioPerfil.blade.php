@extends('Shared.masterAdmin')
@section('content')
<div class="content-page">
    <div class="content">
    <!-- Start Content-->
        <div class="container-fluid">
            <div class="row page-title">
                <div class="col-md-12">
                    <h4 class="mb-1 mt-0">Perfil</h4>
                </div>
            </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mt-3">
                        @if(is_null(Auth::user()->Foto))
                            <img style="width: 200px;" src="{{asset('../img/Admin/users/avatar-4.jpg')}}" alt="" class="rounded-circle" />
                        @else
                            <img style="width: 200px;" src="{{asset('../uploads/'.Auth::user()->Foto)}}" alt="" class="rounded-circle" />
                        @endif
                        <h2 class="mt-2 mb-0">{{Auth::user()->name}}</h2>
                        <h6 class="text-muted font-weight-normal mt-1 mb-4">{{Auth::user()->ApellidoPaterno}} {{Auth::user()->ApellidoMaterno}}</h6>
                        </div>
                        <!-- profile  -->
                        <div class="mt-3 pt-2 border-top">
                            <h4 class="mb-3 font-size-15">Datos del Usuario</h4>
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0 text-muted">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Correo electronico</th>
                                            <td>{{Auth::user()->email}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Télefono</th>
                                            <td>{{Auth::user()->Telefono}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Fecha de naciemiento</th>
                                            <td>{{Auth::user()->FechaNacimiento}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tipo de rol:</th>
                                            <td>{{implode(" ",Auth::user()->getRoleNames()->toArray())}}</td>
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
                <div id="alerta"></div>
                    <div class="card">
                        <div class="card-body p-0">
                            <a class="" href="" name="delete_modal" id="modal">
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
                            <a class="" href="{{route('miCuenta.edit',['IdUsuario'=>Auth::user()->id])}}">
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
                @csrf
                    <input type="hidden" name="idUsuario" id="idUsuario" value="{{Auth::user()->id}}">
                    <div class="form-group col-md-12 mb-3">
                        <label for="password">Contraseña actual</label>
                        <input type="password" class="form-control" name="passwordActual" id="passwordActual" placeholder="Escriba la contraseña actual" required maxlength="190">
                        <div id="errorpasswordActual" style="color:red;"></div>
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="password">Nueva contraseña (minimo 6 caracteres)</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Escriba la contraseña" required maxlength="190">
                            <div id="errorPassword" style="color:red;"></div>
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="password_confirmation">Repetir contraseña</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Repita la contraseña" maxlength="190" required autocomplete="new-password">
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
@section('miCuenta')
    <script src="{{asset('js/Admin/changePasswordAcount.js')}}"></script>
@endsection