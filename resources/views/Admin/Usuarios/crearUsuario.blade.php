@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Crear Usuario</h4>
                           
                        </div>
                    </div>
                    <!-- content -->
                    <!-- row -->
                    <!-- products -->
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation row" novalidate action="{{route('usuarios.create')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group col-md-4">
                                            <label for="name">Nombre (s)</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="Nombre" placeholder="Nombres" required>
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="ApellidoPaterno">Apellido paterno</label>
                                            <input type="text" name="ApellidoPaterno" class="form-control @error('ApellidoPaterno') is-invalid @enderror" id="ApellidoPaterno" placeholder="Apellido paterno" required>
                                            @error('ApellidoPaterno')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="ApellidoMaterno">Apellido materno</label>
                                            <input type="text" name="ApellidoMaterno" class="form-control @error('ApellidoMaterno') is-invalid @enderror" id="ApellidoMaterno" placeholder="Apellido materno" required>
                                            @error('ApellidoMaterno')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="FechaNacimiento">Fecha de nacimiento</label>
                                            <input type="date" name="FechaNacimiento" class="form-control @error('FechaNacimiento') is-invalid @enderror" id="FechaNacimiento" value="{{date_create()->format('Y-m-d')}}">
                                            @error('FechaNacimiento')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Telefono">Teléfono</label>
                                            <input type="text" name="Telefono" class="form-control @error('Telefono') is-invalid @enderror" id="Telefono" placeholder="Telefono" required>
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
                                            <option value="{{$sexo->id}}">{{$sexo->Sexo}}</option>
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
                                            <input type="email" name ="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="E-mail" required>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label
                                            for="password">Contraseña</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Escriba la contraseña" required name="password">
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label
                                            for="password2">Repita la contraseña</label>
                                            <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Repita la contraseña" required autocomplete="new-password">
                                            @error('password_confirmation')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label
                                            for="IdRol">Rol de usuario</label>
                                            <input type="text" class="form-control @error('IdRol') is-invalid @enderror" id="IdRol" placeholder="Es un select, luego lo cambio" required name="IdRol">
                                            @error('IdRol')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <a href="{{ route('usuarios.list') }}" class="btn btn-danger" >Cancelar</a>
                                            <button type="submit" class="btn btn-primary" >Guardar usuario</button>
                                        </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body pb-0">
                                <div class="text-center mt-3" style="padding-bottom:4%" >
                                        <img id="category-img-tag" src="{{asset('../img/Admin/users/avatar-4.jpg')}}" alt=""
                                            class="avatar-xl rounded-circle" />
                                        <h5 class="mt-2 mb-0">Asi se ve tu perfil</h5>
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