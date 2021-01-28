@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-12 col-xl-11">
                            <h2 class="mb-1 mt-0"><i style="font-size: 1.2em; color:#232323;" class="icon-dual fas fa-file-prescription"></i> Consulta médica</span></h2>
                        </div>
                        <div class="col-sm-1 col-xl-1">
                            <a href="{{route('consulta.historial',['IdPaciente'=>$paciente->id] )}}" class="btn btn-outline-primary" >
                                <i class='fas fa-arrow-left'></i> Regresar
                            </a>
                        </div>
                    </div>
                    <!-- content -->
                    <!-- row -->
            
                    <!-- products -->
                    <div class="row">
                        <div class="col-md-12 col-xl-12 col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media col-xl-2" style="display: inline-flex">
                                        @if(is_null($paciente->Foto))
                                        <img src="{{asset('../img/Admin/users/avatar-4.jpg')}}"
                                            class="avatar-lg rounded-circle mr-2" alt="shreyu">
                                        @else
                                        <img src="{{asset('../uploads/'.$paciente->Foto)}}"
                                            class="avatar-lg rounded-circle mr-2" alt="shreyu">
                                        @endif
                                        <div class="media-body">
                                            <h5 class="mt-2 mb-0">{{$paciente->NombreCompleto}}</h5>
                                            <h6 class="text-muted font-weight-normal mt-1 mb-4">{{$paciente->LugarOrigen}}</h6>
                                        </div>
                                    </div>
                                    <div class="media col-md-9 button-list" style="display: inline-flex; top:-35px;">
                                            <button class="btn btn-outline-info" data-toggle="modal" data-target="#modal-error" style="width: 100%;" type="submit">Aparatos y sistemas</button>
                                            <a href="{{ route('historial.verSintomasSubjetivos',['IdConsulta'=>$IdConsulta]) }}" class="btn btn-info" style="width: 100%;" type="submit">Síntomas subjetivos</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-1 mt-0">Aparatos y sistemas</h4>
                                    <form  class="row" novalidate>
                                    @csrf
                                        <div class="form-group col-md-6">
                                            <label for="Cabeza">Cabeza</label>
                                            <textarea  class="form-control @error('Cabeza') is-invalid @enderror" id="Cabeza" name="Cabeza" placeholder="Cabeza" readonly=""></textarea>
                                            @error('Cabeza')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="Cuello">Cuello</label>
                                            <textarea  class="form-control @error('Cuello') is-invalid @enderror" id="Cuello" name="Cuello" placeholder="Cuello" readonly=""></textarea>
                                            @error('Cuello')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="Tronco">Tronco</label>
                                            <textarea  class="form-control @error('Tronco') is-invalid @enderror" id="Tronco" name="Tronco" placeholder="Tronco" readonly=""></textarea>
                                            @error('Tronco')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="Pelvis">Pelvis</label>
                                            <textarea  class="form-control @error('Pelvis') is-invalid @enderror" id="Pelvis" name="Pelvis" placeholder="Pelvis" readonly=""></textarea>
                                            @error('Pelvis')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="MiembroInferior">Miembro inferior</label>
                                            <textarea  class="form-control @error('MiembroInferior') is-invalid @enderror" id="MiembroInferior" name="MiembroInferior" readonly="" placeholder="Miembro inferior"></textarea>
                                            @error('MiembroInferior')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="MiembroSuperior">Miembro superior</label>
                                            <textarea  class="form-control @error('MiembroSuperior') is-invalid @enderror" id="MiembroSuperior" name="MiembroSuperior" readonly="" placeholder="Miembro superior"></textarea>
                                            @error('MiembroSuperior')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="Cabello">Cabello</label>
                                            <textarea  class="form-control @error('Cabello') is-invalid @enderror" id="Cabello" name="Cabello" placeholder="Cabello" readonly=""></textarea>
                                            @error('Cabello')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="Dientes">Dientes</label>
                                            <textarea  class="form-control @error('Dientes') is-invalid @enderror" id="Dientes" name="Dientes" placeholder="Dientes" readonly=""></textarea>
                                            @error('Dientes')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="Lengua">Lengua</label>
                                            <textarea  class="form-control @error('Lengua') is-invalid @enderror" id="Lengua" name="Lengua" placeholder="Lengua" readonly=""></textarea>
                                            @error('Lengua')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="validationCustom02">Pulso</label>
                                            <textarea  class="form-control @error('Pulso') is-invalid @enderror" id="Pulso" name="Pulso" placeholder="Pulso" readonly=""></textarea>
                                            @error('Pulso')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                                <a href="{{route('consulta.historial',['IdPaciente'=>$paciente->id] )}}" class="btn btn-danger" >Cancelar</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- stats + charts -->

                </div>
        </div> <!-- content -->
        <div class="modal fade" id="modal-error" tabindex="-1" role="dialog" aria-labelledby="modal-errorLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-errorLabel">¡Estas en esta página!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <i data-feather="alert-octagon" style="font-size: 3em;" class="uil-no-entry text-warning display-3"></i>
                        <p class="w-75 mx-auto text-muted">¡Ya te encuentras en esta página!</p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-outline-primary btn-rounded width-md"  data-dismiss="modal"><i class="uil uil-arrow-left mr-1 fas fa-arrow-left"></i>Regresar</a>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
@endsection