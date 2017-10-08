@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Laratter</h1>
    <nav> 
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/acerca">ACERCA DE</a>
            </li>
        </ul>  
    </nav>
</div>
<div class="row">
    @forelse ($mensajes as $mensaje)
        <div class="col-6">
            <img class="img-thumbnail" src="{{ $mensaje['IMAGE'] }}"/>
            <p class="card-text">
                {{ $mensaje['CONTENIDO'] }}
                <a href="/messages/{{ $mensaje['ID'] }}">Leer mas</a>
            </p>
        </div>
    @empty
        <p>No hay mensajes destacados.</p>
    @endforelse
</div>
@endsection

