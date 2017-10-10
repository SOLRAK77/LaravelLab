@extends('layouts.app')

@section('content')
 <h1 class="title m-b-md">Mensaje ID: {{ $mensaje['id'] }}</h1>
 <img class="img-thumbnail" src="{{ $mensaje['image'] }}"/>

<div class="card-text">
    <p>{{ $mensaje['mensaje'] }}</p>
    <small class="text-muted">{{ $mensaje->created_at }}</small>
</div>
@endsection