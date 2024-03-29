@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Editar paciente</h4>

                        </div>
                    </div>
                    <!-- content -->
                    <!-- row -->
                    <!-- products -->
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation row" method="POST" action="{{ route('paciente.update', ['id'=>$paciente->id]) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group col-md-4">
                                            <label for="Nombre">Nombre (s)</label>
                                            <input type="text" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror" id="Nombre" value="{{old('Nombre', $paciente->Nombre)}}" placeholder="Nombres" required maxlength="190">
                                            @error('Nombre')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="ApellidoPaterno">Apellido paterno</label>
                                            <input type="text" name="ApellidoPaterno" class="form-control @error('ApellidoPaterno') is-invalid @enderror" value="{{old('ApellidoPaterno', $paciente->ApellidoPaterno)}}" id="ApellidoPaterno" placeholder="Apellido paterno" maxlength="190" required>
                                            @error('ApellidoPaterno')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="ApellidoMaterno">Apellido materno</label>
                                            <input type="text" name="ApellidoMaterno" class="form-control @error('ApellidoMaterno') is-invalid @enderror" value="{{old('ApellidoMaterno', $paciente->ApellidoMaterno)}}"  id="ApellidoMaterno" placeholder="Apellido materno" maxlength="190" required>
                                            @error('ApellidoMaterno')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        @if(is_null($paciente->FechaNacimiento))
                                        <div class="form-group col-md-4">
                                            <label for="FechaNacimiento1">Fecha de nacimiento</label>
                                            <input type="date" name="FechaNacimiento" class="form-control @error('FechaNacimiento') is-invalid @enderror" id="FechaNacimiento1"  value="{{old('FechaNacimiento',$paciente->FechaCarbon->format('Y-m-d'))}}">
                                            @error('FechaNacimiento')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        @else
                                        <div class="form-group col-md-4">
                                            <label for="FechaNacimiento2">Fecha de nacimiento</label>
                                            <input type="date" name="FechaNacimiento" class="form-control @error('FechaNacimiento') is-invalid @enderror" id="FechaNacimiento2" value="{{old('FechaNacimiento', $paciente->FechaNacimiento)}}">
                                            @error('FechaNacimiento')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        @endif

                                        <div class="form-group col-md-4">
                                            <label for="Telefono">Teléfono</label>
                                            <input type="text" name="Telefono" class="form-control @error('Telefono') is-invalid @enderror" value="{{old('Telefono', $paciente->Telefono)}}" id="Telefono" placeholder="Telefono" required maxlength="190">
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
                                            <input type="text" name ="Correo" class="form-control @error('Correo') is-invalid @enderror" value="{{old('Correo', $paciente->Correo)}}" id="Correo" placeholder="E-mail" maxlength="190" required>
                                            @error('Correo')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label
                                            for="LugarOrigen">Lugar de origen</label>
                                            <input type="text" name="LugarOrigen" class="form-control @error('LugarOrigen') is-invalid @enderror" value="{{old('LugarOrigen', $paciente->LugarOrigen)}}" id="LugarOrigen" maxlength="190" placeholder="Lugar de origen" required>
                                            @error('LugarOrigen')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label
                                            for="TipoSangre">Tipo de sangre</label>
                                            <input type="text" class="form-control @error('TipoSangre') is-invalid @enderror" value="{{old('TipoSangre', $paciente->TipoSangre)}}" id="TipoSangre" placeholder="Tipo de sangre" maxlength="190" required name="TipoSangre">
                                            @error('TipoSangre')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <a href="{{ route('paciente.list') }}" class="btn btn-danger" >Cancelar</a>
                                            <button type="submit" class="btn btn-primary" >Actualizar paciente</button>
                                        </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body pb-0">
                                <div class="text-center mt-3" style="padding-bottom:4%" >
                                @if(is_null($paciente->Foto))
                                        <img id="category-img-tag" src="{{asset('../img/Admin/users/avatar-4.jpg')}}" alt="Foto de perfil"
                                            class="avatar-xl rounded-circle" />
                                @else
                                        <img id="category-img-tag" src="{{$paciente->Foto}}" alt="Foto de perfil"
                                                    class="avatar-xl rounded-circle" />
                                @endif
                                        <h5 class="mt-2 mb-0">Así se ve tu perfil</h5>
                                        <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu foto de perfil
                                        </h6>
                                        <div class="form-group col-md-4">
                                            <input id="cat_image" name="Foto" type="file" accept="image/*"/>
                                            @error('Foto')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div>
                        </form>
                        <!-- end col-->
                    </div>
                    <!-- end row -->
                </div>
            </div> <!-- content -->
</div>
@endsection
@section('scriptPacientesEdit')
<script src="{{asset('js/jquery.js')}}"></script>
<script>
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#category-img-tag').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#cat_image").change(function(){
        readURL(this);
    });
</script>
@endsection
