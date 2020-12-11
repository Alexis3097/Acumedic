@extends('Shared.master')
@section('content')
<main>
      <section class="producto-single">
          <div class="container">
              <div class="row">
                  <div class="col-md-1 col-xs-3 gallery">
                      <img src="img/product-1.jpg" alt="" class="imagen-gallery">
                      <img src="img/product-1.jpg" alt="" class="imagen-gallery">
                      <img src="img/product-1.jpg" alt="" class="imagen-gallery">
                  </div>
                  <div class="col-md-6 col-xs-8 producto">
                      <img src="img/product-1.jpg" alt="" class="imagen-principal">
                  </div>
                  <div class="col-md-5 col-xs-12 descripcion">
                      <h1 class="nombreProducto">Producto riopan</h1>
                      <div class="estrellas">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                      </div>
                    <p class="precioUnitario">$500.00</p>
                    <p class="precioComparado">$200.00</p>
                    <p class="stock">Cantidad disponible: <span class="stockC">2</span></p>
                    <p class="descripcion-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus, placeat? Nihil dignissimos et alias odio, velit aliquid modi. Sapiente placeat eligendi aperiam dicta excepturi molestiae fugit veritatis sed minima accusantium?</p>
                    <div class="button">
                        <button class="btn-2">COMPRAR</button>
                    </div>
                    <a href="productos.html" style="color:#232323; font-size:1.5em;"><i class="fas fa-arrow-left"></i> Regresar</a>
                  </div>
              </div>
          </div>
      </section>
      <section class="productos-page" style="padding:1%;">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 style="text-align: center; font-weight: bold;">OTROS PRODUCTOS</h3>
            </div>
            <div class="col-md-4 single-product">
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
            <div class="col-md-4 single-product">
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
            <div class="col-md-4 single-product">
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
      </section>
</main>
@endsection