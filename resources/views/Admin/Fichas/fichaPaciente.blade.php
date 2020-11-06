@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Fichas</h4>
                        </div>
                    </div>
                    <!-- products -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <a href="{{ route('ficha.new',['id' => $id])}}" style="margin-right:10px;" class="btn btn-primary btn-sm float-right">
                                        <i class='uil uil-export ml-2'></i> Nuevo paciente
                                    </a>
                                    <h5 class="card-title mt-0 mb-0 header-title">Lista fichas por paciente</h5>

                                    <div class="table-responsive mt-12">
                                        <table class="table table-hover table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Peso</th>
                                                    <th scope="col">Talla</th>
                                                    <th scope="col">SPO2</th>
                                                    <th scope="col">FC</th>
                                                    <th scope="col">FR</th>
                                                    <th scope="col">TA</th>
                                                    <th scope="col">Dextrosis</th>
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <div class="container">
                                                    @foreach($fichas as $ficha)
                                                        <tr>
                                                            <td>{{$ficha->Peso}}</td>
                                                            <td>{{$ficha->Talla}}</td>
                                                            <td>{{$ficha->SPO2}}</td>
                                                            <td>{{$ficha->FC}}</td>
                                                            <td>{{$ficha->FR}}</td>
                                                            <td>{{$ficha->TA}}</td>
                                                            <td>{{$ficha->Dextrosis}}</td>
                                                            <td>
                                                                <a href="{{route('ficha.edit',['IdFicha'=>$id])}}"  class="btn btn-outline-warning"><i class="fa fa-edit"></i></a>
                                                                <button type="button" class="btn btn-outline-danger btn-modal" data="eliminar-paciente"><i class="fa fa-trash"></i></button>
                                                              
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </div>
                                               
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->
                </div>
            </div> <!-- content -->
        </div>
<!-- modal ¿are you sure? -->
<div class="container-body" name="eliminar-paciente">
            <div class="col-md-5 container-quest">
                <div class="title"><p>¿Estar seguro de elimnar <span>este paciente</span>?</p></div>
                <div class="close close-modal"><i class="fa fa-times"></i></div>
                <div class="button">
                <button class="btn btn-primary">Eliminar</button>
                <button class="btn close-modal btn-outline-danger">Cancelar</button>
            </div>
    </div>
</div>
<!-- modal ¿are you sure? -->
@endsection
@section('scriptPacientes')
    <script src="{{asset('js/Admin/modales.js')}}"></script>
@endsection