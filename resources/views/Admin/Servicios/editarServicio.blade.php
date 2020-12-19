@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Crear servicio</h4>
                           
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
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation row" novalidate>
                                        <div class="form-group col-md-12">
                                            <label for="validationCustom01">Nombre del servicio</label>
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="validationCustom02">Descripción corta (Máximo 200 caracteres)</label>
                                            <input type="text" class="form-control" id="validationCustom02" maxlength="200" placeholder="Last name" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="validationCustom02">Descripción larga del servicio</label>
                                            <div>
                                                <textarea required class="form-control" style="height: 55vh;"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button class="btn btn-danger" type="submit">Cancelar</button>
                                            <button class="btn btn-primary" type="submit">Guardar servicio</button>
                                        </div>
                                    </form>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body pb-0">
                                <div class=" mt-3" style="padding-bottom:4%" >
                                    <h4>Logo de servicio</h4>
                                        <img id="category-img-tag" src="{{asset('../img/upload.jpg')}}" alt=""
                                            style="width: 150px;" />
                                        <h5 class="mt-2 mb-0">Asi se ve tu logo de servicio</h5>
                                        <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu logo de servicio
                                        </h6>
                                        <div class="form-group col-md-12">
                                            <input id="cat_image" name="Foto" type="file" accept="image/*"/>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="validationCustom02" style="text-align: left;">Texto alternado</label>
                                            <div>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Texto alternado de tu imagen" required>
                                            </div>
                                        </div>
                                        <h4>Imagen de tu servicio</h4>
                                        <img id="category-img-tag1" src="{{asset('../img/upload.jpg')}}" alt=""
                                            style="width: 150px;" />
                                        <h5 class="mt-2 mb-0">Asi se ve la imagen de tu servicio</h5>
                                        <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu logo de servicio
                                        </h6>
                                        <div class="form-group col-md-12">
                                            <input id="cat_image1" name="Foto1" type="file" accept="image/*"/>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="validationCustom02" style="text-align: left;">Texto alternado</label>
                                            <div>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Texto alternado de tu imagen" required>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- stats + charts -->

                </div>
            </div> <!-- content -->

        </div>
@endsection
@section('scriptServicios')
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
        <script>
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
    </script>
@endsection