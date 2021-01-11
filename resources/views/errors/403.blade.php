@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
            <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-8">
                        <div class="text-center">
                            
                            <div>
                                <img src="{{asset('../img/Admin/sin-premisos.png')}}" alt="" class="img-fluid" />
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="mt-3">403 | ACCESO NO AUTORIZADO</h3>
                        <p class="text-muted mb-5">UPPS! No cuenta con los permisos necesarios para acceder a esta página</p>

                        <a href="{{ route('home')}}" class="btn btn-lg btn-primary mt-4">Quiero regresar</a>
                    </div>
                </div>
            </div>
            <!-- end container -->
</div>
        </div> 
</div>
@endsection