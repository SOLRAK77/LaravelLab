@extends('layouts.app')

@section('content')
<div class="title m-b-md">
                    Laravel, by <a href="https://platzi.com">Platzi</a>
                </div>
                @if (isset($profesor))
                <p style="color:red;">Profesor : {{$profesor}}</p>
                @else
                <p style="color:red;">Profesor : Alguien mas</p>
                @endif

                <div class="links">
                    @foreach ( $links as $link => $text)
                    <a href="{{ $link }}">{{$text}}</a>
                    @endforeach
                </div>
@endsection

