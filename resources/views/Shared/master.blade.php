<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acumedic - Inicio</title>
  
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
        <li class="nav-item"><a href="#">Inicio</a></li>
        <li class="nav-item"><a href="#">Nosotros</a></li>
        <li class="nav-item"><a href="#">Servicios</a></li>
        <li class="nav-item"><a href="#">Contacto</a></li>
        <li class="nav-item"><a href="#"class="btn-nav">Productos</a></li>
      </ul>
    </nav>
  </div>
  <!-- Fin de navbar -->
</header>
@yield('content')
<body>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-logo">
          <figure class="figure-footer"><img src="{{asset('img/acumedic-logo.png')}}" alt=""></figure>
          <div class="desc">
            <p class="descripcion">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
              piece</p>
            <ul>
              <li><i class="icono fas fa-map-marker-alt"></i>
                <p>123 Lorem ipsum dolor sit amet, consectetur</p>
              </li>
              <li><i class="icono far fa-envelope"></i>
                <p>123 Lorem ipsum dolor sit amet, consectetur</p>
              </li>
              <li><i class="icono fas fa-phone"></i>
                <p>123 Lorem ipsum dolor sit amet, consectetur</p>
              </li>
              <li><i class="icono far fa-clock"></i>
                <p>123 Lorem ipsum dolor sit amet, consectetur</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 colFooter">
          <div class="tituloFooter">
            <p>Links Frecuentes</p>
          </div>
          <div class="sublinks">
            <ul>
              <li><a>coronavairas</a></li>
              <li><a>coronavairas</a></li>
              <li><a>coronavairas</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 colFooter">
          <div class="tituloFooter">
            <p>Links Frecuentes</p>
          </div>
          <div class="sublinks">
            <ul>
              <li><a>coronavairas</a></li>
              <li><a>coronavairas</a></li>
              <li><a>coronavairas</a></li>
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
            <p><i class="fab fa-facebook-f"></i></p>
            <p><i class="fab fa-instagram"></i></p>
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
</body>

</html>