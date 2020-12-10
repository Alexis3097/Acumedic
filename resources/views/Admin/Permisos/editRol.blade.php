@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row page-title align-items-center">
                            <div class="col-sm-4 col-xl-6">
                                <h4 class="mb-1 mt-0">Roles</h4>
                            </div>
                        </div>

                        <!-- content -->

                        <!-- widgets -->
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="card">
                                    <div class="card-body pt-2">
                                        <div class="table-responsive mt-12 custom-control custom-checkbox">
                                            <div class="form-group col-md-9">
                                                <label for="validationCustom01">Nombre del permiso</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Nombre del rol" required>
                                            </div>
                                            <table class="table table-hover table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Nombre de permisos</th>
                                                        <th scope="col">Editar</th>
                                                        <th scope="col">Crear</th>
                                                        <th scope="col">Ver</th>
                                                        <th scope="col">Listar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- aqui va el forechazo -->
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="custom-control-input" id="task3">
                                                            <label class="custom-control-label" for="task3">
                                                                Agendar citas
                                                            </label></td>
                                                        <td><input type="checkbox"  id="task3"></td>
                                                        <td><input type="checkbox"  id="task3"></td>
                                                        <td><input type="checkbox"  id="task3"></td>
                                                        <td><input type="checkbox"  id="task3"></td>
                                                    </tr>
                                                    <!-- aqui va el forechazo -->
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="custom-control-input" id="task4">
                                                            <label class="custom-control-label" for="task4">
                                                                Agendar citas
                                                            </label></td>
                                                        <td><input type="checkbox"  id="task3"></td>
                                                        <td><input type="checkbox"  id="task3"></td>
                                                        <td><input type="checkbox"  id="task3"></td>
                                                        <td><input type="checkbox"  id="task3"></td>
                                                    </tr>
                                                    <!-- aqui va el forechazo -->
                                                </tbody>
                                            </table>
                                            <div class="form-group col-md-12" style="padding-top: 2%;">
                                                <button class="btn btn-danger" type="submit">Cancelar</button>
                                                <button class="btn btn-primary" type="submit">Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

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