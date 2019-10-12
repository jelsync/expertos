<!DOCTYPE html>
<html lang="en">
<!-- Este es el nav -->

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../asset/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../asset/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Guia de turistas
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
<!-- 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/material-kit.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/demo.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/estilos.css')}}" rel="stylesheet" />
</head>

<body class="">
    <nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-lg navbar-color-on-scroll">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ url('/')}}">
                    <!-- RUTA RAIZ -->
                    Tu guia turística </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if(auth()->user()->admin)
                            <a class="dropdown-item" href="{{ url('admin/tours') }}">
                                Administrar Tours
                            </a>
                            @endif

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit(); ">
                                {{ __('Cerrar Sesión') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        <!-- <div class="dropdown-item" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('admin/tours') }}">Administrar productos
                            </a>
                        </div> -->
                    </li>
                    </li>
                    <li>
                    @if(auth()->user()->admin)
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('admin/tours') }}">
                                {{ __(' Administrar productos') }}
                            </a>
                        </div>
                        @endif
                    </li>
                    @endguest
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/"
                            target="_blank" data-original-title="Follow us on Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom"
                            href="https://www.facebook.com/" target="_blank" data-original-title="Like us on Facebook">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom"
                            href="https://www.instagram.com/" target="_blank"
                            data-original-title="Follow us on Instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        @yield('content')
        <!-- yield Mando a llamar plantillas de otra pagina -->
    </div>
    <script src="{{asset('js/core/jquery.min.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.csss')}}">
    <script src="{{asset('js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/moment.min.js')}}"></script>
    <script src="{{asset('js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/material-kit.js')}}" type="text/javascript"></script>

</body>

</html>