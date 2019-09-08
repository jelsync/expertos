@extends('layouts.app')

@section('content')
<div class="header header-filter posicion"
    style="background-image: url('{{asset('img/city.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 cuerpo">
                <div class="card card-login cuerpo">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">Inicio de Sesión</h4>
                            <div class="social-line">
                                <a href="#" class="btn btn-just-icon btn-link">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="#" class="btn btn-just-icon btn-link">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-just-icon btn-link">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                        <p class="description text-center">
                            Inicia sesión para continuar
                        </p>
                        <div class="card-body">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">mail</i>
                                    </span>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ __('Correo no valido') }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                </div>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ __('Contraseña Invalidad') }}</strong>
                                </span>
                                @enderror
                            </div>
                            <!-- <div class="input-group"> -->
                            <div class="form-check ">
                                <label class="">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                    ¿Recordar contraseña?
                                </label>
                            </div>
                            <!-- </div>  -->
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvido la contraseña?') }}
                                    </a>
                                    @endif -->
                                </div>
                            </div>
                        </div>
            
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="">
                            *Turistiando*
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Acerca de nosotros
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Politicas de la empresa
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright float-right">
                &copy;
                <script>
                document.write(new Date().getFullYear());
                </script>, lo hacemos con <i class="material-icons">favorite</i> para
                <a href=" target=" _blank">*Turistiando*</a>
                es un placer.
            </div>
        </div>
    </footer>
</div>
@endsection