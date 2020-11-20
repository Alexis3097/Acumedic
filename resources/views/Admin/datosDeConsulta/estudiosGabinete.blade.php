@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-6 col-xl-6 col-md-6">
                            <h2 class="mb-1 mt-0"><i style="font-size: 1.2em; color:#232323;" class="icon-dual fas fa-file-prescription"></i> Estudios de gabinete</span></h2>
                        </div>
                        <div class="col-sm-6 col-xl-6 col-md-6">
                                    <a href="{{route('consulta.paciente',['IdPaciente' => $IdPaciente])}}" class="btn btn-outline-primary">
                                        <i class='fas fa-arrow-left'></i> Regresar
                                    </a>
                                    <button type="button" data-toggle="modal" data-target="#bs-example-modal-lg" class="btn btn-outline-primary">
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
                                                    <img class="background-estudios-img embed-responsive-item" src="{{asset('../uploads/'.$estudioGabinete->Url)}}" allowfullscreen>
                                                  </div>
                                              </div>
                                             <!--Footer-->
                                              <div style="padding:2%" class="justify-content-center row">
                                              <div class="col-md-12 col-lg-12 col-xs-12">
                                                <h4>{{$estudioGabinete->Nombre}}</h4>
                                              </div>
                                              <div class="col-md-12 col-lg-12 col-xs-12">
                                                <p class="desc">{{$estudioGabinete->Descripcion}}</p>
                                              </div>
                                                <!-- <div class="col-md-12 col-lg-12 col-xs-12">
                                                <button type="button" class="btn btn-outline-primary btn-md ml-4" data-dismiss="modal">Cerrar</button>
                                                </div> -->
                                              </div>
                                            </div>
                                            <!--/.Content-->
                                          </div>
                                        </div>
                                        <!--Modal: Name-->
                                        <a><img class="img-fluid img-estudios z-depth-1" src="{{asset('../uploads/'.$estudioGabinete->Url)}}" alt="video" data-toggle="modal" data-target="#modal{{$estudioGabinete->id}}"></a>
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
      <form action="{{route('consulta.guardarFoto')}}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="IdPaciente" value="{{$IdPaciente}}">
        <div class="modal-body">
            <div class="col">
              <div class="form-group row">
                <label class="col-lg-2 col-form-label" for="Url">Sube tu archivo</label>
                <div class="col-lg-10">
                  <input type="file" class="form-control @error('Url') is-invalid @enderror" accept="image/*" name="Url" id="Url">
                  @error('Url')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-2 col-form-label" for="Nombre">Nombre de tu foto</label>
                <div class="col-lg-10">
                <input type="text" class="form-control @error('Nombre') is-invalid @enderror" id="Nombre" name="Nombre" placeholder="Nombre de foto"  required>
                @error('Nombre')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-2 col-form-label" for="Descripcion">Descripción</label>
                  <div class="col-md-10">
                    <textarea required class="form-control @error('Descripcion') is-invalid @enderror" name="Descripcion"></textarea>
                    @error('Descripcion')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
              </div>
              <div class="form-group col-md-12">
                <a href="#" class="btn btn-danger"  data-dismiss="modal" >Cancelar</a>
                <button class="btn btn-primary" type="submit">Subir foto</button>
              </div>
            </div>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- modal nueva foto -->
@endsection