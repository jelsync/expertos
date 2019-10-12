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
            <h2 class="title">Editar Tours</h2>
            <form method="POST" action="{{ url('/admin/tours/'.$tours->id.'/edit') }}" >
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <input type="text" name="name" placeholder="Nombre del Tour..." class="form-control" value="{{ $tours->name }}" />
                    </div>
                    <div class="col-md-8 mb-3">
                        <input type="text" name="description" placeholder="Descripción..." class="form-control" value="{{ $tours->description }}"/>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <input type="text" name="price" placeholder="Precio..." class="form-control" value="{{ $tours->price }}" />
                    </div>
                    <div class="col-md-4 mb-3">
                        <input type="text" name="reservations" placeholder="Numero de reservaciones.." class="form-control" value="{{ $tours->reservations }}"/>
                    </div>
                </div>
               <div class="form-row">

                    <div class="col-md-4 mb-3">
                        <label>Guias Disponibles</label>
                        <select class="form-control" name="nombreGuia">
                            @foreach($guides as $guide)
                            <option value="{{$guide->id}}">{{ $guide-> name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Tipo de categoria</label>
                        <select class="form-control" name="nombreCategoria">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{ $category-> name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary">Actualizar Tour</button>
                    <a href="{{ url('/admin/tours') }}" class="btn btn-danger">Cancelar</a>
            </form>



            <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>
</div>

@endsection