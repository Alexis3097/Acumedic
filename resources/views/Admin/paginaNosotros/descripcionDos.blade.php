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

                                    <a href="{{route('sobreNosotros')}}"  class="btn btn-outline-danger">
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
                                    <form class="needs-validation row">
                                        <div class="form-group col-md-12">
                                            <label for="validationCustom01">Titulo</label>
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="validationCustom02">Descripción </label>
                                            <div>
                                                <textarea required class="form-control" style="height: 25vh;"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <a href="{{route('sobreNosotros')}}" class="btn btn-danger">Cancelar</a>
                                            <button class="btn btn-primary" type="submit">Guardar</button>
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
                                        <img id="category-img-tag" src="../Acumedic-Admin/assets/images/upload.jpg" alt=""
                                            style="width: 150px;" />
                                        <h5 class="mt-2 mb-0">Asi se ve tu imagen</h5>
                                        <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu imagen
                                        </h6>
                                        <div class="form-group col-md-12">
                                            <input id="cat_image" name="Foto" type="file" accept="image/*"/>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="validationCustom02" style="text-align: left;">Titulo:</label>
                                            <div>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="validationCustom02" style="text-align: left;">Texto alternado:</label>
                                            <div>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" required>
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
@section('scriptDesc2')
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