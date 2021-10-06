@extends('Shared.master')
@section('title', 'Acumedic - productos')
@section('content')
<main style="z-index:1">
<section class="producto-single">
          <div class="container">
              <div class="row">
                  <div class="col-md-1 col-xs-3 gallery">
                  @if(isset($producto->fotoProductos))
                    @foreach($producto->fotoProductos as $foto)
                      <img src="{{$foto->Nombre}}" onclick="myFunction(this);" class="imagen-gallery" alt="{{$foto->TextoAlterno}}" title="{{$foto->Titulo}}">
                    @endforeach
                  @endif
                  </div>
                  <div class="col-md-6 col-xs-8 producto">
                    @if(isset($producto->fotoProductos[0]))
                      <img id="expandedImg" src="{{$producto->fotoProductos[0]->Nombre}}"
                      alt="{{$producto->fotoProductos[0]->TextoAlterno}}" title="{{$producto->fotoProductos[0]->Titulo}}" class="imagen-principal">
                      <div id="imgtext"></div>
                    @endif
                  </div>
                  <div class="col-md-5 col-xs-12 descripcion">
                      <h1 class="nombreProducto">{{$producto->Nombre}}</h1>
                      <div class="estrellas">
                        @for($i=0;$i<$producto->Estrellas;$i++)
                          <i class="fas fa-star"></i>
                        @endfor
                      </div>
                    <p class="precioUnitario">$<span id="Precio">{{$producto->PrecioPublico}}</span></p>
                    <!-- <p class="precioComparado">$200.00</p> -->
                    <p class="stock">Cantidad disponible: <span  id="Stock" class="stockC">@if(isset($producto->inventario->Cantidad)){{$producto->inventario->Cantidad}}@else 0 @endif</span></p>
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
            @foreach($productos as $otroroducto)
                    <div class="col-md-3 single-product">
                        <div class="img-producto">
                          @if(isset($otroroducto->fotoProductos[0]))
                            <img src="{{$otroroducto->fotoProductos[0]->Nombre}}"
                            alt="{{$otroroducto->fotoProductos[0]->TextoAlterno}}" title="{{$otroroducto->fotoProductos[0]->Titulo}}">
                          @endif
                        </div>
                        <div class="desc">
                            <h3 class="title-product">{{$otroroducto->Nombre}}</h3>
                            <p class="precio-text">Precio en acumedic:<span class="precio"> ${{$otroroducto->PrecioPublico}}</span></p>
                        </div>
                        <div class="button">
                            <a href="{{route('productos.detallado',['id' => $otroroducto->id])}}" class="btn-2" style="text-align: center;">Ver</a>
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
      <h4>Haz seleccionado un: <span>{{$producto->Nombre}}</span></h4>
      <h4>Total: <span id="Total">$0</span></h4>
    </div>
    <form class="formulario" method="post" action="{{route('productos.ordenDeCompra')}}" onclick="event.preventDefault();" validate>
    @csrf
    <input type="hidden" value="{{$producto->id}}" name="IdProducto" id="IdProducto">
    <div style="border-bottom:1px solid #fff;"class="col-md-12">
    <h4 style="font-weight:bold;">Datos Principales</h4>
    </div>
      <div class="form-group col-md-3 col-lg-3">
        <label for="NombreCompleto">Nombre Completo</label>
        <input type="text" class="form-control" id="NombreCompleto" name="NombreCompleto" aria-describedby="emailHelp" placeholder="Añade tú nombre" maxlength="190">
        <div class="errorLabel" id="errorNombre"></div>
      </div>
      <div class="form-group col-md-3 col-lg-3">
        <label for="Correo">Correo electronico</label>
        <input type="email" class="form-control" id="Correo"  name="Correo" aria-describedby="emailHelp" placeholder="tucorreo@tudominio.com" maxlength="190">
        <div class="errorLabel" id="errorCorreo"></div>
      </div>
      <div class="form-group col-md-3 col-lg-3">
        <label for="Telefono">Telefono</label>
        <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Escribe aqui tú número" maxlength="190">
        <div class="errorLabel" id="errorTelefono"></div>
      </div>
      <div class="form-group col-md-3 col-lg-3">
        <label for="Cantidad">Cantidad a pedir:</label>
        <input min="0" class="form-control" type="number" id="Cantidad"  name="Cantidad" step="1" value="0">
        <div class="errorLabel" id="errorCantidad"></div>
      </div>
      <div style="border-bottom:1px solid #fff;" class="col-md-12">
      <h4 style="font-weight:bold;">Dirección</h4>
      </div>
      <div class="form-group col-md-3 col-lg-3">
        <label for="Estado">Estado</label>
        <input type="text" class="form-control" id="Estado" name="Estado" aria-describedby="emailHelp" placeholder="Ingresa tú estado" maxlength="190">
        <div class="errorLabel" id="errorEstado"></div>
      </div>
      <div class="form-group col-md-3 col-lg-3">
        <label for="Municipio">Municipio</label>
        <input type="text" class="form-control" id="Municipio" name="Municipio" aria-describedby="emailHelp" placeholder="Ingresa tú municipio" maxlength="190">
        <div class="errorLabel" id="errorMunicipio"></div>
      </div>
      <div class="form-group col-md-3 col-lg-3">
        <label for="Colonia">Colonia</label>
        <input type="text" class="form-control" id="Colonia" name="Colonia" aria-describedby="emailHelp" placeholder="Ingresa tú colonia" maxlength="190">
        <div class="errorLabel" id="errorColonia"></div>
      </div>
      <div class="form-group col-md-3 col-lg-3">
        <label for="Calle">Calle</label>
        <input type="text" class="form-control" id="Calle" name="Calle" aria-describedby="emailHelp" placeholder="Ingresa tú calle" maxlength="190">
        <div class="errorLabel" id="errorCalle"></div>
      </div>
      <div style="border-bottom:1px solid #fff;" class="col-md-12">
      <h4 style="font-weight:bold;">Referencias (Opcional)</h4>
      </div>
      <div class="form-group col-md-3 col-lg-3">
        <label for="NoInterior">No. Interior</label>
        <input type="text" class="form-control" id="NoInterior" name="NoInterior" aria-describedby="emailHelp" placeholder="Ingresa tú número interior" maxlength="190">
      </div>
      <div class="form-group col-md-3 col-lg-3">
        <label for="Calle1">Entre calle</label>
        <input type="text" class="form-control" id="Calle1" name="Calle1" aria-describedby="emailHelp" placeholder="Ingresa tú primer referencia" maxlength="190">
      </div>
      <div class="form-group col-md-3 col-lg-3">
        <label for="Calle2">Y calle</label>
        <input type="text" class="form-control" id="Calle2" name="Calle2" aria-describedby="emailHelp" placeholder="Ingresa tú segunda referencia" maxlength="190">
      </div>
      <div class="form-group col-md-3 col-lg-3">
        <label for="NoExterior">No. Exterior</label>
        <input type="text" class="form-control" id="NoExterior" name="NoExterior" aria-describedby="emailHelp" placeholder="Ingresa tú no. exterior" maxlength="190">
      </div>
      <button type="submit" id="enviar" class="btn btn-primary enviar">Enviar</button>
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
<script src="{{asset('js/valorStock.js')}}"></script>
@endsection
