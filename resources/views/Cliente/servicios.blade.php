@extends('Shared.master')
@section('title', 'Acumedic - servicios')
@section('content')
  <!-- main -->
  <main>
    <section class="banner-section2">
      <div class="container">
        <div class="row">
          <div class="col-md-9 ">
            <div class="title">
              <h2>Servicios</h2>
            </div>
          </div>
          <div class="col-md-3">
            <div class="redirect">
              <h3><i class="icono fas fa-home"></i><a style="color:#fff;" href="{{ route('inicio') }}">Inicio</a><i
                  class="icono fas fa-chevron-right"></i> Servicios</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    @if(count($servicios) <= 0)
      <img src="{{asset('../img/Admin/sin-servicios.png')}}">
    @else
      <!-- tipos de servicios -->
      <section class="serviciosCont">
        <div class="container cont">
          <div class="row">
            <div class="col-md-12">
              @foreach($servicios as $servicio)
                <div class="col-md-4 servicio-col">
                  <div class="container-servicio">
                    <div class="img">
                      <img src="{{asset('../uploads/servicios/'.$servicio->Imagen)}}"  alt="{{$servicio->TextoImagen}}">
                    </div>
                    <div class="desc">
                      <h2 class="titulo-servicio">{{$servicio->Nombre}}</h2>
                      <p class="descripcion">{{$servicio->DescripcionCorta}}</p>
                      <a href="{{ route('servicio.detallado',['id'=>$servicio->id]) }}" class="goToServicio">Leer más</a>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>
      <!-- tipos de servicios -->
    @endif
  <!-- infonumeros -->
  <section class="info-numeros" id="info-numeros2">
    <div class="container">
      <div class="row">
        <div class="col-md-3 info-contador">
          <div class="counter" data-count="1600">0</div>
          <p class="desc">Servicios Realizados</p>
        </div>
        <div class="col-md-3 info-contador">
          <div class="counter" data-count="1500">0</div>
          <p class="desc">Pacientes rehabilitados</p>
        </div>
        <div class="col-md-3 info-contador">
          <div class="counter" data-count="200">0</div>
          <p class="desc">Tipos de tratamientos</p>
        </div>
        <div class="col-md-3 info-contador">
          <div class="counter" data-count="40">0</div>
          <p class="desc">Años de experiencia</p>
        </div>
      </div>
    </div>
  </section>
  <!-- infonumeros -->
    <!-- más info -->
    <section class="informacion">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="icon"><i class="icono fa fa-h-square"></i></div>
            <div class="desc">
              <h3 class="titulo">Tratamiento personal</h3>
              <p class="subtitulo">Seguimiento clínico.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="icon"><i class="icono fas fa-user-md"></i></div>
            <div class="desc">
              <h3 class="titulo">Citas</h3>
              <p class="subtitulo">Agendamiento de citas.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="icon"><i class="icono fa fa-book-medical"></i></div>
            <div class="desc">
              <h3 class="titulo">Servicios</h3>
              <p class="subtitulo">Servicios personales.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="icon"><i class="icono fab fa-paypal"></i></div>
            <div class="desc">
              <h3 class="titulo">Pagos</h3>
              <p class="subtitulo">Acuerdo de pagos.</p>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- más info -->
  </main>
@endsection