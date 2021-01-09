<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acumedic - Inicio</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<header>
  <!--sección navbar-->
  <div class="nav-wrapper">
    <div class="grad-bar"></div>
    <nav class="navbar">
      <img src="{{asset('img/acumedic-logo.png')}}">
      <div class="menu-toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <ul class="nav no-search">
        <li class="nav-item"><a href="{{ route('inicio') }}">Inicio</a></li>
        <li class="nav-item"><a href="{{ route('nosotros') }}">Nosotros</a></li>
        <li class="nav-item"><a href="{{route('servicios')}}">Servicios</a></li>
        <li class="nav-item"><a href="{{ route('contacto') }}">Contacto</a></li>
        <li class="nav-item"><a href="{{route('productos')}}"class="btn-nav">Productos</a></li>
      </ul>
    </nav>
  </div>
  <!-- Fin de navbar -->
</header>
<body>
@yield('content')
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-logo">
          <figure class="figure-footer">
            <!-- <a href="{{route('inicio')}}"> -->
              <img src="{{asset('img/acumedic-logo.png')}}" alt="">
            <!-- </a> -->
          </figure>
          <div class="desc">
            <p class="descripcion">Centro especializado en Acupuntura-Naturopatia y geriatría. Diplomados profesionales en salud alternativa</p>
            <ul>
              <li><i class="icono fas fa-map-marker-alt"></i>
                <p>Monseni #124. Fraccionamiento Montserrat. C.P.29070 Tuxtla Gutiérrez, Chiapas, México</p>
              </li>
              <li><i class="icono far fa-envelope"></i>
                <p>medicalternativa@hotmail.com</p>
              </li>
              <li><i class="icono fas fa-phone"></i>
                <p>961-173-4245</p>
              </li>
              <li><i class="icono far fa-clock"></i>
                <p>Lun a Vie : 10:00 - 20:00</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 colFooter">
          <div class="tituloFooter">
            <p>Páginas de interes</p>
          </div>
          <div class="sublinks">
            <ul>
              <li><a>Contacto</a></li>
              <li><a>Productos</a></li>
              <li><a>Servicios</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 colFooter">
          <div class="tituloFooter">
            <p>Links Frecuentes</p>
          </div>
          <div class="sublinks">
            <ul>
              <li><a>Nosotros</a></li>
              <li><a>¿Qués es la Acunputura</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="toe">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="social-media">
            <a><i class="fab fa-facebook-f"></i></a>
            <a><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="copyright">
            <p>Diseñado por Alexis Montoya y Felipe Martínez TecNM <i class="far fa-copyright"></i>2020</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- fin pie de página -->
  <!-- main -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/all.js')}}"></script>
  <script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/acumedic.js')}}"></script>
  @livewireScripts
  @yield('scriptProductoDetallado')
  @yield('stock')
</body>

</html>