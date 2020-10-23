@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Ficha de paciente</h4>
                           
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
                                            <h3 for="validationCustom01">Ficha de paciente de: <span>Cristian Alexis</span></h3>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom01">Lugar de residencia</label>
                                            <input type="text" class="form-control" id="validationCustom01" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom02">Dirección</label>
                                            <input type="text" class="form-control" id="validationCustom02" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom02">Peso</label>
                                            <input type="text" class="form-control" id="validationCustom02" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom01">Talla</label>
                                            <input type="text" class="form-control" id="validationCustom01" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom02">SPO2</label>
                                            <input type="text" class="form-control" id="validationCustom02" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom02">FC</label>
                                            <input type="text" class="form-control" id="validationCustom02" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom02">FR</label>
                                            <input type="text" class="form-control" id="validationCustom02" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom02">TA</label>
                                            <input type="text" class="form-control" id="validationCustom02" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom02">Dextrosis</label>
                                            <input type="text" class="form-control" id="validationCustom02" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <button class="btn btn-danger" type="submit">Cancelar</button>
                                            <button class="btn btn-primary" type="submit">Guardar</button>
                                        </div>
                                    </form>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->
                    <!-- stats + charts -->

                </div>
            </div> <!-- content -->

            

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            2019 &copy; Shreyu. All Rights Reserved. Crafted with <i class='uil uil-heart text-danger font-size-12'></i> by <a href="https://coderthemes.com" target="_blank">Coderthemes</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>
@endsection
