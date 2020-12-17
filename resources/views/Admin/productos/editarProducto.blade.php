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
                            <form class="form-inline float-sm-right mt-3 mt-sm-0">
                                <div class="btn-group mb-sm-0 mr-2">

                                    <button type="button" class="btn btn-outline-danger">
                                        <i class='fas fa-times'></i> Cancelar
                                    </button>
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
                                <div class="card-body">
                                    <form class="needs-validation row" novalidate>
                                        <div class="form-group col-md-12">
                                            <label for="validationCustom01">Nombre del producto</label>
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="Tú nombre del producto" required>
                                        </div>
                                        <div class="form-group col-md-4 mb-3">
                                            <label>Precio de compra</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group col-md-4 mb-3">
                                            <label>Precio publico</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group col-md-4 mb-3">
                                            <label>Precio decimal</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <label>Porcentaje de descuento</label>
                                            <input data-toggle="touchspin" value="18.20" type="text" data-step="0.1" data-decimals="2" data-bts-postfix="%">
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <label>Estrellas de calidad</label>
                                            <select class="custom-select mb-2">
                                                <option selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="validationCustom01">Código de barras</label>
                                            <div class="checkbox-1">
                                            <label style="display:inline-block;">Generar automaticamente</label>
                                            <input type="checkbox">
                                            </div>
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="Escribe el código" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="validationCustom02">Descripción corta (Máximo 217 caracteres)</label>
                                            <input type="text" class="form-control" id="validationCustom02" maxlength="217" placeholder="Escribe tu descripción" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="validationCustom02">Descripción larga del producto</label>
                                            <div>
                                                <textarea required class="form-control"></textarea>
                                            </div>
                                        </div>
                                   

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class=" mt-3" style="padding-bottom:4%;" >
                                        <div class="imagen-producto" style="width:19%; display:inline-block;">
                                        <h4>Imagen de producto</h4>
                                        <img id="category-img-tag" src="{{asset('../img/upload.jpg')}}" alt=""
                                            style="width: 150px;" />
                                        <h5 class="mt-2 mb-0">Asi se ve tu Imagen de producto</h5>
                                        <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu Imagen de producto
                                        </h6>
                                        <div class="form-group col-md-12">
                                            <input id="cat_image" name="Foto" type="file" accept="image/*"/>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="validationCustom02" style="text-align: left;">Titulo de la imagen</label>
                                            <div>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Titulo" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="validationCustom02" style="text-align: left;">Texto alternado</label>
                                            <div>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Texto alterno de imagen" required>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="imagen-producto" style="width:19%; display:inline-block;">
                                            <h4>Imagen de producto</h4>
                                            <img id="category-img-tag1" src="{{asset('../img/upload.jpg')}}" alt=""
                                                style="width: 150px;" />
                                            <h5 class="mt-2 mb-0">Asi se ve tu Imagen de producto</h5>
                                            <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu imagen de producto
                                            </h6>
                                            <div class="form-group col-md-12">
                                                <input id="cat_image1" name="Foto" type="file" accept="image/*"/>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="validationCustom02" style="text-align: left;">Titulo de la imagen</label>
                                                <div>
                                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Titulo" required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="validationCustom02" style="text-align: left;">Texto alternado</label>
                                                <div>
                                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Texto alterno de imagen" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="imagen-producto" style="width:19%; display:inline-block;">
                                                <h4>Imagen de producto</h4>
                                                <img id="category-img-tag2" src="{{asset('../img/upload.jpg')}}" alt=""
                                                    style="width: 150px;" />
                                                <h5 class="mt-2 mb-0">Asi se ve tu Imagen de producto</h5>
                                                <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu imagen de producto
                                                </h6>
                                                <div class="form-group col-md-12">
                                                    <input id="cat_image2" name="Foto" type="file" accept="image/*"/>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="validationCustom02" style="text-align: left;">Titulo de la imagen</label>
                                                    <div>
                                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Titulo" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="validationCustom02" style="text-align: left;">Texto alternado</label>
                                                    <div>
                                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Texto alterno de imagen" required>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="imagen-producto" style="width:19%; display:inline-block;">
                                                    <h4>Imagen de producto</h4>
                                                    <img id="category-img-tag3" src="{{asset('../img/upload.jpg')}}" alt=""
                                                        style="width: 150px;" />
                                                    <h5 class="mt-2 mb-0">Asi se ve tu Imagen de producto</h5>
                                                    <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu imagen de producto
                                                    </h6>
                                                    <div class="form-group col-md-12">
                                                        <input id="cat_image3" name="Foto" type="file" accept="image/*"/>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="validationCustom02" style="text-align: left;">Titulo de la imagen</label>
                                                        <div>
                                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Titulo" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="validationCustom02" style="text-align: left;">Texto alternado</label>
                                                        <div>
                                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Texto alterno de imagen" required>
                                                        </div>
                                                    </div>
                                        </div>
                                        <div class="imagen-producto" style="width:19%; display:inline-block;">
                                                        <h4>Imagen de producto</h4>
                                                        <img id="category-img-tag4" src="{{asset('../img/upload.jpg')}}" alt=""
                                                            style="width: 150px;" />
                                                        <h5 class="mt-2 mb-0">Asi se ve tu Imagen de producto</h5>
                                                        <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu imagen de producto
                                                        </h6>
                                                        <div class="form-group col-md-12">
                                                            <input id="cat_image4" name="Foto" type="file" accept="image/*"/>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="validationCustom02" style="text-align: left;">Titulo de la imagen</label>
                                                            <div>
                                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Titulo" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="validationCustom02" style="text-align: left;">Texto alternado</label>
                                                            <div>
                                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Texto alterno de imagen" required>
                                                            </div>
                                                        </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button class="btn btn-danger" type="submit">Cancelar</button>
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
        function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#category-img-tag4').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }
        
        $("#cat_image4").change(function(){
            readURL4(this);
        });
</script>
@endsection