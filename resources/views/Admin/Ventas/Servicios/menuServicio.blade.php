@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Servicios</h4>
                           
                        </div>
                    </div>

                    <!-- content -->
                    <!-- row -->
            
                    <!-- products -->
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-item">
                                        <i style="padding:2%;font-size:25em; color:#232323; text-align: center; width: 100%;"class="fas fa-list"></i>
                                        <h1 style="display: inline-block; text-align: center; width: 100%;">Lista de servicios</h1>
                                        <a class="btn btn-block btn--md btn-primary" style="color:#fff;">Ver servicios</a>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-item">
                                        <i style="padding:2%;font-size:25em; color:#232323; text-align: center; width: 100%;"class="fas fa-paperclip"></i>
                                        <h1 style="display: inline-block; text-align: center; width: 100%;">Crear servicio</h1>
                                        <a class="btn btn-block btn--md btn-primary" style="color:#fff;">Crear servicios</a>
                                    </div>
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
