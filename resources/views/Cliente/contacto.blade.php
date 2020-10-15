@extends('Shared.master')
@section('content')
<main>
    <section class="banner-section2">
      <div class="container">
        <div class="row">
          <div class="col-md-9 ">
            <div class="title">
              <h2>Contacto</h2>
            </div>
          </div>
          <div class="col-md-3">
            <div class="redirect">
              <h3><i class="icono fas fa-home"></i><a style="color:#fff;" href="">Inicio</a><i
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
                    </div>
                    <div class="desc">
                      <p class="descripcion">Monseni, Número #124. Fraccionamiento Montserrat. C.P. 29070</p>
                      <p class="descripcion">Horarios: Luneas a Sábado de 10:00 a.m. a 20:00</p>
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
                      <form class="formulario">
                        <div class="form-group col-md-12">
                          <label for="exampleInputEmail1">Nombre Completo</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group col-md-12">
                          <label for="exampleInputEmail1">Ciudad</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Correo electronico</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Telefono</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <div class="form-group col-md-12">
                            <label for="exampleInputPassword1">Dejanos un mensaje</label>
                            <textarea type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- formulario del contacto -->
  </main>
@endsection