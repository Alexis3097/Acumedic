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
                                    <button type="button" class="btn btn-outline-primary">
                                        <i class='fas fa-arrow-left'></i> Regresar
                                    </button>
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
                                                  <div class="background-estudios embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                    <img class="background-estudios-img embed-responsive-item" src="{{asset('../uploads/'.$estudioGabinete->Url)}}" allowfullscreen>
                                                  </div>
                                              </div>
                                             <!--Footer-->
                                              <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-outline-primary btn-md ml-4" data-dismiss="modal">Close</button>
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
      <form>
      <div class="modal-body">
          <div class="col">
            <div class="form-group row">
              <label class="col-lg-2 col-form-label" for="example-fileinput">Sube tu archivo</label>
              <div class="col-lg-10">
                <input type="file" class="form-control" id="example-fileinput">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-2 col-form-label" for="example-fileinput">Nombre de tu foto</label>
              <div class="col-lg-10">
              <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre de foto" value="" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-2 col-form-label" for="example-fileinput">Descripción</label>
                <div class="col-md-10">
                  <textarea required class="form-control"></textarea>
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