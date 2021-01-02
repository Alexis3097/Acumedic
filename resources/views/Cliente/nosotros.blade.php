@extends('Shared.master')
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
    <!-- servicios detallados -->
    <section class="servicios-detail">
      <div class="container">
        <div class="row">
          <div class="col-md-12 titulo">
            <div class="title-section">
              <h3 style="font-weight: lighter;">Nuestros</h3>
              <h3>Servicios</h3>
            </div>
          </div>
          <div class="col-md-4" style="border-right:1px solid #cccccc; border-bottom:1px solid #cccccc;">
            <div  class="servicio-content">
              <div class="img"><img src="img/tijuana.svg" alt="">
                <p class="titulo-servicio">Pediluvio ionico detox</p>
              </div>
              <div class="desc">
                <p>45 minutos como mínimo · $300
                  Desintoxicación ionica.
                  </p>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="border-bottom:1px solid #cccccc;">
            <div  class="servicio-content">
              <div class="img"><img src="img/tijuana.svg" alt="">
                <p class="titulo-servicio">Pediluvio ionico detox</p>
              </div>
              <div class="desc">
                <p>45 minutos como mínimo · $300
                  Desintoxicación ionica.
                  </p>
              </div>
            </div>
          </div>
          <div style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc;" class="col-md-4">
            <div class="servicio-content">
              <div class="img"><img src="img/tijuana.svg" alt="">
                <p class="titulo-servicio">Pediluvio ionico detox</p>
              </div>
              <div class="desc">
                <p>45 minutos como mínimo · $300
                  Desintoxicación ionica.
                  </p>
              </div>
            </div>
          </div>
          <div style="border-right:1px solid #cccccc;"  class="col-md-4">
            <div class="servicio-content">
              <div class="img"><img src="img/tijuana.svg" alt="">
                <p class="titulo-servicio">Pediluvio ionico detox</p>
              </div>
              <div class="desc">
                <p>45 minutos como mínimo · $300
                  Desintoxicación ionica.
                  </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="servicio-content">
              <div class="img"><img src="img/tijuana.svg" alt="">
                <p class="titulo-servicio">Pediluvio ionico detox</p>
              </div>
              <div class="desc">
                <p>45 minutos como mínimo · $300
                  Desintoxicación ionica.
                  </p>
              </div>
            </div>
          </div>
          <div style="border-left:1px solid #cccccc;" class="col-md-4">
            <div  class="servicio-content">
              <div class="img"><img src="img/tijuana.svg" alt="">
                <p class="titulo-servicio">Pediluvio ionico detox</p>
              </div>
              <div class="desc">
                <p>45 minutos como mínimo · $300
                  Desintoxicación ionica.
                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- servicios detallados -->
    <!-- contacto -->
    <section class="contacto-formulario">
    <!-- <div class="row"> -->
      <div class="col-md-6 bg-form">

      </div>
      <div class="col-md-6 formulario ">
        <div class="col-md-12 titulo-form">
          <p>SOLICITA UNA CITA</p>
        </div>
        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail4" placeholder="tuncorreo@dominio.com">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Password</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="Tu contraseña">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="#123 Tú dirección">
          </div>
          <div class="form-group" >
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
          </div>
          <button type="submit" class="btn-2 btn-primary">Sign in</button>
        </form>
      </div>
    <!-- </div> -->

    </section>
    <!-- contacto -->
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