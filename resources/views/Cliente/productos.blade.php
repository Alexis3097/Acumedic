@extends('Shared.master')
@section('content')
<main>
      <section class="banner-section2">
          <div class="container">
              <div class="row">
                  <div class="col-md-9 ">
                      <div class="title">
                        <h2>Productos</h2>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="redirect">
                          <h3><i class="icono fas fa-home"></i><a style="color:#fff;" href="">Inicio</a><i class="icono fas fa-chevron-right"></i> Productos</h3>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <section class="productos-page">
          <div class="container">
              <div class="row">
                @foreach($productos as $producto)
                    <div class="col-md-3 single-product">
                        <div class="img-producto">
                            <img src="{{asset('../uploads/productos/'.$producto->fotoProductos[0]->Nombre)}}" 
                            alt="{{$producto->fotoProductos[0]->TextoAlterno}}" title="{{$producto->fotoProductos[0]->Titulo}}">
                        </div>
                        <div class="desc">
                            <h3 class="title-product">{{$producto->Nombre}}</h3>
                            <p class="precio-text">Precio en acumedic:<span class="precio"> ${{$producto->PrecioPublico}}</span></p>
                        </div>
                        <div class="button">
                            <a href="{{route('productos.detallado',['id' => $producto->id])}}" class="btn-2" style="text-align: center;">Ver</a>
                        </div>
                    </div>
                @endforeach
              </div>
          </div>
      </section>
</main>
@endsection