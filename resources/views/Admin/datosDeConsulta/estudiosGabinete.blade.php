@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-9 col-xl-9 col-md-9">
                            <h2 class="mb-1 mt-0"><i style="font-size: 1.2em; color:#232323;" class="icon-dual fas fa-file-prescription"></i> Estudios de gabinete</span></h2>
                        </div>
                        <div class="col-sm-3 col-xl-3 col-md-3">
                                    <a href="{{route('consulta.pacientePerfil',['IdPaciente' => $IdPaciente])}}" class="btn btn-outline-primary">
                                        <i class='fas fa-arrow-left'></i> Regresar
                                    </a>
                                    <button type="button" data-toggle="modal" data-target="#bs-example-modal-lg" class="btn btn-outline-primary" id="nuevaFoto">
                                        <i class='fas fa-plus'></i> Nueva foto
                                    </button>
                        </div>
                    </div>
                    <!-- content -->
                    <!-- row -->

                    <!-- products -->
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                  <!-- Grid row -->
                                    <div class="row">
                                    @foreach($estudiosGabinete as $estudioGabinete)
                                          <!-- Esta es la imagen de galeria con su modal -->
                                      <div class="col-lg-4 col-md-12 mb-4">
                                        <!--Modal: Name-->
                                        <div class="modal fade" id="modal{{$estudioGabinete->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <!--Content-->
                                            <div class="modal-content">
                                              <!--Body-->
                                              <div class="modal-body mb-0 p-0">
                                              <i class="fa fa-times" data-dismiss="modal" style="font-size:1em; position: absolute; z-index: 1; color: #fff; top: 10px; right: 15px;"></i>
                                                  <div class="background-estudios embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                    <img class="background-estudios-img embed-responsive-item" src="{{$estudioGabinete->Url}}" allowfullscreen>
                                                  </div>
                                              </div>
                                             <!--Footer-->
                                              <div style="padding:2%" class="justify-content-center row">
                                              <div class="col-md-12 col-lg-12 col-xs-12">
                                                <h4>{{$estudioGabinete->Nombre}}</h4>
                                              </div>
                                              <div class="col-md-12 col-lg-12 col-xs-12 IdEstudios">
                                                <input type="hidden" value="{{$estudioGabinete->id}}">
                                                <p class="desc">{{$estudioGabinete->Descripcion}}</p>
                                                <button class="btn delete"> <i style="margin-right:2px; color:#ff5c75" name="delete_modal" data-toggle="modal" data-target="#eliminarFoto" class="fas fa-trash"></i></button>
                                                <i class="far fa-clock"></i>:<p style="display:inline-block" class="desc">{{$estudioGabinete->created_at}}</p>
                                              </div>
                                              </div>
                                            </div>
                                            <!--/.Content-->
                                          </div>
                                        </div>
                                        <!--Modal: Name-->
                                        <a><img class="img-fluid img-estudios z-depth-1" src="{{$estudioGabinete->Url}}" alt="foto" data-toggle="modal" data-target="#modal{{$estudioGabinete->id}}"></a>
                                      </div>
                                  <!-- Esta es la imagen de galeria con su modal -->
                                  @endforeach
                                </div>
                                <!-- Grid row -->
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- stats + charts -->

                </div>
        </div>
</div><!-- content -->
<a href="{{route('consulta.estudioGabinete',['IdPaciente'=>$IdPaciente])}}" id="sintomasList"></a>
<!-- modal nueva foto -->
<div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="myLargeModalLabel">Agrega una nueva foto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <form >
      @csrf
      <input type="hidden" name="IdPaciente" value="{{$IdPaciente}}" id="IdPaciente">
        <div class="modal-body">
            <div class="col">
              <div class="form-group row">
                <label class="col-lg-2 col-form-label" for="Url">Sube tu archivo</label>
                <div class="col-lg-10">
                  <input type="file" class="form-control" accept="image/*" name="Url" id="Url">
                  <div id="errorUrl" style="color:red;"></div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-2 col-form-label" for="Nombre">Nombre de tu foto</label>
                <div class="col-lg-10">
                <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre de foto"  required>
                <div id="errorNombre" style="color:red;"></div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-2 col-form-label" for="Descripcion">Descripción</label>
                  <div class="col-md-10">
                    <textarea required class="form-control" name="Descripcion" id="Descripcion"></textarea>
                    <div id="errorDescripcion" style="color:red;"></div>
                  </div>
              </div>
              <div class="form-group col-md-12">
                <a href="#" class="btn btn-danger"  data-dismiss="modal" >Cancelar</a>
                <button class="btn btn-primary enviar" id="ButtonEnviar"type="button">Subir foto</button>
              </div>
            </div>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- modal nueva foto -->
<!-- modal eliminar -->
<div class="modal fade" id="eliminarFoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Eliminar imagen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('consulta.eliminarFoto') }}" method="post">
                @csrf
                    <input type="hidden" name="IdModal" id="IdModal">
                    <input type="hidden" name="IdPaciente" value="{{$IdPaciente}}">
                    <p>¿Está seguro que desea eliminar la foto?</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Si, eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal eliminar -->
@endsection
@section('scriptEliminarEstudiosGabinete')
    <script src="{{asset('js/Admin/deleteEstudiosGabinete.js')}}"></script>
    <script src="{{asset('js/Admin/subirFotoSintomasSubjetivos.js')}}"></script>
@endsection
