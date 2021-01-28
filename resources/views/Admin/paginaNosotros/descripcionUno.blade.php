@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Editar sección</h4>
                           
                        </div>
                        <div class="col-sm-8 col-xl-6">
                            <form class="form-inline float-sm-right mt-3 mt-sm-0">
                                <div class="btn-group mb-sm-0 mr-2">

                                    <a href="{{route('sobreNosotros')}}" class="btn btn-outline-danger">
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
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('sobreNosotros.editarDescripcion')}}" method="post"  class="needs-validation row" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                        <input type="hidden" name="id" value="{{$sobreAcumedic->id}}">
                                        <div class="form-group col-md-12">
                                            <label for="Titulo1">Título</label>
                                            <input type="text" class="form-control @error('Titulo1') is-invalid @enderror" value="{{old('Titulo1', $sobreAcumedic->Titulo1)}}" id="Titulo1" name="Titulo1" placeholder="Titulo 1" required maxlength="190">
                                            @error('Titulo1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="Informacion1">Primera sección</label>
                                            <div>
                                                <textarea required class="form-control @error('Informacion1') is-invalid @enderror" id="Informacion1" name="Informacion1" style="height: 10vh;">{{old('Informacion1', $sobreAcumedic->Informacion1)}}</textarea>
                                                @error('Informacion1')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                 @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="Titulo2">Título</label>
                                            <input type="text" class="form-control @error('Titulo2') is-invalid @enderror" value="{{old('Titulo2', $sobreAcumedic->Titulo2)}}" value="{{ old('Titulo2') }}" id="Titulo2" maxlength="190" name="Titulo2" placeholder="Titulo 2" required>
                                            @error('Titulo2')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="Informacion2">Segunda sección </label>
                                            <div>
                                                <textarea required class="form-control @error('Informacion2') is-invalid @enderror" id="Informacion2" name="Informacion2" style="height: 10vh;">{{old('Informacion2', $sobreAcumedic->Informacion2)}}</textarea>
                                                @error('Informacion2')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                 @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="Titulo3">Título</label>
                                            <input type="text" class="form-control @error('Titulo3') is-invalid @enderror" value="{{old('Titulo3', $sobreAcumedic->Titulo3)}}" id="Titulo3" name="Titulo3" maxlength="190" placeholder="Titulo 3" required>
                                            @error('Titulo3')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="Informacion3">Tercera sección </label>
                                            <div>
                                                <textarea required class="form-control @error('Informacion3') is-invalid @enderror" id="Informacion3" name="Informacion3" style="height: 10vh;">{{old('Informacion3', $sobreAcumedic->Informacion3)}}</textarea>
                                                @error('Informacion3')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                 @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <a href="{{route('sobreNosotros')}}" class="btn btn-danger" >Cancelar</a>
                                            <button class="btn btn-primary" type="submit">Guardar</button>
                                        </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body pb-0">
                                <div class=" mt-3" style="padding-bottom:4%" >
                                    <h4>Imagen de sección</h4>
                                        <img id="category-img-tag" src="{{asset('../uploads/SobreAcumedic/'.$sobreAcumedic->Foto)}}" alt="{{$sobreAcumedic->TextoAlterno}}"
                                            style="width: 150px;" />
                                        <h5 class="mt-2 mb-0">Así se ve tu imagen</h5>
                                        <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu imagen
                                        </h6>
                                        <div class="form-group col-md-12">
                                            <input id="cat_image" name="Foto" type="file" accept="image/*"/>
                                            @if($errors->has('Foto'))
                                                <span class="help-block text-danger">
                                                    <strong>{{$errors->first('Foto')}}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="TituloImagen" style="text-align: left;">Titulo:</label>
                                            <div>
                                                <input type="text" class="form-control @error('TituloImagen') is-invalid @enderror" value="{{old('TituloImagen', $sobreAcumedic->TituloImagen)}}" name="TituloImagen" id="TituloImagen" placeholder="Titulo" maxlength="190" required>
                                                @error('TituloImagen')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="TextoAlterno" style="text-align: left;">Texto alternado:</label>
                                            <div>
                                                <input type="text" class="form-control @error('TextoAlterno') is-invalid @enderror" value="{{old('TextoAlterno', $sobreAcumedic->TextoAlterno)}}" id="TextoAlterno" name="TextoAlterno" placeholder="Texto alterno" maxlength="190" required>
                                                @error('TextoAlterno')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div>
                    </form>
                    </div>
                    <!-- end row -->
                    <!-- stats + charts -->

                </div>
            </div> <!-- content -->
</div>
@endsection
@section('scriptDesc1')
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