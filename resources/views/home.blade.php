@extends('layouts.app')

@section('content')
<div class="header header-filter posicion con"
    style="background-image: url('{{asset('img/city.jpg')}}'); background-size: cover; height:800px;">
    <!-- <div class="barra" style="background-image: url('{{asset('img/1.webp')}}'); background-size: cover;">  -->
    <div class="container">
        <div class="row">
            <div class="card-deck">
                <div class="card">
                    <a href="h">
                        <img src="{{asset('img/naturaleza/1.webp')}}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Turismo Al extranjero</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Aplican Restricciones</small>
                    </div>
                </div>
                <div class="card">
                    <a href="h">
                        <img src="{{asset('img/naturaleza/1.webp')}}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Turismo interno</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Aplican Restricciones</small>
                    </div>
                </div>
                <div class="card">
                    <a href="h">
                        <img src="{{asset('img/naturaleza/1.webp')}}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Otros</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal
                            height action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Aplican Restricciones</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('incluir.footer')


    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->


    @endsection