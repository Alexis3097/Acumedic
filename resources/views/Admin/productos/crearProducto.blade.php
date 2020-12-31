@extends('Shared.masterAdmin')
@section('estilosVentas')
<link rel="stylesheet" href="{{asset('js/Admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('js/Admin/libs/multiselect/multi-select.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('js/Admin/libs/select2/select2.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('js/Admin/libs/flatpickr/flatpickr.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('js/Admin/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('js/Admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css')}}" type="text/css">
@endsection
@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Crear producto</h4>
                           
                        </div>
                        <div class="col-sm-8 col-xl-6">
                            <div class="form-inline float-sm-right mt-3 mt-sm-0">
                                <div class="btn-group mb-sm-0 mr-2">
                                    <a href="{{ route('productos.list')}}" class="btn btn-outline-danger">
                                        <i class='fas fa-times'></i> Cancelar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- content -->
                    <!-- row -->
            
                    <!-- products -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('productos.store')}}" method="post" class="row" novalidate enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group col-md-12">
                                            <label for="Nombre">Nombre del producto</label>
                                            <input type="text" class="form-control @error('Nombre') is-invalid @enderror" name="Nombre" id="Nombre" placeholder="Tú nombre del producto"  value="{{ old('Nombre') }}" required>
                                            @error('Nombre')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4 mb-3">
                                            <label for="PrecioCompra">Precio de compra</label>
                                            <input class="form-control @error('PrecioCompra') is-invalid @enderror"  value="{{ old('PrecioCompra') }}" name="PrecioCompra" id="PrecioCompra" required placeholder="0.00">
                                            @error('PrecioCompra')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4 mb-3">
                                            <label for="PrecioPublico">Precio publico</label>
                                            <input class="form-control @error('PrecioPublico') is-invalid @enderror"  value="{{ old('PrecioPublico') }}" name="PrecioPublico" id="PrecioPublico" required placeholder="0.00">
                                            @error('PrecioPublico')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <!-- <div class="form-group col-md-3 mb-3">
                                            <label>Porcentaje de descuento</label>
                                            <input data-toggle="touchspin" value="18.20" type="text" data-step="0.1" data-decimals="2" data-bts-postfix="%">
                                        </div> -->
                                        <div class="form-group col-md-4 mb-3">
                                            <label>Estrellas de calidad</label>
                                            <select class="custom-select mb-2" name="Estrellas">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="CodigoBarra">Código de barras</label>
                                            <div class="checkbox-1">
                                                <input type="checkbox" name="check" value="1">
                                                <label style="display:inline-block;">Generar automaticamente</label>
                                            </div>
                                            <input type="text" class="form-control @error('CodigoBarra') is-invalid @enderror"  value="{{ old('CodigoBarra') }}" name="CodigoBarra" id="CodigoBarra" placeholder="Escribe el código" required>
                                            @error('CodigoBarra')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="DescripcionCorta">Descripción corta (Máximo 217 caracteres)</label>
                                            <input type="text" class="form-control @error('DescripcionCorta') is-invalid @enderror"  value="{{ old('DescripcionCorta') }}" name="DescripcionCorta" id="DescripcionCorta" maxlength="217" placeholder="Escribe tu descripción" required>
                                            @error('DescripcionCorta')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="DescripcionLarga">Descripción larga del producto</label>
                                            <div>
                                                <textarea required class="form-control @error('DescripcionLarga') is-invalid @enderror"  name="DescripcionLarga" id="DescripcionLarga"> {{ old('DescripcionLarga') }}</textarea>
                                                @error('DescripcionLarga')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class=" mt-3" style="padding-bottom:4%;" >
                                        <div class="imagen-producto" style="width:24%; display:inline-block;">
                                            <h4>Imagen de producto</h4>
                                            <img id="category-img-tag" src="{{asset('../img/upload.jpg')}}" alt=""style="width: 150px;" />
                                            <h5 class="mt-2 mb-0">Asi se ve tu Imagen de producto</h5>
                                            <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu Imagen de producto</h6>
                                            <div class="form-group col-md-12">
                                                <input id="cat_image"  style="width:100%;" name="Foto1" type="file" class="btn btn-info @error('Foto1') is-invalid @enderror"accept="image/*"/>
                                                @error('Foto1')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-12">
                                            <button id="btn-example-file-reset" style="width:100%;"class="btn btn-info" type="button">Reemplazar</button>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="Titulo1" style="text-align: left;">Titulo de la imagen</label>
                                                <div>
                                                    <input type="text" class="form-control @error('Titulo1') is-invalid @enderror" name="Titulo1" id="Titulo1" value="{{ old('Titulo1') }}" placeholder="Titulo">
                                                    @error('Titulo1')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="TextoAlterno1" style="text-align: left;">Texto alternado</label>
                                                <div>
                                                    <input type="text" class="form-control @error('TextoAlterno1') is-invalid @enderror" value="{{ old('TextoAlterno1') }}"  name="TextoAlterno1" id="TextoAlterno1" placeholder="Texto alterno de imagen" >
                                                    @error('TextoAlterno1')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="imagen-producto" style="width:24%; display:inline-block;">
                                            <h4>Imagen de producto</h4>
                                            <img id="category-img-tag1" src="{{asset('../img/upload.jpg')}}" alt=""style="width: 150px;" />
                                            <h5 class="mt-2 mb-0">Asi se ve tu Imagen de producto</h5>
                                            <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu imagen de producto</h6>
                                            <div class="form-group col-md-12">
                                                <input id="cat_image1"  style="width:100%;" name="Foto2" type="file" accept="image/*" class="btn btn-info @error('Foto2') is-invalid @enderror"/>
                                                @error('Foto2')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button id="btn-example-file-reset1" style="width:100%;"class="btn btn-info" type="button">Reemplazar</button>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="Titulo2" style="text-align: left;">Titulo de la imagen</label>
                                                <div>
                                                    <input type="text" class="form-control @error('Titulo2') is-invalid @enderror" value="{{ old('Titulo2') }}" name="Titulo2" id="Titulo2" placeholder="Titulo" required>
                                                    @error('Titulo2')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="TextoAlterno2" style="text-align: left;">Texto alternado</label>
                                                <div>
                                                    <input type="text" class="form-control @error('TextoAlterno2') is-invalid @enderror" value="{{ old('TextoAlterno2') }}" name="TextoAlterno2" id="TextoAlterno2" placeholder="Texto alterno de imagen" required>
                                                    @error('TextoAlterno2')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="imagen-producto" style="width:24%; display:inline-block;">
                                            <h4>Imagen de producto</h4>
                                            <img id="category-img-tag2" src="{{asset('../img/upload.jpg')}}" alt=""style="width: 150px;" />
                                            <h5 class="mt-2 mb-0">Asi se ve tu Imagen de producto</h5>
                                            <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu imagen de producto</h6>
                                            <div class="form-group col-md-12">
                                                <input id="cat_image2" name="Foto3" type="file" style="width:100%;"  accept="image/*"class="btn btn-info @error('Foto3') is-invalid @enderror" />
                                                @error('Foto3')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button id="btn-example-file-reset2" style="width:100%;"class="btn btn-info" type="button">Reemplazar</button>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="Titulo3" style="text-align: left;">Titulo de la imagen</label>
                                                <div>
                                                    <input type="text" class="form-control @error('Titulo3') is-invalid @enderror" value="{{ old('Titulo3') }}" name="Titulo3" id="Titulo3" placeholder="Titulo" required>
                                                    @error('Titulo3')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="TextoAlterno3" style="text-align: left;">Texto alternado</label>
                                                <div>
                                                    <input type="text" class="form-control @error('TextoAlterno3') is-invalid @enderror" value="{{ old('TextoAlterno3') }}" name="TextoAlterno3" id="TextoAlterno3" placeholder="Texto alterno de imagen" required>
                                                    @error('TextoAlterno3')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="imagen-producto" style="width:24%; display:inline-block;">
                                            <h4>Imagen de producto</h4>
                                            <img id="category-img-tag3" src="{{asset('../img/upload.jpg')}}" alt=""style="width: 150px;" />
                                            <h5 class="mt-2 mb-0">Asi se ve tu Imagen de producto</h5>
                                            <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu imagen de producto</h6>
                                            <div class="form-group col-md-12">
                                                <input id="cat_image3" name="Foto4" style="width:100%;"  type="file" accept="image/*" class="btn btn-info @error('Foto4') is-invalid @enderror"/>
                                                @error('Foto4')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button id="btn-example-file-reset3" style="width:100%;"  class="btn btn-info" type="button">Reemplazar</button>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="Titulo4" style="text-align: left;">Titulo de la imagen</label>
                                                <div>
                                                    <input type="text" class="form-control @error('Titulo4') is-invalid @enderror" value="{{ old('Titulo4') }}" name="Titulo4" id="Titulo4" placeholder="Titulo" required>
                                                    @error('Titulo4')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="TextoAlterno4" style="text-align: left;">Texto alternado</label>
                                                <div>
                                                    <input type="text" class="form-control @error('TextoAlterno4') is-invalid @enderror" value="{{ old('TextoAlterno4') }}" name="TextoAlterno4" id="TextoAlterno4" placeholder="Texto alterno de imagen" required>
                                                    @error('TextoAlterno4')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <a href="{{route('productos.list')}}" class="btn btn-danger">Cancelar</a>
                                            <button class="btn btn-primary" type="submit">Guardar</button>
                                        </div>
                                    </div>
                                </div> <!-- end card-body-->
                                </form>
                            </div> <!-- end card-->
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- stats + charts -->

                </div>
            </div> <!-- content -->

</div>
@endsection
@section('scriptVentas')
<script src="{{asset('js/Admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('js/Admin/libs/select2/select2.min.js')}}"></script>
<script src="{{asset('js/Admin/libs/multiselect/jquery.multi-select.js')}}"></script>
<script src="{{asset('js/Admin/libs/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('js/Admin/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('js/Admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
<script src="{{asset('js/Admin/pages/form-advanced.init.js')}}"></script>
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
        $(document).ready(function() {
            $('#btn-example-file-reset').on('click', function() {     
            $('#cat_image').val('');
            $('#category-img-tag').attr('src','../img/upload.jpg')
         });
        });
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#category-img-tag1').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }        
        $("#cat_image1").change(function(){
            readURL1(this);
        });
        $(document).ready(function() {
            $('#btn-example-file-reset1').on('click', function() {     
            $('#cat_image1').val('');
            $('#category-img-tag1').attr('src','../img/upload.jpg')
         });
        });
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#category-img-tag2').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }        
        $("#cat_image2").change(function(){
            readURL2(this);
        });
        $(document).ready(function() {
            $('#btn-example-file-reset2').on('click', function() {     
            $('#cat_image2').val('');
            $('#category-img-tag2').attr('src','../img/upload.jpg')
         });
        });
        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#category-img-tag3').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }        
        $("#cat_image3").change(function(){
            readURL3(this);
        });
        $(document).ready(function() {
            $('#btn-example-file-reset3').on('click', function() {     
            $('#cat_image3').val('');
            $('#category-img-tag3').attr('src','../img/upload.jpg')
         });
        });
</script>
@endsection