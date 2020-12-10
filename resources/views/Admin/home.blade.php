@extends('Shared.masterAdmin')

@section('content')
<div class="content-page" style="background:url('{{asset('../img/bg-7.jpg')}}'); background-size:cover; background-repeat:no-repeat;">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid" style="position: relative;">
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
