@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
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
    <form name="frmMensaje" id="frmMensaje" method="post" action="mensajes/create">
       <div class="form-group">   
       {{ csrf_field() }}
        <input type="text" name="txtMensaje" class="form-control @if ($errors->has('txtMensajes')) is-invalid @endif" placeHolder="Que esta pasando" />
        <!-- if ($errors->any()) -->
        <!-- $errors->any() -->
        @if ($errors->has('txtMensaje'))
            @foreach ($errors->get('txtMensaje') as $error)
                <div class="alert alert-danger"> {{ $error }} </div>
            @endforeach
        @endif
       </div>       
    </form>
</div>
<div class="row">
    @forelse ($mensajes as $mensaje)
        <div class="col-6">
            <img class="img-thumbnail" src="{{ $mensaje['image'] }}"/>
            <p class="card-text">
                {{ $mensaje['mensaje'] }}
                <a href="/mensajes/{{ $mensaje['id'] }}">Leer mas</a>
            </p>
        </div>
    @empty
        <p>No hay mensajes destacados.</p>
    @endforelse

    @if (count($mensajes))
        <div class="mt-2 mx-auto">
        {{ $mensajes-> links('pagination::bootstrap-4') }}
        <div>
    @endif
</div>
@endsection

