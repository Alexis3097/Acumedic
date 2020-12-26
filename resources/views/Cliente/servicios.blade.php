@extends('Shared.master')
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
    <!-- tipos de servicios -->
    <section class="serviciosCont">
      <div class="container cont">
        <div class="row">
          <div class="col-md-12">
            @foreach($servicios as $servicio)
              <div class="col-md-4 servicio-col">
                <div class="container-servicio">
                  <div class="img">
                    <img src="{{asset('../uploads/servicios/'.$servicio->Logo)}}"  alt="{{$servicio->Logo}}">
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
    <!-- infonumeros -->
    <section class="info-numeros" id="info-numeros2">
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