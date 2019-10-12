@extends('layouts.app')
<!-- extends mando a llamar codigo de la capeta layouts del archivo app -->
<!-- secction, parte de codigo que quiero "encapsular" y mandarlo a imprimir a otro lado-->
@section('content')

<nav class="navbar navbar-dark navbar-color-on-scroll navbar-expand-lg" 
    >
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
                                <!-- <th class="text-center">#</th> -->
                                <th class= "col-md-1">Nombre</th>
                                <th class= "col-md-3">Descripción</th>
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
                                <!-- <td class="text-center">#</td> -->
                                <td>{{ $tour->name }}</td>
                                <td class="col-3">{{ $tour->description }}</td>
                                <td>&#76;{{ $tour->price }}</td>
                                <td>{{ $tour->reservations }}</td>
                                <td>{{ $tour->guide ? $tour->guide->name : 'No'}}</td>
                                <td class="">{{ $tour->category ? $tour->category->name : 'No'}}</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Ver Tour"
                                    style="font-size: 0.7em" class="btn btn-info btn-simple btn-sm">
                                        <i style="font-size: 1.5em" class="fa fa-info"></i>
                                    </button>
                                    <a href="{{ url('/admin/tours/'.$tour->id.'/edit') }}" rel="tooltip"
                                        title="Editar Tour" style="font-size: 0.7em"  class="btn btn-success btn-simple btn-sm">
                                        <i style="font-size: 1.5em" class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ url('/admin/tours/'.$tour->id.'/images') }}" rel="tooltip"
                                        title="Ver Imagen" style="font-size: 0.7em"  class="btn btn-warning btn-simple btn-sm">
                                        <i  style="font-size: 1.5em" class="fa fa-image"></i>
                                    </a>
                                    <a href="{{'/admin/tours/'.$tour->id.'/delete'}}" rel="tooltip" title="Elimiar Tour"
                                    style="font-size: 0.7em" class="btn btn-danger btn-simple btn-sm">
                                        <i style="font-size: 1.5em" class="fa fa-trash"></i>
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
@endsection