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

                                    <a  href="{{route('servicios.list')}}" class="btn btn-outline-danger">
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
                                    <form class="needs-validation row" novalidate>
                                        <div class="form-group col-md-12">
                                            <label for="Nombre">Nombre del servicio</label>
                                            <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre del servicio" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="DescripcionCorta">Descripción corta (Máximo 200 caracteres)</label>
                                            <input type="text" class="form-control"  name="DescripcionCorta" id="DescripcionCorta" maxlength="200" placeholder="Descripcióncorta" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="DescripcionLarga">Descripción larga del servicio</label>
                                            <div>
                                                <textarea name="DescripcionLarga" id="DescripcionLarga" required class="form-control" style="height: 55vh;"></textarea>
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
                                            <input id="cat_image" name="Logo" type="file" accept="image/*"/>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="TextoLogo" style="text-align: left;">Texto alternado</label>
                                            <div>
                                                <input type="text" class="form-control" name="TextoLogo" id="TextoLogo" placeholder="Texto alternado de tu imagen" required>
                                            </div>
                                        </div>
                                        <h4>Imagen de tu servicio</h4>
                                        <img id="category-img-tag1" src="{{asset('../img/upload.jpg')}}" alt=""
                                            style="width: 150px;" />
                                        <h5 class="mt-2 mb-0">Asi se ve la imagen de tu servicio</h5>
                                        <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu logo de servicio
                                        </h6>
                                        <div class="form-group col-md-12">
                                            <input id="cat_image1" name="Imagen" type="file" accept="image/*"/>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="TextoImagen" style="text-align: left;">Texto alternado</label>
                                            <div>
                                                <input type="text" class="form-control" name="TextoImagen" id="TextoImagen" placeholder="Texto alternado de tu imagen" required>
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