@extends('layouts.app')
<!-- extends mando a llamar codigo de la capeta layouts del archivo app -->
<!-- secction, parte de codigo que quiero "encapsular" y mandarlo a imprimir a otro lado-->
@section('content')

<nav class="navbar navbar-dark navbar-color-on-scroll navbar-expand-lg" color-on-scroll="100"
    id="sectionsNav">
</nav>
<div class="index" data-parallax="true" style="background-image: url('img/profile_city.jpg')">

</div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Registrar Tours</h2>
            <form method="POST" action="{{ url('/admin/tours') }}" >
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <input type="text" name="name" placeholder="Nombre del Tour..." class="form-control" require>
                    </div>
                    <div class="col-md-8 mb-3">
                        <input type="text" name="description" placeholder="Descripción..." class="form-control" require>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <input type="text" name="price" placeholder="Precio..." class="form-control" />
                    </div>
                    <div class="col-md-4 mb-3">
                        <input type="text" name="reservations" placeholder="Numero de reservaciones.." class="form-control" require>
                    </div>
                </div>
               <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Guias Disponibles</label>
                        <select class="form-control" name="nombreGuia">
                            @foreach($guides as $guide)
                            <option value="{{$guide->id}}">{{ $guide->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Tipo de categoria</label>
                        <select class="form-control" name="nombreCategoria">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Registrar Tour</button>
            </form>



            <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>
</div>
<!-- <footer class="footer footer-default">
    <div class="container">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="https://www.creative-tim.com">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="https://creative-tim.com/presentation">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="https://www.creative-tim.com/license">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright float-right">
            &copy;
            <script>
            document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
        </div>
    </div>
</footer> -->
@endsection