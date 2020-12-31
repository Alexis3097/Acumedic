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
                            <h4 class="mb-1 mt-0">Editar producto</h4>
                           
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
                                    <form action="{{route('productos.update',['id'=>$producto->id])}}" method="post" class="needs-validation row" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                        <div class="form-group col-md-12">
                                            <label for="Nombre">Nombre del producto</label>
                                            <input type="text" class="form-control @error('Nombre') is-invalid @enderror" name="Nombre" id="Nombre" placeholder="Tú nombre del producto"  value="{{old('Nombre', $producto->Nombre)}}" required>
                                            @error('Nombre')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4 mb-3">
                                            <label for="PrecioCompra">Precio de compra</label>
                                            <input class="form-control @error('PrecioCompra') is-invalid @enderror"  name="PrecioCompra" id="PrecioCompra" value="{{old('PrecioCompra', $producto->PrecioCompra)}}" required placeholder="0.00">
                                            @error('PrecioCompra')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4 mb-3">
                                            <label for="PrecioPublico">Precio publico</label>
                                            <input class="form-control @error('PrecioPublico') is-invalid @enderror"  value="{{old('PrecioPublico', $producto->PrecioPublico)}}" name="PrecioPublico" id="PrecioPublico" required placeholder="0.00">
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
                                                <option value="0" @if($producto->Estrellas == 0) selected='selected' @endif>0</option>
                                                <option value="1" @if($producto->Estrellas == 1) selected='selected' @endif>1</option>
                                                <option value="2" @if($producto->Estrellas == 2) selected='selected' @endif>2</option>
                                                <option value="3" @if($producto->Estrellas == 3) selected='selected' @endif>3</option>
                                                <option value="4" @if($producto->Estrellas == 4) selected='selected' @endif>4</option>
                                                <option value="5" @if($producto->Estrellas == 5) selected='selected' @endif>5</option>
                                            </select>
                                            
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="CodigoBarra">Código de barras</label>
                                            <div class="checkbox-1">
                                                <input type="checkbox" name="check" value="1">
                                                <label style="display:inline-block;">Generar automaticamente</label>
                                            </div>
                                            <input type="text" class="form-control @error('CodigoBarra') is-invalid @enderror"  value="{{old('CodigoBarra', $producto->CodigoBarra)}}" name="CodigoBarra" id="CodigoBarra" placeholder="Escribe el código">
                                            @error('CodigoBarra')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="DescripcionCorta">Descripción corta (Máximo 217 caracteres)</label>
                                            <input type="text" class="form-control @error('DescripcionCorta') is-invalid @enderror"  value="{{old('DescripcionCorta', $producto->DescripcionCorta)}}" name="DescripcionCorta" id="DescripcionCorta" maxlength="217" placeholder="Escribe tu descripción" required>
                                            @error('DescripcionCorta')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="DescripcionLarga">Descripción larga del producto</label>
                                            <div>
                                                <textarea class="form-control @error('DescripcionLarga') is-invalid @enderror"  name="DescripcionLarga" id="DescripcionLarga" required> {{old('DescripcionLarga', $producto->DescripcionLarga)}}</textarea>
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
                                            <img id="category-img-tag" 
                                                src="@if(isset($producto->fotoProductos[0])) {{asset('../uploads/productos/'.$producto->fotoProductos[0]->Nombre)}} @else {{asset('../img/upload.jpg')}} @endif" 
                                                alt=""style="width: 150px;" />

                                                <input type="hidden" name="idFoto1" 
                                                    value="@if(isset($producto->fotoProductos[0])) {{$producto->fotoProductos[0]->id}}  @else{{0}}@endif"
                                                >
                                                @if(!isset($producto->fotoProductos[0]))
                                                    <input type="hidden" name="hayFoto1" value="1">
                                                @endif
                                            <h5 class="mt-2 mb-0">Asi se ve tu Imagen de producto</h5>
                                            <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu Imagen de producto</h6>
                                            <div class="form-group col-md-12">
                                                <input id="cat_image"  name="Foto1" style="width:100%;" class="btn btn-info" type="file" accept="image/*"/>
                                                @if($errors->has('Foto1'))
                                                    <span class="help-block text-danger">
                                                        <strong>{{$errors->first('Foto1')}}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button id="btn-example-file-reset" style="width:49%;" class="btn btn-info" class="btn btn-info" type="button">Reemplazar</button>
                                                <button id="btn-example-file-reset" style="width:49%;" class="btn btn-info" name="delete_modal" data-toggle="modal" data-target="#borrarFoto" class="btn btn-info" type="button">Borrar definitivamente</button>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="Titulo1" style="text-align: left;">Titulo de la imagen</label>
                                                <div>
                                                    <input type="text" class="form-control @error('Titulo1') is-invalid @enderror" 
                                                    value="@if(isset($producto->fotoProductos[0])){{old('Titulo1', $producto->fotoProductos[0]->Titulo)}}@else{{old('Titulo1')}}@endif"
                                                    name="Titulo1" id="Titulo1" placeholder="Titulo">
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
                                                    <input type="text" class="form-control @error('TextoAlterno1') is-invalid @enderror" 
                                                    value="@if(isset($producto->fotoProductos[0])){{old('TextoAlterno1', $producto->fotoProductos[0]->TextoAlterno)}}@else{{old('TextoAlterno1')}}@endif"
                                                    name="TextoAlterno1" id="TextoAlterno1" placeholder="Texto alterno de imagen" >
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
                                            <img id="category-img-tag1" 
                                                src="@if(isset($producto->fotoProductos[1])) {{asset('../uploads/productos/'.$producto->fotoProductos[1]->Nombre)}} @else {{asset('../img/upload.jpg')}} @endif" 
                                                alt=""style="width: 150px;" />

                                                <input type="hidden" name="idFoto2" 
                                                    value="@if(isset($producto->fotoProductos[1])) {{$producto->fotoProductos[1]->id}}  @else{{0}}@endif"
                                                >
                                                @if(!isset($producto->fotoProductos[1]))
                                                    <input type="hidden" name="hayFoto2" value="1">
                                                @endif

                                            <h5 class="mt-2 mb-0">Asi se ve tu Imagen de producto</h5>
                                            <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu imagen de producto</h6>
                                            <div class="form-group col-md-12">
                                                <input id="cat_image1" name="Foto2" style="width:100%;" class="btn btn-info" type="file" accept="image/*" class="@error('Foto2') is-invalid @enderror"/>
                                                @error('Foto2')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button id="btn-example-file-reset1" style="width:49%;" class="btn btn-info" class="btn btn-info" type="button">Reemplazar</button>
                                                <button id="btn-example-file-reset1" style="width:49%;" class="btn btn-info" name="delete_modal" data-toggle="modal" data-target="#borrarFoto" class="btn btn-info" type="button">Borrar definitivamente</button>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="Titulo2" style="text-align: left;">Titulo de la imagen</label>
                                                <div>
                                                    <input type="text" 
                                                    value="@if(isset($producto->fotoProductos[1])){{old('Titulo2', $producto->fotoProductos[1]->Titulo)}}@else{{old('Titulo2')}}@endif" 
                                                    class="form-control @error('Titulo2') is-invalid @enderror" name="Titulo2" id="Titulo2" placeholder="Titulo">
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
                                                    <input type="text" 
                                                    value="@if(isset($producto->fotoProductos[1])){{old('TextoAlterno2', $producto->fotoProductos[1]->TextoAlterno)}}@else{{old('TextoAlterno2')}}@endif" 
                                                    class="form-control @error('TextoAlterno2') is-invalid @enderror" name="TextoAlterno2" id="TextoAlterno2" placeholder="Texto alterno de imagen">
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
                                            <img id="category-img-tag2" 
                                                src="@if(isset($producto->fotoProductos[2])) {{asset('../uploads/productos/'.$producto->fotoProductos[2]->Nombre)}} @else {{asset('../img/upload.jpg')}} @endif" 
                                                alt=""style="width: 150px;" />

                                                <input type="hidden" name="idFoto3" 
                                                    value="@if(isset($producto->fotoProductos[2])) {{$producto->fotoProductos[2]->id}}  @else{{0}}@endif"
                                                >

                                                @if(!isset($producto->fotoProductos[2]))
                                                    <input type="hidden" name="hayFoto3" value="1">
                                                @endif

                                            <h5 class="mt-2 mb-0">Asi se ve tu Imagen de producto</h5>
                                            <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu imagen de producto</h6>
                                            <div class="form-group col-md-12">
                                                <input id="cat_image2" name="Foto3" style="width:100%;" class="btn btn-info"  type="file" accept="image/*"class="@error('Foto3') is-invalid @enderror" />
                                                @error('Foto3')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button id="btn-example-file-reset2" style="width:49%;" class="btn btn-info" class="btn btn-info" type="button">Reemplazar</button>
                                                <button id="btn-example-file-reset2" style="width:49%;" class="btn btn-info" name="delete_modal" data-toggle="modal" data-target="#borrarFoto" class="btn btn-info" type="button">Borrar definitivamente</button>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="Titulo3" style="text-align: left;">Titulo de la imagen</label>
                                                <div>
                                                    <input type="text" 
                                                    value="@if(isset($producto->fotoProductos[2])){{old('Titulo3', $producto->fotoProductos[2]->Titulo)}}@else{{old('Titulo3')}}@endif"  
                                                    class="form-control @error('Titulo3') is-invalid @enderror" name="Titulo3" id="Titulo3" placeholder="Titulo">
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
                                                    <input type="text" value="@if(isset($producto->fotoProductos[2])){{old('TextoAlterno3', $producto->fotoProductos[2]->TextoAlterno)}}@else{{old('TextoAlterno3')}}@endif" 
                                                    class="form-control @error('TextoAlterno3') is-invalid @enderror" name="TextoAlterno3" id="TextoAlterno3" placeholder="Texto alterno de imagen">
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
                                                <img id="category-img-tag3" 
                                                src="@if(isset($producto->fotoProductos[3])) {{asset('../uploads/productos/'.$producto->fotoProductos[3]->Nombre)}} @else {{asset('../img/upload.jpg')}} @endif" 
                                                alt=""style="width: 150px;" />

                                                <input type="hidden" name="idFoto4" 
                                                    value="@if(isset($producto->fotoProductos[3])) {{$producto->fotoProductos[3]->id}}  @else{{0}}@endif"
                                                >

                                                @if(!isset($producto->fotoProductos[3]))
                                                    <input type="hidden" name="hayFoto4" value="1">
                                                @endif

                                            <h5 class="mt-2 mb-0">Asi se ve tu Imagen de producto</h5>
                                            <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu imagen de producto</h6>
                                            <div class="form-group col-md-12">
                                                <input id="cat_image3" name="Foto4" style="width:100%;" class="btn btn-info" type="file" accept="image/*" class="@error('Foto4') is-invalid @enderror"/>
                                                @error('Foto4')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            <div class="form-group col-md-12">
                                                <button id="btn-example-file-reset3" style="width:49%;" class="btn btn-info" class="btn btn-info" type="button">Reemplazar</button>
                                                <button id="btn-example-file-reset3" style="width:49%;" class="btn btn-info" name="delete_modal" data-toggle="modal" data-target="#borrarFoto" class="btn btn-info" type="button">Borrar definitivamente</button>
                                            </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="Titulo4" style="text-align: left;">Titulo de la imagen</label>
                                                <div>
                                                    <input type="text" 
                                                    value="@if(isset($producto->fotoProductos[3])){{old('Titulo4', $producto->fotoProductos[3]->Titulo)}}@else{{old('Titulo4')}}@endif" 
                                                    class="form-control @error('Titulo4') is-invalid @enderror" name="Titulo4" id="Titulo4" placeholder="Titulo">
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
                                                    <input type="text"  value="@if(isset($producto->fotoProductos[3])){{old('TextoAlterno4', $producto->fotoProductos[3]->TextoAlterno)}}@else{{old('TextoAlterno4')}}@endif" 
                                                    class="form-control @error('TextoAlterno4') is-invalid @enderror" name="TextoAlterno4" id="TextoAlterno4" placeholder="Texto alterno de imagen">
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
<div class="modal fade" id="borrarFoto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Eliminar definitivamente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                    <div class="modal-body">
                    <p>¿Esta seguro que desea eliminar esta imagen definitivamente?</p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Si, Eliminar</button>
                    </div>
                    </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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