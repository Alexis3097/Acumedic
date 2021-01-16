@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0 col-md-6">Lista de permisos</h4>
                        </div>
                    </div>

                    <!-- content -->
                    <!-- row -->
            
                    <!-- products -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-0 mb-0 header-title">Lista de permisos</h5>

                                    <div class="table-responsive mt-12">
                                        <table class="table table-hover table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nombre del permiso</th>
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($permisos as $permiso)
                                                <tr>
                                                     <input type="hidden" value="{{ $permiso->id}}">
                                                    <td>{{$permiso->name}}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-success"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-outline-warning"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-danger delete"><i class="fa fa-trash" data-toggle="modal" data-target="#eliminarPaciente"></i></button>
                                                       
                                                    </td>
                                                </tr>
                                                @endforeach
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
<div class="modal fade" id="eliminarPaciente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Eliminar rol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('permisos.rol.delete')}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="IdModal" id="IdModal">
                    <p>¿Esta seguro que desea eliminar el rol?</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Si, Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scriptPacientes')
    <script src="{{asset('js/Admin/modales.js')}}"></script>
@endsection