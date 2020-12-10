@extends('layouts.app')

@section('content')
        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-md-6 p-5">
                                        <div class="mx-auto mb-5">
                                            <a href="index.html">
                                                <img src="{{asset('img/acumedic-logo.png')}}" alt="" height="54" />
                                               
                                            </a>
                                        </div>

                                        <h6 class="h5 mb-0 mt-4">{{ __('Login') }}</h6>
                                        <p class="text-muted mt-1 mb-4">Ingresa con tu nombre de usuario</p>

                                        <form method="POST" action="{{ route('login') }}" >
                                            @csrf
                                            <div class="form-group">
                                                <label for="email" class="form-control-label">Correo electronico</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="user"></i>
                                                        </span>
                                                    </div>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="tu usuario">
                                                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                                </div>
                                            </div>

                                            <div class="form-group mt-4">
                                                <label class="form-control-label" for="password">Contraseña</label>
                                                <a href="#" class="float-right text-muted text-unline-dashed ml-1">¿Olvidaste tu contraseña?</a>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                                    </div>
                                                    <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                    
                                                     @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group mb-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                                                </div>
                                            </div>

                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-primary btn-block" type="submit">{{ __('Login') }}
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6 d-none d-md-inline-block">
                                        <div class="auth-page-sidebar" style="background-image:url('img/Admin/auth-bg.jpg')!important;">
                                            <div class="overlay"></div>
                                            <div class="auth-user-testimonial">
                                                <p class="font-size-24 font-weight-bold text-white mb-1">Administrador principal</p>
                                                <p class="lead">Acumedic - TecNM Tuxlta Gutiérrez</p>
                                                <p>Marzo 2021</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">¿Usuario nuevo? <a href="{{route('register')}}" class="text-primary font-weight-bold ml-1">Crea una cuenta</a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
    @endsection