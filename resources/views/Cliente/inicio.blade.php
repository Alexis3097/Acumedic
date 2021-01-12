@extends('Shared.master')
@section('title', 'Acumedic - Inicio')
@section('content')
<main>
      <!-- banner principal -->
  <section class="banner-section">
    <div class="container banner-acumedic">
      <div class="row">
        <div class="col-md-6">
          <div class="titulo-sitio">
            <h1 class="titulo">
              A Passion for Healing Medical Center
            </h1>
            <h2>lorems ipsum dolos is a met a lorems ipsum</h2>
          </div>
          <div class="button">
            <a href="{{route('servicios')}}" class="btn-1">Ver más</a>
          </div>
        </div>
        <div class="col-md-6"></div>
      </div>
    </div>
  </section>
  <section class="sub-banner">
    <div class="infoAcumedic">
      <div class="contacto">
        <div class="numeroIcono">
          <p class="icono"><i class="fas fa-phone"></i></p>
        </div>
        <div class="desc">
          <p class="titulo">Nuestro número</p>
          <p class="numero">961-359-1414</p>
        </div>
      </div>
      <div class="contactoH">
        <div class="numeroIcono">
          <p class="icono"><i class="far fa-clock"></i></p>
        </div>
        <div class="desc">
          <p class="titulo">Horarios</p>
          <p class="numero">Lunes a Sábado (11:00 - 15:00 , 17:00 - 19:00)</p>
        </div>
      </div>
    </div>
  </section>
  <!-- fin del banner principal -->
  <!-- about y más -->
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
  <!-- nosotros -->
  <!-- infonumeros -->
  <section class="info-numeros" id="info-numeros1">
    <div class="container">
      <div class="row">
        <div class="col-md-3 info-contador">
          <div class="counter" data-count="2018">0</div>
          <p class="desc">lorem impsum</p>
        </div>
        <div class="col-md-3 info-contador">
          <div class="counter" data-count="2019">0</div>
          <p class="desc">lorem impsum</p>
        </div>
        <div class="col-md-3 info-contador">
          <div class="counter" data-count="2020">0</div>
          <p class="desc">lorem impsum</p>
        </div>
        <div class="col-md-3 info-contador">
          <div class="counter" data-count="2021">0</div>
          <p class="desc">lorem impsum</p>
        </div>
      </div>
    </div>
  </section>
  <!-- infonumeros -->
  <!-- servicios -->
  <section class="servicios">
    <div class="container">
      <div class="row">
        <div class="col-md-12 titulo">
          <div class="title-section">
            <h3>Servicios de Homeopatía</h3>
          </div>
          <p class="desc-section">Nullam quis dolor sed ante ultricies mattis. Mauris luctus felis nec nulla eleifend
            pulvinar. In imperdiet mi vitae quam placerat dapibus.</p>
        </div>
        @foreach($servicios as $servicio)
          <div class="col-md-4">
            <div class="servicio-content">
              <div class="img"><img src="{{asset('../uploads/servicios/'.$servicio->Logo)}}" alt="{{$servicio->TextoLogo}}">
                <p class="titulo-servicio">{{$servicio->Nombre}}</p>
              </div>
              <div class="price">
                <p><span>$ </span>{{$servicio->Precio}}</p>
              </div>
              <div class="desc">
                <p>{{$servicio->DescripcionCorta}}</p>
              </div>
              <div class="btn">
                <a href="{{ route('servicio.detallado',['id'=>$servicio->id]) }}" class="btn-1 btn-primary">Ver más</a>
              </div>
            </div>
          </div>
        @endforeach
       
      </div>
    </div>
  </section>
  <!-- servicios -->
  <!-- contacto -->
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
               
                <div class="errorLabel" id="errorNombre"></div>
              </div>
              <div class="form-group col-md-6" >
                <label for="Correo">Correo electrónico</label>
                <input type="email" class="form-control" id="Correo" name="Correo" placeholder="túcorreo@tudominio.com" maxlength="190">
               
                <div class="errorLabel" id="errorCorreo"></div>
              </div>
              <div class="form-group col-md-6">
                <label for="Ciudad">Ciudad</label>
                <input type="text" class="form-control" id="Ciudad" name="Ciudad"   placeholder="Ej: Monterrey, N.L." maxlength="190">
               
                <div class="errorLabel" id="errorCiudad"></div>
              </div>
            </div>
            <div class="form-group">
              <label for="Telefono">Teléfono</label>
              <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Coloca aquí tú número teléfonico" maxlength="190">
             
              <div class="errorLabel" id="errorTelefono"></div>
            </div>
            <button type="submit" class="btn-2 btn-primary enviar" id="enviarSolicitud">Quiero una cita</button>
          </form>
        </div>
      <!-- </div> -->

  </section>
  <div class="modal-thankYou ">
    <div class="text">
      <h2>¡Gracias!</h2>
      <p>Tus datos han sido guardado satisfactoriamente</p>
      <p>Te mandaremos un correo para el seguimiento de tu cita</p>
    </div>
  </div>
  <!-- contacto -->

  </main>
@endsection
@section('scripts')
<script src="{{asset('js/solicitarCita.js')}}"></script>
@endsection