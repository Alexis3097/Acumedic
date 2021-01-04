@extends('Shared.masterAdmin')

@section('content')
<div class="content-page" style="background:url('{{asset('../img/bg-7.jpg')}}'); background-size:cover; background-repeat:no-repeat;">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid" style="position: relative;">
        <div class="row">
            <div class="col-md-6 col-xl-3" style="padding:2%; box-sizing:border-box;">
                    <div class="card" style="background-color:rgba(255,255,255,.7);">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Citas Totales</span>
                                    <h2 class="mb-0">$2189</h2>
                                </div>   
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-6 col-xl-3" style="padding:2%; box-sizing:border-box;">
                    <div class="card" style="background-color:rgba(255,255,255,.7);">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Ordenes</span>
                                    <h2 class="mb-0">$2189</h2>
                                </div>   
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-6 col-xl-3" style="padding:2%; box-sizing:border-box;">
                    <div class="card" style="background-color:rgba(255,255,255,.7);">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Solicitudes de citas</span>
                                    <h2 class="mb-0">$2189</h2>
                                </div>   
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-6 col-xl-3" style="padding:2%; box-sizing:border-box;">
                    <div class="card" style="background-color:rgba(255,255,255,.7);">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Productos de inventario</span>
                                    <h2 class="mb-0">$2189</h2>
                                </div>   
                            </div>
                        </div>
                    </div>
            </div>
        </div>
            <div class="reloj">
                <body onLoad="initClock()">
                <div id="timedate">
                    <a id="mon">January</a>
                    <a id="d">1</a>,
                    <a id="y">0</a><br />
                    <a id="h">12</a> :
                    <a id="m">00</a>:
                    <a id="s">00</a>
                </div>
            </div>
        </div>
    </div> <!-- content -->
</div>
@endsection
