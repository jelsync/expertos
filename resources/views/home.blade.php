@extends('layouts.app')

@section('content')
<div class="header header-filter posicion con"
    style="background-image: url('{{asset('img/city.jpg')}}'); background-size: cover;">
    <div class="container">
        <div class="row">
        </div>
    </div>
    <footer class="footer pie">
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

<!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->


@endsection