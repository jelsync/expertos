@extends('layouts.app')

@section('content')
<div class="header header-filter posicion con"
    style="background-image: url('{{asset('img/city.jpg')}}'); background-size: cover; height:800px;">
    <!-- <div class="barra" style="background-image: url('{{asset('img/1.webp')}}'); background-size: cover;">  -->
    <div class="container">
        <div class="row">
            <h1>Pagina administrador</h1>  
        </div>
    </div>


    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->


    @endsection