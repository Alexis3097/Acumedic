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
                          <h3><i class="icono fas fa-home"></i><a style="color:#fff;" href="">Inicio</a><i class="icono fas fa-chevron-right"></i> Nosotros</h3>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <section class="productos-page">
          <div class="container">
              <div class="row">
                <div class="col-md-3 single-product">
                    <div class="img-producto">
                        <img src="img/product-1.jpg" alt="product1uwu">
                    </div>
                    <div class="desc">
                        <h3 class="title-product">Producto</h3>
                        <p class="precio-text">Precio en acumedic:<span class="precio">$500.00</span></p>
                        <p class="precio-text">Precio en otros:<span class="precio-t">$500.00</span></p>
                    </div>
                    <div class="button">
                        <a href="#" class="btn-2" style="text-align: center;">Ver</a>
                    </div>
                </div>
                <div class="col-md-3 single-product">
                    <div class="img-producto">
                        <img src="img/product-1.jpg" alt="product1uwu">
                    </div>
                    <div class="desc">
                        <h3 class="title-product">Producto</h3>
                        <p class="precio-text">Precio en acumedic:<span class="precio">$500.00</span></p>
                        <p class="precio-text">Precio en otros:<span class="precio-t">$500.00</span></p>
                    </div>
                    <div class="button">
                        <a href="#" class="btn-2" style="text-align: center;">Ver</a>
                    </div>
                </div>
                <div class="col-md-3 single-product">
                    <div class="img-producto">
                        <img src="img/product-1.jpg" alt="product1uwu">
                    </div>
                    <div class="desc">
                        <h3 class="title-product">Producto</h3>
                        <p class="precio-text">Precio en acumedic:<span class="precio">$500.00</span></p>
                        <p class="precio-text">Precio en otros:<span class="precio-t">$500.00</span></p>
                    </div>
                    <div class="button">
                        <a href="#" class="btn-2" style="text-align: center;">Ver</a>
                    </div>
                </div>
                <div class="col-md-3 single-product">
                    <div class="img-producto">
                        <img src="img/product-1.jpg" alt="product1uwu">
                    </div>
                    <div class="desc">
                        <h3 class="title-product">Producto</h3>
                        <p class="precio-text">Precio en acumedic:<span class="precio">$500.00</span></p>
                        <p class="precio-text">Precio en otros:<span class="precio-t">$500.00</span></p>
                    </div>
                    <div class="button">
                        <a href="#" class="btn-2" style="text-align: center;">Ver</a>
                    </div>
                </div>
              </div>
          </div>
      </section>
</main>
@endsection