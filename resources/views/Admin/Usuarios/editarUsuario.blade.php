@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Editar Usuario</h4>
                           
                        </div>
                    </div>
                    <!-- content -->
                    <!-- row -->
                    <!-- products -->
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation row" action="{{route('usuarios.update',['IdUsuario' =>$usuario->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                        <div class="form-group col-md-4">
                                            <label for="name">Nombre (s)</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="Nombre" placeholder="Nombres" required value="{{old('name',$usuario->name)}}" maxlength="190">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="ApellidoPaterno">Apellido paterno</label>
                                            <input type="text" name="ApellidoPaterno" class="form-control @error('ApellidoPaterno') is-invalid @enderror" id="ApellidoPaterno" placeholder="Apellido paterno" required value="{{old('ApellidoPaterno',$usuario->ApellidoPaterno)}}" maxlength="190">
                                            @error('ApellidoPaterno')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="ApellidoMaterno">Apellido materno</label>
                                            <input type="text" name="ApellidoMaterno" class="form-control @error('ApellidoMaterno') is-invalid @enderror" id="ApellidoMaterno" placeholder="Apellido materno" required value="{{old('ApellidoMaterno',$usuario->ApellidoMaterno)}}" maxlength="190">
                                            @error('ApellidoMaterno')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="FechaNacimiento">Fecha de nacimiento</label>
                                            <input type="date" name="FechaNacimiento" class="form-control @error('FechaNacimiento') is-invalid @enderror" id="FechaNacimiento" value="{{old('FechaNacimiento',$usuario->FechaNacimiento)}}">
                                            @error('FechaNacimiento')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Telefono">Teléfono</label>
                                            <input type="text" name="Telefono" class="form-control @error('Telefono') is-invalid @enderror" id="Telefono" placeholder="Telefono" required value="{{old('Telefono',$usuario->Telefono)}}" maxlength="190">
                                            @error('Telefono')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="IdSexo">Sexo</label>
                                            <select data-plugin="customselect" class="form-control @error('IdSexo') is-invalid @enderror" name="IdSexo">
                                            <option value="0" selected>Seleccione</option>
                                            @foreach($sexos as $sexo)
                                            <option value="{{$sexo->id}}"
                                            @if( (int) $sexo->id === (int) $usuario->IdSexo) selected='selected' @endif>{{$sexo->Sexo}}</option>
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
                                            for="email">E-mail</label>
                                            <input type="email" name ="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="E-mail" required value="{{old('email',$usuario->email)}}" maxlength="190">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                             
                                        <div class="form-group col-md-4">
                                            <label for="Rol">Rol</label>
                                            <select data-plugin="customselect" class="form-control @error('Rol') is-invalid @enderror" name="Rol">
                                            <option value="Seleccione">Seleccione</option>
                                                @foreach($roles as $rol)
                                                    <option value="{{$rol->name}}"
                                                    @if( (String) $rol->name === (String) $rolQueTengo) selected='selected' @endif>{{$rol->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('Rol')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <a href="{{ route('usuarios.list') }}" class="btn btn-danger" >Cancelar</a>
                                            <button type="submit" class="btn btn-primary" >Actualizar usuario</button>
                                        </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body pb-0">
                                <div class="text-center mt-3" style="padding-bottom:4%" >
                                @if(is_null($usuario->Foto))
                                        <img id="category-img-tag" src="{{asset('../img/Admin/users/avatar-4.jpg')}}" alt="Foto de perfil"
                                            class="avatar-xl rounded-circle" />
                                @else
                                        <img id="category-img-tag" src="{{asset('../uploads/'.$usuario->Foto)}}" alt="Foto de perfil"
                                                    class="avatar-xl rounded-circle" />
                                @endif
                                        <h5 class="mt-2 mb-0">Así se ve tu perfil</h5>
                                        <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu foto de perfil
                                        </h6>
                                        <div class="form-group col-md-4">
                                            <input id="cat_image" name="Foto" type="file" accept="image/*"/>
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
@section('scriptUsuariosEdit')
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