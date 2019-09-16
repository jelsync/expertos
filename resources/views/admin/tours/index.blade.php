@extends('layouts.app')
<!-- extends mando a llamar codigo de la capeta layouts del archivo app -->
<!-- secction, parte de codigo que quiero "encapsular" y mandarlo a imprimir a otro lado-->
@section('content')

<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100"
    id="sectionsNav">
</nav>
<div class="index" data-parallax="true" style="background-image: url('img/profile_city.jpg')">

</div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Listado de Tours</h2>
            <div class="team">
                <div class="row">
                    <table class="table">
                        <a href="{{ url('/admin/tours/create') }}" class="btn btn-primary">Agregar Nuevo Tour</a>
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th class=""># Reservaciones</th>
                                <th class="">Guia Asignado</th>
                                <th class="">Categoria</th>
                                <th class="">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tours as $tour)
                            <tr>
                                <td class="text-center"></td>
                                <td>{{ $tour->name }}</td>
                                <td class="col-2">{{ $tour->description }}</td>
                                <td>&#76;{{ $tour->price }}</td>
                                <td>{{ $tour->reservations }}</td>
                                <td>{{ $tour->guide ? $tour->guide->name : 'No'}}</td>
                                <td class="">{{ $tour->category ? $tour->category->name : 'No'}}</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Ver Tour"
                                        class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-info"></i>
                                    </button>
                                    <a href="{{ url('/admin/tours/'.$tour->id.'/edit') }}" rel="tooltip"
                                        title="Editar Tour" class="btn btn-success btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{'/admin/tours/'.$tour->id.'/delete'}}" rel="tooltip" title="Elimiar Tour"
                                        class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $tours->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer footer-default">
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
</footer>
@endsection