@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row page-title align-items-center">
                <div class="col-sm-4 col-xl-6">
                    <h4 class="mb-1 mt-0">Datos del paciente</h4>
                </div>
            </div>

            <!-- content -->
            <div class="row">
                <!-- columna 01 -->
                <div class="col-lg-4 col-md-4 col-xl-4">
                    <div class="card">
                        <div class="card-body" style="height: 50vh; overflow:scroll; overflow-x:hidden;">
                            <div class="text-center mt-3">
                                <img
                                    style="width: 100px"
                                    src="assets/images/users/avatar-7.jpg"
                                    alt=""
                                    class="rounded-circle"
                                />
                                <h5 class="mt-2 mb-0">Felipe Martínez</h5>
                                <h6 class="text-muted font-weight-normal mt-1 mb-4">
                                    San Francisco, CA
                                </h6>
                            </div>
                            <!-- profile  -->
                            <div class="mt-3 pt-2 border-top">
                                <h4 class="mb-3 font-size-15">Datos del Usuario</h4>
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0 text-muted">
                                        <tbody>
                                        <tr>
                                            <th scope="row">Correo electronico</th>
                                            <td>xyz123@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Télefono</th>
                                            <td>(123) 123 1234</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Cumpleaños</th>
                                            <td>
                                                1975 Boring Lane, San Francisco, California,
                                                United States -94108
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tipo de rol:</th>
                                            <td>Mecanico</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- columna 01 -->
                <!-- columna 02 -->
                <div class="col-xl-4 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="card-body" style="height: 50; overflow: scroll; overflow-x:hidden;">
                            <h5 class="card-title mt-0 mb-0 header-title">
                                Consulta del paciente
                            </h5>

                            <div class="table-responsive mt-4">
                                <table class="table table-hover table-nowrap mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">Titulo</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Hora</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Consulta</td>
                                        <td>02/10/2021</td>
                                        <td>14:40</td>
                                    </tr>
                                    <tr>
                                        <td>Consulta</td>
                                        <td>02/10/2021</td>
                                        <td>14:40</td>
                                    </tr>
                                    <tr>
                                        <td>Consulta</td>
                                        <td>02/10/2021</td>
                                        <td>14:40</td>
                                    </tr>
                                    <tr>
                                        <td>Consulta</td>
                                        <td>02/10/2021</td>
                                        <td>14:40</td>
                                    </tr>
                                    <tr>
                                        <td>Consulta</td>
                                        <td>02/10/2021</td>
                                        <td>14:40</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive-->
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- columna 02 -->
                <!-- columna 03 -->
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="card-body" style="height: 50vh; overflow-x:hidden;">
                            <h5 class="card-title mt-0 mb-0 header-title">
                                Detalles de la información
                            </h5>
                            <form class="needs-validation row" novalidate>
                                <div class="form-group col-md-12">
                                    <input
                                        type="text"
                                        style="margin-top: 3%"
                                        class="form-control"
                                        id="validationCustom01"
                                        placeholder="Información"
                                        required
                                    />
                                </div>
                            </form>
                            <div class="form-group col-md-12">
                                <button class="btn btn-primary" type="submit">
                                    Adjuntar
                                </button>
                                <button class="btn btn-primary" type="submit">
                                    Guardar
                                </button>
                            </div>
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>

                <!-- columna 03 -->
            </div>

            <!-- stats + charts -->
            <div class="row">
                <!-- columna 04 -->
                <div class="col-xl-4 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="card-body p-0" style="height: 50vh; overflow:scroll; overflow-x:hidden;">
                            <h5 class="card-title header-title border-bottom p-3 mb-0">
                                Últimos signos vitales
                            </h5>
                            <!-- stat 1 -->
                            <div class="media px-4 py-1 border-bottom">
                                <div class="media-body">
                                    <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">
                                        13.5 <span>Metros</span>
                                    </h4>
                                    <span class="text-muted">Altura</span>
                                </div>
                            </div>

                            <!-- stat 2 -->
                            <div class="media px-4 py-1 border-bottom">
                                <div class="media-body">
                                    <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">
                                        45 <span>Kilos</span>
                                    </h4>
                                    <span class="text-muted">Peso</span>
                                </div>
                            </div>

                            <!-- stat 3 -->
                            <div class="media px-4 py-1">
                                <div class="media-body">
                                    <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">
                                        0,0 <span>Mbi</span>
                                    </h4>
                                    <span class="text-muted">IMC</span>
                                </div>
                            </div>
                            <div class="media px-4 py-1">
                                <div class="media-body">
                                    <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">
                                        0 <span>°C</span>
                                    </h4>
                                    <span class="text-muted">Temperatura</span>
                                </div>
                            </div>
                            <div class="media px-4 py-1">
                                <div class="media-body">
                                    <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">
                                        0 <span>r/m</span>
                                    </h4>
                                    <span class="text-muted">F.R.</span>
                                </div>
                            </div>
                            <div class="media px-4 py-1">
                                <div class="media-body">
                                    <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">
                                        0 <span>mmHg</span>
                                    </h4>
                                    <span class="text-muted">P.A.</span>
                                </div>
                            </div>
                            <div class="media px-4 py-1">
                                <div class="media-body">
                                    <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">
                                        0 <span>f.c</span>
                                    </h4>
                                    <span class="text-muted">F.C.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- columna 04 -->
                <div class="col-xl-4 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="card-body" style="height: 50vh; overflow:scroll; overflow-x:hidden;">
                            <h5 class="card-title mt-0 mb-0 header-title">
                                Consultas Iniciadas
                            </h5>

                            <div class="table-responsive mt-4">
                                <table class="table table-hover table-nowrap mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">Titulo</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Hora</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Consulta</td>
                                        <td>02/10/2021</td>
                                        <td>14:40</td>
                                    </tr>
                                    <tr>
                                        <td>Consulta</td>
                                        <td>02/10/2021</td>
                                        <td>14:40</td>
                                    </tr>
                                    <tr>
                                        <td>Consulta</td>
                                        <td>02/10/2021</td>
                                        <td>14:40</td>
                                    </tr>
                                    <tr>
                                        <td>Consulta</td>
                                        <td>02/10/2021</td>
                                        <td>14:40</td>
                                    </tr>
                                    <tr>
                                        <td>Consulta</td>
                                        <td>02/10/2021</td>
                                        <td>14:40</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive-->
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>

                <div class="col-xl-4 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="card-body" style="height: 50vh; overflow:scroll; overflow-x:hidden;">
                            <h5 class="card-title mt-0 mb-0 header-title">
                                Consultas Agendadas
                            </h5>
                            <div class="table-responsive mt-4">
                                <table class="table table-hover table-nowrap mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Motivo</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>02/10/2021</td>
                                        <td>Consulta</td>
                                    </tr>
                                    <tr>
                                        <td>02/10/2021</td>
                                        <td>Consulta</td>
                                    </tr>
                                    <tr>
                                        <td>02/10/2021</td>
                                        <td>Consulta</td>
                                    </tr>
                                    <tr>
                                        <td>02/10/2021</td>
                                        <td>Consulta</td>
                                    </tr>
                                    <tr>
                                        <td>02/10/2021</td>
                                        <td>Consulta</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group col-md-12">
                                <button
                                    class="btn btn-primary"
                                    style="width: 100%"
                                    type="submit"
                                >
                                    Nueva consulta
                                </button>
                            </div>
                            <!-- end table-responsive-->
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
            </div>
            <!-- row -->

            <!-- products -->
        </div>
    </div>
    <!-- content -->
</div>
@endsection
