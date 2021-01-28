@extends('Shared.master')
@section('title', 'Acumedic - contacto')
@section('content')
<main>
    <section class="banner-section2">
      <div class="container">
        <div class="row">
          <div class="col-xs-3 col-md-9">
            <div class="title">
              <h2>Contacto</h2>
            </div>
          </div>
          <div class="col-xs-2 col-md-3">
            <div class="redirect">
              <h3><i class="icono fas fa-home"></i><a style="color:#fff;" href="{{ route('inicio') }}">Inicio</a><i
                  class="icono fas fa-chevron-right"></i> Contacto</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- frame formulario -->
    <section class="frame-map">
      <div class="row">
        <div class="col-md-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3338.0567505726603!2d-93.08611544203684!3d16.746428393998997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcef3a53d4c597c3c!2sAcumedic!5e1!3m2!1ses-419!2smx!4v1601438732511!5m2!1ses-419!2smx" width="" height="" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
  </section>
    <!-- frame formulario -->
        <!-- formulario del contacto -->
        <section class="form-contact">
          <div class="container">
              <div class="row">
                <div class="col-md-6 info-direccion">
                  <div class="direccion">
                    <div class="titulo">
                      <h3>Tuxtla Gutierrez, Chiapas, México.</h3>
                      <h4>Solicita una cita en nuestra clínica</h4>
                    </div>
                    <div class="desc">
                      <p class="descripcion">Monseni, Número #124. Fraccionamiento Montserrat. C.P. 29070</p>
                      <p class="descripcion">Horarios: Lunes a Sábado de 10:00 a 20:00 Hrs.</p>
                      <p class="descripcion">Domingo cerrado.</p>
                      <p class="descripcion">Correo electronico: medicalternativa@hotmail.com</p>
                    </div>
                    <div class="numero">
                      <i class="fa fa-phone icon"></i><p class="numerolist">+52 961 173 4245</p>
                    </div>
                  </div>
                </div>
                  <div class="col-md-6 container-formulario">
                    <div class="container-formbg">
                      <form class="formulario" onclick="event.preventDefault();" validate>
                      @csrf
                        <div class="form-group col-md-12">
                        <label for="NombreCompleto">Nombre Completo</label>
                        <input type="text" class="form-control" id="NombreCompleto" name="NombreCompleto" placeholder="Coloca aquí tú nombre" maxlength="190">
                        <div class="errorLabel" id="errorNombre"></div>
                        </div>
                        <div class="form-group col-md-12">
                        <label for="Correo">Correo electrónico</label>
                        <input type="email" class="form-control" id="Correo" name="Correo" placeholder="túcorreo@tudominio.com" maxlength="190">
                        <div class="errorLabel" id="errorCorreo"></div>
                          </div>
                        <div class="form-group col-md-12">
                        <label for="Ciudad">Ciudad</label>
                        <input type="text" class="form-control" id="Ciudad" name="Ciudad"   placeholder="Ej: Monterrey, N.L." maxlength="190">
                        <div class="errorLabel" id="errorCiudad"></div>
                        </div>
                          <div class="form-group col-md-12">
                          <label for="Telefono">Teléfono</label>
                          <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Coloca aquí tú número teléfonico" maxlength="190">
                          <div class="errorLabel" id="errorTelefono"></div>
                          </div>
                          <button type="submit" class="btn btn-primary enviar" id="enviarSolicitud">Enviar</button>
                        </form>
                    </div>
                  </div>
              </div>
          </div>
      </section>
      <div class="modal-thankYou ">
  <div class="text">
    <h2>¡Gracias!</h2>
    <p>Tus datos han sido guardado satisfactoriamente</p>
    <p>Te mandaremos un correo para el seguimiento de tu cita</p>
  </div>
</div>
      <!-- formulario del contacto -->
  </main>
@endsection
@section('scripts')
<script src="{{asset('js/solicitarCita.js')}}"></script>
@endsection