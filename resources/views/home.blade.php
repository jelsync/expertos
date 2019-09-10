@extends('layouts.app')

@section('content')
<div class="header header-filter posicion con" style="background-image: url('{{asset('img/city.jpg')}}'); background-size: cover; height:800px;">
<!-- <div class="barra" style="background-image: url('{{asset('img/1.webp')}}'); background-size: cover;">  -->
<div class="container">
    <div class="row">
    <div class="card-deck">
  <div class="card">
    <img src="{{asset('img/naturaleza/1.webp')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Turismo Al extranjero</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('img/naturaleza/1.webp')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Turismo interno</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Mas información</small>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('img/naturaleza/1.webp')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Otros</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
    </div>
</div>
</div>
<!-- </div> -->
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