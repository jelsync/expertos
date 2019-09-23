@extends('layouts.app')
<!-- extends mando a llamar codigo de la capeta layouts del archivo app -->
<!-- secction, parte de codigo que quiero "encapsular" y mandarlo a imprimir a otro lado-->
@section('content')

<nav class="navbar navbar-dark navbar-color-on-scroll navbar-expand-lg">
</nav>
<div class="index" data-parallax="true" style="background-image: url('img/profile_city.jpg')">

</div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
        <form action="post" method="" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="file" name="foto" id="" class="btn btn-primary">
            <button type="submit" rel="tooltip" class="btn btn-primary">Cargar imagen</button> <br>
        </form>
            <h2 class="title text-center">Imagenes del Tour {{ $tours->name }}</h2>
            <img src='{{ asset($image) }}' class="img-raised rounded-circle" style='height:250px; width:250px;'>
        </div>
        <a href="{{ url('/admin/tours') }}" rel="tooltip" class="btn btn-primary">Volver atras</a> <br>
    </div>
</div>
@endsection