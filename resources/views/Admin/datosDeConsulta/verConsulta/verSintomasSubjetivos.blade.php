@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <!-- content -->
                <!-- row -->
                <div class="row page-title align-items-center">
                    <div class="col-sm-12 col-xl-11">
                        <h2 class="mb-1 mt-0"><i style="font-size: 1.2em; color:#232323;" class="icon-dual fas fa-file-prescription"></i> Consulta médica</span></h2>
                    </div>
                    <div class="col-sm-1 col-xl-1">
                                <a href="{{route('consulta.historial',['IdPaciente'=>$paciente->id] )}}" type="button" class="btn btn-outline-primary">
                                    <i class='fas fa-arrow-left'></i> regresar
                                </a>
                    </div>
                </div>
                <!-- products -->
                <div class="row">
                    <div class="col-md-12 col-xl-12 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="media col-xl-2" style="display: inline-flex">
                                        @if(is_null($paciente->Foto))
                                        <img src="{{asset('../img/Admin/users/avatar-4.jpg')}}"
                                            class="avatar-lg rounded-circle mr-2" alt="perfil">
                                        @else
                                        <img src="{{asset('../uploads/'.$paciente->Foto)}}"
                                            class="avatar-lg rounded-circle mr-2" alt="perfil">
                                        @endif
                                    <div class="media-body">
                                        <h5 class="mt-2 mb-0">{{$paciente->NombreCompleto}}</h5>
                                        <h6 class="text-muted font-weight-normal mt-1 mb-4">{{$paciente->LugarOrigen}}</h6>
                                    </div>
                                </div>
                                <div class="media col-md-9 button-list" style="display: inline-flex; top:-35px;">
                                    <a href="{{route('historial.verAparatosSintomas',['IdConsulta'=>$IdConsulta])}}" class="btn btn-info" style="width: 100%;" type="submit">Aparatos y
                                        sistemas</a>
                                    <button class="btn btn-outline-info" data-toggle="modal" data-target="#modal-error"
                                        style="width: 100%;" type="submit">Síntomas subjetivos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-12 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mt-0 mb-0 header-title">Lista de sintomas</h5>

                                <div class="table-responsive mt-12">
                                    <table class="table table-hover table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Padecimiento</th>
                                                <th scope="col">Descripción</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($sintomasSubjetivos as $sintomaSubjetivo)
                                            <tr>
                                                <input type="hidden" value="{{ $sintomaSubjetivo->id}}">
                                                <td>{{$sintomaSubjetivo->Nombre}}</td>
                                                <td>{{$sintomaSubjetivo->Descripcion}}</td>
                                                <td><button type="button" data-toggle="modal" data-target="#ver-sintoma" class="btn btn-outline-warning editarSintomaSub"><i
                                                            class="fa fa-eye"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card-body-->
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <!-- stats + charts -->

            </div>
        </div> <!-- content -->
    </div>
        <!-- modal text sintoma -->


    <!-- Editar sintomas -->
    <div class="modal fade" id="ver-sintoma" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Ver sintoma</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row" novalidate>
                    @csrf
                        <div class="form-group col-md-12">
                            <input type="hidden" name="IdSintoma" id="IdSintoma">
                            <label for="Nombre">Nombre del sintoma</label>
                            <input type="text" class="form-control" id="NombreUpdate" name="Nombre" readonly>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="Descripcion">Descripción</label>
                            <div>
                                <textarea required class="form-control" id="DescripcionUpdate" name="Descripcion" readonly></textarea>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- modal nuevo sintoma -->
    <!-- modal error -->
    <div class="modal fade" id="modal-error" tabindex="-1" role="dialog" aria-labelledby="modal-errorLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-errorLabel">¡Estas en esta página!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <i data-feather="alert-octagon" style="font-size: 3em;"
                        class="uil-no-entry text-warning display-3"></i>
                    <p class="w-75 mx-auto text-muted">¡Ya te encuentras en esta página!</p>
                    <div class="mt-4">
                        <a href="#" class="btn btn-outline-primary btn-rounded width-md" data-dismiss="modal"><i
                                class="uil uil-arrow-left mr-1 fas fa-arrow-left"></i>Regresar</a>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Eliminar sintoma subjetivo -->

@endsection
@section('scriptPacientes')
    <script src="{{asset('js/Admin/modales.js')}}"></script>
@endsection