@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Editar paciente</h4>
                           
                        </div>
                        <div class="col-sm-8 col-xl-6">
                            <form class="form-inline float-sm-right mt-3 mt-sm-0">
                                <div class="btn-group mb-sm-0 mr-2">

                                    <a href="{{ route('paciente.list') }}" class="btn btn-outline-danger">
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
                                <div class="card-header">
                                    Editar paciente
                                </div>
                                <div class="card-body">
                                    <form class="needs-validation row" novalidate method="POST"  action="{{ route('paciente.update', ['id'=>$paciente->id]) }}" enctype="multipart/form-data">
                                    @csrf
                                        <input type="hidden" name="_method" value="PUT">
                                        <div class="form-group col-md-4">
                                            <label for="Nombre">Nombre (s)</label>
                                            <input type="text" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror" id="Nombre" value="{{$paciente->Nombre}}" placeholder="Nombres" required>
                                            @error('Nombre')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="ApellidoPaterno">Apellido paterno</label>
                                            <input type="text" name="ApellidoPaterno" class="form-control @error('ApellidoPaterno') is-invalid @enderror" value="{{$paciente->ApellidoPaterno}}" id="ApellidoPaterno" placeholder="Apellido paterno" required>
                                            @error('ApellidoPaterno')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="ApellidoMaterno">Apellido materno</label>
                                            <input type="text" name="ApellidoMaterno" class="form-control @error('ApellidoMaterno') is-invalid @enderror" value="{{$paciente->ApellidoMaterno}}" id="ApellidoMaterno" placeholder="Apellido materno" required>
                                            @error('ApellidoMaterno')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        @if(is_null($paciente->FechaNacimiento))
                                        <div class="form-group col-md-4">
                                            <label for="FechaNacimiento1">Fecha de nacimiento</label>
                                            <input type="date" name="FechaNacimiento" class="form-control @error('FechaNacimiento') is-invalid @enderror" id="FechaNacimiento1"  value="{{$paciente->FechaCarbon->format('Y-m-d')}}">
                                            @error('FechaNacimiento')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        @else
                                        <div class="form-group col-md-4">
                                            <label for="FechaNacimiento2">Fecha de nacimiento</label>
                                            <input type="date" name="FechaNacimiento" class="form-control @error('FechaNacimiento') is-invalid @enderror" id="FechaNacimiento2"  value="{{$paciente->FechaNacimiento}}">
                                            @error('FechaNacimiento')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        @endif

                                        <div class="form-group col-md-4">
                                            <label for="Telefono">Teléfono</label>
                                            <input type="text" name="Telefono" class="form-control @error('Telefono') is-invalid @enderror" value="{{$paciente->Telefono}}" id="Telefono" placeholder="Telefono" required>
                                            @error('Telefono')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="IdSexo">Sexo</label>
                                            <select data-plugin="customselect" class="form-control @error('IdSexo') is-invalid @enderror" name="IdSexo">
                                            <option value="0">Seleccione</option>
                                                @foreach($Sexos as $sexo)
                                                <option value="{{$sexo->id}}"
                                                 @if( (int) $sexo->id === (int) $paciente->IdSexo) selected='selected' @endif>{{$sexo->Sexo}}</option>
                                                @endforeach
                                            </select>
                                            @error('IdSexo')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label
                                            for="Correo">E-mail</label>
                                            <input type="text" name ="Correo" class="form-control @error('Correo') is-invalid @enderror" value="{{$paciente->Correo}}" id="Correo" placeholder="E-mail" required>
                                            @error('Correo')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label
                                            for="LugarOrigen">Lugar de origen</label>
                                            <input type="text" name="LugarOrigen" class="form-control @error('LugarOrigen') is-invalid @enderror" value="{{$paciente->LugarOrigen}}" id="LugarOrigen" placeholder="Lugar de origen" required>
                                            @error('LugarOrigen')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label
                                            for="TipoSangre">Tipo de sangre</label>
                                            <input type="text" class="form-control @error('TipoSangre') is-invalid @enderror" value="{{$paciente->TipoSangre}}" id="TipoSangre" placeholder="Tipo de sangre" required name="TipoSangre">
                                            @error('TipoSangre')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="example-date">Imagen</label>
                                            <input name="Foto" type="file" accept="image/*"/>
                                            @error('Foto')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <a href="{{ route('paciente.list') }}" class="btn btn-danger" >Cancelar</a>
                                            <button type="submit" class="btn btn-primary" >Guardar paciente</button>
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