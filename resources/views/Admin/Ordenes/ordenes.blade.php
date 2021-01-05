@extends('Shared.masterAdmin')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row page-title align-items-center">
                <div class="col-sm-4 col-xl-6">
                    <h4 class="mb-1 mt-0">Ordenes de productos</h4>       
                </div>
            </div>
                <!-- content -->
                <!-- row -->            
                <!-- products -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mt-0 mb-0 header-title">Lista de ordenes</h5>
                                <div class="table-responsive mt-12">
                                <table class="table table-hover table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nombre </th>
                                            <th scope="col">Número</th>
                                            <th scope="col">Ciudad</th>
                                            <th scope="col">Correo electrónico</th>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Luis Felipe Martínezz Ortega</td>
                                            <td>9613591414</td>
                                            <td>Monterrey</td>
                                            <td>felipemo@gmail.com</td>
                                            <td>Riopan el chido uwu</td>
                                            <td>1</td>
                                            <td><span>$ </span>22000.00</td>
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
</div>
@endsection