@extends('Shared.master')
@section('title', 'Acumedic - Inicio')
@section('content')
<main>
      <section class="banner-section2">
          <div class="container">
              <div class="row">
                  <div class="col-md-9 ">
                      <div class="title">
                        <h2>Nosotros</h2>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="redirect">
                          <h3><i class="icono fas fa-home"></i><a style="color:#fff;" href="">Inicio</a><i class="icono fas fa-chevron-right"></i> Nosotros</h3>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <section class="about-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 imageAbout">
              <img src="{{asset('../uploads/SobreAcumedic/'.$sobreAcumedic->Foto)}}" alt="{{$sobreAcumedic->TextoAlterno}}">
            </div>
            <div class="col-md-6 descAbout">
            <p class="titulo">{{$sobreAcumedic->Titulo1}}</p>
            <p class="desc-italic">{{$sobreAcumedic->Informacion1}}</p>
            <p class="subtitulo">{{$sobreAcumedic->Titulo2}}</p>
            <p class="desc">{{$sobreAcumedic->Informacion2}}</p>
            <p class="subtitulo">{{$sobreAcumedic->Titulo3}}</p>
            <p class="desc">{{$sobreAcumedic->Informacion3}}</p>
            </div>
          </div>
        </div>
      </section>
      <section class="about-section about-dos" style="background-color: #e6ede9;">
        <div class="container">
          <div class="row">
            <div class="col-md-6 descAbout">
              <p class="titulo">{{$segundaSeccion->Titulo1}}</p>
              <p class="desc">{{$segundaSeccion->Informacion1}}</p>
              <p class="subtitulo">{{$segundaSeccion->Titulo2}}</p>
              <p class="desc">{{$segundaSeccion->Informacion2}}</p>
            </div>
            <div class="col-md-6 imageAbout">
              <img src="{{asset('../uploads/SobreAcumedic/'.$segundaSeccion->Foto)}}" alt="{{$segundaSeccion->TextoAlterno}}">
            </div>
          </div>
        </div>
      </section>
      <section class="sub-banner" style="padding: 2%;">
        <div class="infoAcumedic" style="margin-top: 0px;">
          <div class="contacto">
            <div class="numeroIcono">
              <p class="icono"><i class="fas fa-phone"></i></p>
            </div>
            <div class="desc">
              <p class="titulo">Nuestro número</p>
              <p class="numero">{{$contacto->Telefono}}</p>
            </div>
          </div>
          <div class="contactoH">
            <div class="numeroIcono">
              <p class="icono"><i class="far fa-clock"></i></p>
            </div>
            <div class="desc">
              <p class="titulo">Horarios</p>
              <p class="numero">{{$contacto->Horario}}</p>
            </div>
          </div>
        </div>
      </section>
    <section class="contacto-formulario">
      <!-- <div class="row"> -->
        <div class="col-md-6 bg-form">

        </div>
        <div class="col-md-6 formulario ">
          <div class="col-md-12 titulo-form">
            <p>SOLICITA UNA CITA</p>
          </div>
          <form onclick="event.preventDefault();" validate>
          @csrf
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="NombreCompleto">Nombre Completo</label>
                <input type="text" class="form-control" id="NombreCompleto" name="NombreCompleto" placeholder="Coloca aquí tú nombre" maxlength="190">
                
                <div class="errorLabel" id="errorNombre">erxror</div>
              </div>
              <div class="form-group col-md-6" >
                <label for="Correo">Correo electrónico</label>
                <input type="email" class="form-control" id="Correo" name="Correo" placeholder="túcorreo@tudominio.com" maxlength="190">
                
                <div class="errorLabel" id="errorCorreo">error</div>
              </div>
              <div class="form-group col-md-6">
                <label for="Ciudad">Ciudad</label>
                <input type="text" class="form-control" id="Ciudad" name="Ciudad"   placeholder="Ej: Monterrey, N.L." maxlength="190">
                
                <div class="errorLabel" id="errorCiudad">error</div>
              </div>
            </div>
            <div class="form-group">
              <label for="Telefono">Teléfono</label>
              <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Coloca aquí tú número teléfonico" maxlength="190">
            
              <div class="errorLabel" id="errorTelefono">error</div>
            </div>
            <button type="submit" class="btn-2 btn-primary enviar" id="enviarSolicitud">Quiero una cita</button>
          </form>
        </div>
        <div class="modal-thankYou ">
        <div class="text">
          <h2>¡Gracias!</h2>
          <p>Tus datos han sido guardado satisfactoriamente</p>
          <p>Te mandaremos un correo para el seguimiento de tu cita</p>
        </div>
      </div>
      <!-- </div> -->
    </section>
    <!-- más info -->
    <section class="informacion">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="icon"><i class="icono fa fa-h-square"></i></div>
            <div class="desc">
              <h3 class="titulo">Free shiping</h3>
              <p class="subtitulo">lorem ipsum dolor is a met</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="icon"><i class="icono fas fa-user-md"></i></div>
            <div class="desc">
              <h3 class="titulo">Free shiping</h3>
              <p class="subtitulo">lorem ipsum dolor is a met</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="icon"><i class="icono fa fa-book-medical"></i></div>
            <div class="desc">
              <h3 class="titulo">Free shiping</h3>
              <p class="subtitulo">lorem ipsum dolor is a met</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="icon"><i class="icono fab fa-paypal"></i></div>
            <div class="desc">
              <h3 class="titulo">Free shiping</h3>
              <p class="subtitulo">lorem ipsum dolor is a met</p>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- más info -->
</main>
@endsection
@section('scripts')
<script src="{{asset('js/solicitarCita.js')}}"></script>
@endsection