@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0 col-md-6">Lista de roles</h4>
                        </div>
                    </div>

                    <!-- content -->
                    <!-- row -->
            
                    <!-- products -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <a href="{{ route('permisos.rol.create') }}" style="margin:10px;" class="btn btn-primary btn-sm float-right">
                                        <i class='uil fas fa-plus'></i> Añadir rol
                                    </a>
                                    <h5 class="card-title mt-0 mb-0 header-title">Lista de roles</h5>

                                    <div class="table-responsive mt-12">
                                        <table class="table table-hover table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nombre del rol</th>
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($roles as $rol)
                                                <tr>
                                                    <td>{{$rol->name}}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-success"><i class="fa fa-eye"></i></button>
                                                        <a href="{{route('permisos.rol.edit',['id'=>$rol->id])}}" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a>
                                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                                       
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
@endsection