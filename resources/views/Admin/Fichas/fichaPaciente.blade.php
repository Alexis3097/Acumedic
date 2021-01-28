@extends('Shared.masterAdmin')

@section('content')
@can('ListadoFicha')
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
                                        <i class='fa fa-plus'></i> Nueva ficha
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
                                                            <input type="hidden"id="IdCita" value="{{ $ficha->id}}">
                                                            <td>{{$ficha->Peso}}</td>
                                                            <td>{{$ficha->Talla}}</td>
                                                            <td>{{$ficha->SPO2}}</td>
                                                            <td>{{$ficha->FC}}</td>
                                                            <td>{{$ficha->FR}}</td>
                                                            <td>{{$ficha->TA}}</td>
                                                            <td>{{$ficha->Dextrosis}}</td>
                                                            <td>
                                                                @can('EditarFicha')
                                                                <a href="{{route('ficha.edit',['IdFicha'=>$ficha->id])}}"  class="btn btn-outline-warning" data-toggle="tooltip" data-placement="left" title="Editar ficha"><i class="fa fa-edit"></i></a>
                                                                @endcan
                                                                @can('EliminarFicha')
                                                                <span data-toggle="tooltip" data-placement="left" title="Eliminar ficha"><button type="button" class="btn btn-outline-danger delete" data-toggle="modal" data-target="#eliminarFicha">
                                                                    <i class="fa fa-trash"></i>
                                                                </button></span> 
                                                                @endcan
                                                              
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
@endcan
<!-- modal ¿are you sure? -->
<div class="modal fade" id="eliminarFicha" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Eliminar ficha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('ficha.delete')}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="IdModal" id="IdModal">
                    <input type="hidden" name="IdPaciente" id="IdPaciente">
                    <p>¿Está seguro que desea eliminar esta ficha?</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Si, eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scriptPacientes')
    <script src="{{asset('js/Admin/modales.js')}}"></script>
@endsection