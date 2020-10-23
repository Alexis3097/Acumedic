@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Pacientes</h4>
                           
                        </div>
                        <div class="col-sm-8 col-xl-6">
                            <form class="form-inline float-sm-right mt-3 mt-sm-0">
                                <div class="btn-group">

                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class='uil uil-file-alt mr-1'></i>Descargar
                                        <i class="icon"><span data-feather="chevron-down"></span></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item notify-item">
                                            <i data-feather="mail" class="icon-dual icon-xs mr-2"></i>
                                            <span>Email</span>
                                        </a>
                                        <a href="#" class="dropdown-item notify-item">
                                            <i data-feather="printer" class="icon-dual icon-xs mr-2"></i>
                                            <span>Imprimir</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item notify-item">
                                            <i data-feather="file" class="icon-dual icon-xs mr-2"></i>
                                            <span>Re-Generar</span>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- content -->
                    <!-- row -->
            
                    <!-- products -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <a href="" class="btn btn-primary btn-sm float-right">
                                        <i class='uil uil-export ml-1'></i> Exportar
                                    </a>
                                    <a href="{{ route('nuevoPaciente') }}" style="margin-right:10px;" class="btn btn-primary btn-sm float-right">
                                        <i class='uil uil-export ml-2'></i> Nuevo paciente
                                    </a>
                                    <h5 class="card-title mt-0 mb-0 header-title">Lista de pacientes</h5>

                                    <div class="table-responsive mt-12">
                                        <table class="table table-hover table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Edad</th>
                                                    <th scope="col">Estatus</th>
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Luis Felipe Martínezz Ortega</td>
                                                    <td>22</td>
                                                    <td>961-359-1414</td>
                                                    
                                                    <td><button type="button" class="btn btn-outline-success"><i class="fa fa-trash"></i></button>
                                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-edit"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>Luis Felipe Martínezz Ortega</td>
                                                    <td>22</td>
                                                    <td>961-359-1414</td>
                                                    
                                                    <td><button type="button" class="btn btn-outline-success"><i class="fa fa-trash"></i></button>
                                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-edit"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>Luis Felipe Martínezz Ortega</td>
                                                    <td>22</td>
                                                    <td>961-359-1414</td>
                                                    
                                                    <td><button type="button" class="btn btn-outline-success"><i class="fa fa-trash"></i></button>
                                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-edit"></i></button></td>
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