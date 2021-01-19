<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'Acumedic') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('../img/favicon.png')}}">

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- <link rel="shortcut icon" href="{{asset('img/Admin/favicon.ico')}}" type="text/css"> -->
        <link rel="stylesheet" href="{{asset('js/Admin/libs/flatpickr/flatpickr.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/Admin/bootstrap.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/Admin/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/Admin/icons.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/Admin/icons.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/Admin/app.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/Admin/app.min.css')}}" type="text/css">
        <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
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
                        <audio src="{{asset('../notificacion.mp3')}}" id="sonido"></audio>
                        <!-- NOTIFICACIONES -->
                        <li class="dropdown notification-list" data-toggle="tooltip" data-placement="left"
                        
                            @if(auth()->user()->unreadNotifications()->count() > 0)
                                title="{{auth()->user()->unreadNotifications()->count()}} Notificación sin leer"
                            @else
                                title="No tiene notificacioes"
                            @endif>
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" id="notificacion"
                                aria-expanded="false">
                                <i data-feather="bell"></i>
                                @if(auth()->user()->unreadNotifications()->count() > 0)
                                    <span class="noti-icon-badge"></span>
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title border-bottom">
                                    <h5 class="m-0 font-size-16">
                                        <span class="float-right">
                                        @if(auth()->user()->unreadNotifications()->count() > 0)
                                            <a href="{{route('markAsRead')}}" class="text-dark">
                                                <small>Marcar como leidas</small>
                                            </a>
                                        @endif
                                        </span>Notificaciones
                                    </h5>
                                </div>
                                <div class="slimscroll noti-scroll" id="Mensajes">
                                @foreach(auth()->user()->unreadNotifications as $notification)
                                    @if($notification->type == 'App\Notifications\OrdenCreada')
                                        <!-- item-->
                                        <a href="{{route('ordenes.buscarXId',['id' =>$notification->data['IdOrden'], 'idnotify' => $notification->id])}}" class="dropdown-item notify-item border-bottom">
                                            <div class="notify-icon"><img src="{{asset('../iconos/SVG/shopping-bag-g.svg')}}"></div>
                                            <p class="notify-details">Nueva orden de compra.<small class="text-muted">{{$notification->created_at->diffForHumans()}}</small>
                                            </p>
                                        </a>
                                    @else
                                        <!-- item-->
                                        <a href="{{route('solicitudCita.buscarXId',['id' =>$notification->data['IdSolicitud'], 'idnotify' => $notification->id])}}" class="dropdown-item notify-item border-bottom">
                                            <div class="notify-icon"><img src="{{asset('../iconos/SVG/clipboard-g.svg')}}"></div>
                                            <p class="notify-details">Solicitud de cita.<small class="text-muted">{{$notification->created_at->diffForHumans()}}</small>
                                            </p>
                                        </a>
                                    @endif
                                @endforeach
                                </div>
                                <!-- All-->
                                <a href="{{ route('home') }}"
                                    class="dropdown-item text-center text-primary notify-item notify-all border-top">
                                    Ver más
                                    <i class="fi-arrow-right"></i>
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
                            <a href="{{route('miCuenta.show')}}" class="dropdown-item notify-item">
                                <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                                <span>Mi cuenta</span>
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
                                    @if(auth()->user()->unreadNotifications()->count() > 0)
                                        <span class="badge badge-success float-right">{{auth()->user()->unreadNotifications()->count()}} </span>
                                    @endif
                                    <span> Inicio </span>
                                </a>
                            </li>
                            <li class="menu-title">Funciones</li>
                            @if(auth()->user()->can('ListadoCitas'))
                                @canany(['ListadoCitas','CrearCita','EditarCita','EliminarCita','CrearFicha','Consulta'])
                                    <li>
                                        <a href="{{ route('citas.list') }}">
                                            <i data-feather="calendar"></i>
                                            <span> Citas </span>
                                        </a>
                                    </li>
                                 @endcan
                            @endif
                            @if(auth()->user()->can('ListadoPacientes'))
                                @canany(['ListadoPacientes','CrearPaciente','EditarPaciente','EliminarPaciente','ListadoFicha','Consulta'])
                                <li>
                                    <a href="{{ route('paciente.list') }}">
                                        <i data-feather="user"></i>
                                        <span> Pacientes </span>                                  
                                    </a>
                                </li>
                                @endcan
                            @endif
                            @if(auth()->user()->hasAnyPermission(['ListadoProducto','ListadoInventario','ListadoServicio','OrdenDeCompra','SolicitudDeCita']))
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                        <i data-feather="shopping-cart"></i>
                                        <span > Ventas </span>
                                        <span data-feather="chevron-down" class="ml-2 align-self-center"></span>
                                    </a>
                                    <div class="dropdown-menu profile-dropdown-items dropdown-menu-right">
                                    @if(auth()->user()->can('ListadoProducto'))
                                        @canany(['ListadoProducto','CrearProducto','EditarProducto','EliminarProducto'])
                                            <a href="{{ route('productos.list')}}" class="dropdown-item notify-item">
                                                <i data-feather="package" class="icon-dual icon-xs mr-2"></i>
                                                <span>Productos</span>
                                            </a>
                                        @endcan
                                    @endif 
                                    @if(auth()->user()->can('ListadoInventario'))
                                        @canany(['ListadoInventario','CrearInventario','EditarInventario','EliminarInventario'])
                                            <a href="{{ route('inventario.list')}}" class="dropdown-item notify-item">
                                                <i data-feather="book" class="icon-dual icon-xs mr-2"></i>
                                                <span>Inventario</span>
                                            </a>
                                        @endcan
                                    @endif
                                    @if(auth()->user()->can('ListadoServicio'))
                                        @canany(['ListadoServicio','CrearServicio','EditarServicio','EliminarServicio'])
                                            <a href="{{route('servicios.list')}}" class="dropdown-item notify-item">
                                                <i data-feather="archive" class="icon-dual icon-xs mr-2"></i>
                                                <span>Servicios</span>
                                            </a>
                                        @endcan
                                    @endif
                                    @can('OrdenDeCompra')
                                        <a href="{{route('ordenes.pendientes')}}" class="dropdown-item notify-item">
                                            <i data-feather="shopping-bag" class="icon-dual icon-xs mr-2"></i>
                                            <span>Ordenes</span>
                                        </a>
                                    @endcan
                                    @can('SolicitudDeCita')
                                        <a href="{{route('solicitudCita.pendientes')}}" class="dropdown-item notify-item">
                                            <i data-feather="clipboard" class="icon-dual icon-xs mr-2"></i>
                                            <span>Solicitud de citas</span>
                                        </a>
                                    @endcan
                                </li>
                            @endif
                            @if(auth()->user()->can('ListadoUsuarios'))
                                @canany(['ListadoUsuarios','CrearUsuario','EditarUsuario','EliminarUsuario'])
                                <li>
                                    <a href="{{ route('usuarios.list')}}">
                                        <i data-feather="users"></i>
                                        <span> Usuarios </span>
                                    </a>
                                </li>
                                @endcan
                            @endif
                            @if(auth()->user()->can('ListarRoles'))
                                @canany(['ListarRoles','CrearRol','EditarRol','EliminarRol'])
                                <li>
                                    <a href="{{ route('permisos.rol')}}">
                                        <i data-feather="octagon"></i>
                                        <span> Roles </span>
                                    </a>
                                </li>
                                @endcan
                            @endif
                            @canany(['SobreAcumedic'])
                            <li>
                                <a href="{{route('sobreNosotros')}}" class="dropdown-item notify-item">
                                    <i data-feather="users" class="icon-dual icon-xs mr-2"></i>
                                    <span>Sobre acumedic</span>
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
    @yield('scriptProductoDetallado')
    @yield('scriptUsuariosEdit')
    @yield('scriptUsuarios')
    @yield('checksPermisos')
    @yield('scriptServicios')
    @yield('scriptVentas')
    @yield('scriptDesc1')
    @yield('scriptDesc2')
    @yield('changeUserPassword')
    @yield('scriptInventario')
    @yield('scriptAbout')
    @yield('miCuenta')
    @yield('orden')
    <script>
    
        
        // // Enable pusher logging - don't include this in production
        // Pusher.logToConsole = true;
  
        var pusher = new Pusher('{{env('PUSHER_APP_KEY')}}', {
            cluster: '{{env('PUSHER_APP_CLUSTER')}}',
            forceTLS: true
        });
        
        var channel = pusher.subscribe('Orden-producto');
        var channel2 = pusher.subscribe('Solicitud-cita');
        
        channel.bind('Orden-producto', function(data) {
            $('#sonido')[0].play();
            $('#notificacion').append(`<span class="noti-icon-badge"></span>`);
            $('#Mensajes').prepend(`<a href="{{route('ordenes.pendientes')}}" class="dropdown-item notify-item border-bottom">
                                        <div class="notify-icon"><img src="{{asset('../iconos/SVG/shopping-bag-g.svg')}}"></div>
                                        <p class="notify-details">Nueva orden de compra.<small class="text-muted">Hace unos segundos</small>
                                        </p>
                                    </a>`);
        });
        channel2.bind('Solicitud-cita', function(data) {
            $('#sonido')[0].play();
            $('#notificacion').append(`<span class="noti-icon-badge"></span>`);
                $('#Mensajes').prepend(`<a href="{{route('solicitudCita.pendientes')}}" class="dropdown-item notify-item border-bottom">
                                            <div class="notify-icon"><img src="{{asset('../iconos/SVG/clipboard-g.svg')}}"></div>
                                            <p class="notify-details">Nueva Solicitud de cita.<small class="text-muted">Hace unos segundos</small>
                                            </p>
                                        </a>`);       
        });
    </script>
    </body>
</html>