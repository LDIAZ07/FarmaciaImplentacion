@extends('layoutUsuario')

@section('usuario', $usuario)

@section('contenido')

    <h1>Farmacia Chespin</h1>


    <div class="content">
        @yield('contenido')
    </div>
    
@endsection