@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Datos del paciente en turno: <span>Juanito Alcachofa</span></h4>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <a href="" class="btn btn-primary btn-sm float-right">
                                        <i class='uil uil-export ml-1'></i> Exportar
                                    </a>
                                    <a href="" style="margin-right:10px;" class="btn btn-primary btn-sm float-right">
                                        <i class='uil uil-export ml-2'></i> Nuevo paciente
                                    </a>
                                    <h5 class="card-title mt-0 mb-0 header-title">Lista de pacientes</h5>

                                    <div class="table-responsive mt-12">
                                        <table class="table table-hover table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Motivo</th>
                                                    <th scope="col">Fecha</th>
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Pues sucedio wey xd</td>
                                                    <td>22/10/2020</td>
                                                    <td><button type="button" class="btn btn-outline-success"><i class="fa fa-trash"></i></button>
                                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-eye"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>Pues sucedio wey xd</td>
                                                    <td>22/10/2020</td>
                                                    <td><button type="button" class="btn btn-outline-success"><i class="fa fa-trash"></i></button>
                                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-eye"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>Pues sucedio wey xd</td>
                                                    <td>22/10/2020</td>
                                                    <td><button type="button" class="btn btn-outline-success"><i class="fa fa-trash"></i></button>
                                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-eye"></i></button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->
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