<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'Acumedic') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="{{asset('img/Admin/favicon.ico')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('js/Admin/libs/flatpickr/flatpickr.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/Admin/bootstrap.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/Admin/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/Admin/icons.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/Admin/icons.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/Admin/app.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/Admin/app.min.css')}}" type="text/css">
        @livewireStyles
        @yield('estilosCitas')
        @yield('estilosCitasIndex')
        @yield('estilosAntecedentes')
        @yield('estilosVentas')
    </head>

    <body>
        <!-- comienzo page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar navbar-expand flex-column flex-md-row navbar-custom">
                <div class="container-fluid">
                    <!-- LOGO -->
                    <a href="{{ route('home') }}" class="navbar-brand mr-0 mr-md-2 logo">
                        <span class="logo-lg">
                            <img src="{{asset('img/acumedic-logo.png')}}" alt="" height="50" />
                        </span>
                        <span class="logo-sm">
                            <img src="{{asset('img/acumedic-logo.png')}}" alt="" height="24">
                        </span>
                    </a>

                    <ul class="navbar-nav bd-navbar-nav flex-row list-unstyled menu-left mb-0">
                        <li class="">
                            <button class="button-menu-mobile open-left disable-btn">
                                <i data-feather="menu" class="menu-icon"></i>
                                <i data-feather="x" class="close-icon"></i>
                            </button>
                        </li>
                    </ul>

                    <ul class="navbar-nav flex-row ml-auto d-flex list-unstyled topnav-menu float-right mb-0">
                        <li class="dropdown notification-list" data-toggle="tooltip" data-placement="left" title="Configuración">
                            <a href="javascript:void(0);" class="nav-link right-bar-toggle">
                                <i data-feather="settings"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list align-self-center profile-dropdown">
                            <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <div class="media user-profile ">
                                    <img src="{{asset('../img/Admin/users/avatar-4.jpg')}}" alt="user-image" class="rounded-circle align-self-center" />
                                    <div class="media-body text-left">
                                        <h6 class="pro-user-name ml-2 my-0">
                                            <span>Acumedic</span>
                                            <span class="pro-user-desc text-muted d-block mt-1">Administrator </span>
                                        </h6>
                                    </div>
                                    <span data-feather="chevron-down" class="ml-2 align-self-center"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu profile-dropdown-items dropdown-menu-right">
                                <a href="pages-profile.html" class="dropdown-item notify-item">
                                    <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                                    <span>Mi cuenta</span>
                                </a>

                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                                    <span>Configuración</span>
                                </a>

                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i data-feather="help-circle" class="icon-dual icon-xs mr-2"></i>
                                    <span>Support</span>
                                </a>

                                <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                                    <i data-feather="lock" class="icon-dual icon-xs mr-2"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">
                <div class="media user-profile mt-2 mb-2">
                    @if(is_null(Auth::user()->Foto))
                        <img src="{{asset('../img/Admin/users/avatar-4.jpg')}}" class="avatar-sm rounded-circle mr-2" alt="Foto de perfil" />
                    @else
                        <img src="{{asset('../uploads/'.Auth::user()->Foto)}}" class="avatar-sm rounded-circle mr-2" alt="Foto de perfil" />
                    @endif
                    <div class="media-body">
                        <h6 class="pro-user-name mt-0 mb-0">{{Auth::user()->name}}</h6>
                        <span class="pro-user-desc">{{implode(" ",Auth::user()->getRoleNames()->toArray())}}</span>
                    </div>
                    <div class="dropdown align-self-center profile-dropdown-menu">
                        <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <span data-feather="chevron-down"></span>
                        </a>
                        <div class="dropdown-menu profile-dropdown">
                            <a href="{{route('usuarios.edit',['IdUsuario'=>Auth::user()->id])}}" class="dropdown-item notify-item">
                                <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                                <span>Mi cuenta</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                                <span>Configuraciones</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" class="dropdown-item notify-item"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                                <span>Cerrar sesión</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <div class="sidebar-content">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu" class="slimscroll-menu">
                        <ul class="metismenu" id="menu-bar">
                            <li class="menu-title">Navegación</li>
                            <li>
                                <a href="{{ route('home') }}">
                                    <i data-feather="home"></i>
                                    <span class="badge badge-success float-right">1</span>
                                    <span> Inicio </span>
                                </a>
                            </li>
                            <li class="menu-title">Funciones</li>
                            @canany(['ListadoCitas','CrearCita','EditarCita','EliminarCita','CrearFicha','Consulta'])
                            <li>
                                <a href="{{ route('citas.list') }}">
                                     <i data-feather="calendar"></i>
                                    <span> Citas </span>
                                </a>
                            </li>
                            @endcan
                            @canany(['ListadoPacientes','CrearPaciente','EditarPaciente','EliminarPaciente','ListadoFicha','Consulta'])
                            <li>
                                <a href="{{ route('paciente.list') }}">
                                    <i data-feather="user"></i>
                                    <span> Pacientes </span>                                  
                                </a>
                            </li>
                            @endcan
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                    <i data-feather="shopping-cart"></i>
                                    <span > Ventas </span>
                                    <span data-feather="chevron-down" class="ml-2 align-self-center"></span>
                                </a>
                                <div class="dropdown-menu profile-dropdown-items dropdown-menu-right">
                                    <a href="{{ route('productos.list')}}" class="dropdown-item notify-item">
                                        <i data-feather="package" class="icon-dual icon-xs mr-2"></i>
                                        <span>Productos</span>
                                    </a>

                                    <a href="{{route('servicios.list')}}" class="dropdown-item notify-item">
                                        <i data-feather="archive" class="icon-dual icon-xs mr-2"></i>
                                        <span>Servicios</span>
                                    </a>

                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i data-feather="users" class="icon-dual icon-xs mr-2"></i>
                                        <span>Sobre acumedic</span>
                                    </a>
                            </li>
                            @canany(['ListadoUsuarios','CrearUsuario','EditarUsuario','EliminarUsuario'])
                            <li>
                                <a href="{{ route('usuarios.list')}}">
                                    <i data-feather="users"></i>
                                    <span> Usuarios </span>
                                </a>
                            </li>
                            @endcan
                            @canany(['ListarRoles','CrearRol','EditarRol','EliminarRol'])
                            <li>
                                <a href="{{ route('permisos.rol')}}">
                                    <i data-feather="octagon"></i>
                                    <span> Roles </span>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </div>
                    <!-- End Sidebar -->
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->
            </div>
            <!-- Left Sidebar End -->
        </div>
        <!-- fin wrapper -->
    @yield('content')
        <!-- Vendor js -->
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/Admin/vendor.min.js')}}"></script>
        <script src="{{asset('js/Admin/libs/moment/moment.min.js')}}"></script>
        <script src="{{asset('js/Admin/app.js')}}"></script>
        <script src="{{asset('js/acumedic.js')}}"></script>
        <script src="{{asset('js/all.js')}}"></script>
        <script src="{{asset('js/Admin/libs/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('js/Admin/libs/flatpickr/flatpickr.min.js')}}"></script>
        <!-- <script src="{{asset('js/dashboard.init.js')}}"></script> -->
        <script src="{{asset('js/Admin/app.min.js')}}"></script>
       
    @livewireScripts
    @yield('scriptAntecedentes')
    @yield('scriptPacientes')
    @yield('scriptCrearCitas')
    @yield('scriptPacientesEdit')
    @yield('scriptEliminarEstudiosGabinete')
    @yield('scriptUsuariosEdit')
    @yield('scriptUsuarios')
    @yield('checksPermisos')
    @yield('scriptServicios')
    @yield('scriptVentas')
    @yield('scriptDesc1')
    @yield('scriptDesc2')
    @yield('changeUserPassword')
    </body>
</html>