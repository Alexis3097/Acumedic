@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Crear nueva cita</h4>
                           
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
                                            <label for="validationCustom01">Buscar</label>
                                            <input type="text" class="form-control" placeholder="Buscar">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom01">Nombre (s)</label>
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom02">Apellido paterno</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom02">Apellido materno</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom01">Fecha de nacimiento</label>
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom02">Teléfono</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                            <div class="valid-feedback">
                                                Guardado
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="validationCustom02">Tipo de consulta</label>
                                            <select data-plugin="customselect" class="form-control">
                                                <option value="0">Consulta 1</option>
                                                <option value="1">Consulta 2</option>
                                                <option value="2">Consulta 3</option>
                                                <option value="3" disabled>Consulta disabled</option>
                                                <option value="4">Consulta 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="col-lg-2 col-form-label"
                                            for="example-date">Fecha</label>
                                            <input class="form-control" id="example-date" type="date"
                                            name="date">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="col-lg-2 col-form-label"
                                            for="example-date">Hora</label>
                                            <input class="form-control" id="example-time" type="time"
                                            name="time">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <button class="btn btn-danger" type="submit">Cancelar</button>
                                            <button class="btn btn-primary" type="submit">Crear cita</button>
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
