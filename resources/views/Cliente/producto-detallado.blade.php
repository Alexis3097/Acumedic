@extends('Shared.master')
@section('content')
<main style="z-index:1">
<section class="producto-single">
          <div class="container">
              <div class="row">
                  <div class="col-md-1 col-xs-3 gallery">
                    @foreach($producto->fotoProductos as $foto)
                      <img src="{{asset('../uploads/productos/'.$foto->Nombre)}}" onclick="myFunction(this);" class="imagen-gallery" alt="{{$foto->TextoAlterno}}" title="{{$foto->Titulo}}">
                    @endforeach
                  </div>
                  <div class="col-md-6 col-xs-8 producto">
                      <img id="expandedImg" src="{{asset('../uploads/productos/'.$producto->fotoProductos[0]->Nombre)}}"  
                      alt="{{$producto->fotoProductos[0]->TextoAlterno}}" title="{{$producto->fotoProductos[0]->Titulo}}" class="imagen-principal">
                      <div id="imgtext"></div>
                  </div>
                  <div class="col-md-5 col-xs-12 descripcion">
                      <h1 class="nombreProducto">{{$producto->Nombre}}</h1>
                      <div class="estrellas">
                        @for($i=0;$i<$producto->Estrellas;$i++)
                          <i class="fas fa-star"></i>
                        @endfor
                      </div>
                    <p class="precioUnitario">${{$producto->PrecioPublico}}</p>
                    <!-- <p class="precioComparado">$200.00</p> -->
                    <p class="stock">Cantidad disponible: <span class="stockC">2</span></p>
                    <p class="descripcion-text">{{$producto->DescripcionLarga}}</p>
                    <div class="button">
                        <button type="button" class="btn-2" id="modal-carrito">COMPRAR</button>
                    </div>
                    <a href="{{route('productos')}}" style="color:#232323; font-size:1.5em;"><i class="fas fa-arrow-left"></i> Regresar</a>
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
      </section>
</main>
<section  class="modal-orden">
  <div class="container-modal row container-formbg">
  <div id="close-modal">  <i  class="icon fas fa-times"></i></div>
    <div class="col-md-12 col-lg-12 col-xs-12">
    <div class="col-md-12 titulo-form">
      <h2>LLENA LOS SIGUIENTES DATOS PARA ORDENAR TÚ PRODUCTO</h2>
      <h4>Haz seleccionado un: <span>Name product</span></h4>
      <h4>Total: <span>$100</span></h4>
    </div>
    <form class="formulario">
      <div class="form-group col-md-12 col-xs-12 col-lg-12">
        <label for="exampleInputEmail1">Nombre Completo</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Añade tú nombre">
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
      </div>
      <div class="form-group col-md-12 col-xs-12 col-lg-12">
        <label for="exampleInputEmail1">Correo electronico</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tucorreo@tudominio.com">
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
      </div>
      <div class="form-group col-md-12 col-xs-12 col-lg-12">
        <label for="points">Cantidad a pedir:</label>
        <input min="0" class="form-control" type="number" id="points" name="points" step="1" value="0">
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
      </div>
      <div class="form-group col-md-12 col-xs-12 col-lg-12">
        <label for="exampleInputEmail1">Ciudad</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tú ciudad">
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
      </div>
      <div class="form-group col-md-12 col-xs-12 col-lg-12">
        <label for="exampleInputPhone">Telefono</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Escribe aqui tú número">
      </div>
      <button type="submit" id="enviar" class="btn btn-primary">Enviar</button>
    </form>
    </div>
  </div>
</section>
  <div class="modal-thankYou ">
    <div class="text">
      <h2>¡Gracias!</h2>
      <p>Tus datos han sido guardado satisfactoriamente</p>
      <p>Te mandaremos un correo para el seguimiento de tu pedido</p>
    </div>
  </div>
@endsection
@section('scriptProductoDetallado')
<script>
    function myFunction(imgs) {
      var expandImg = document.getElementById("expandedImg");
      var imgText = document.getElementById("imgtext");
      expandImg.src = imgs.src;
      imgText.innerHTML = imgs.alt;
      expandImg.parentElement.style.display = "block";
    }
</script>
@endsection