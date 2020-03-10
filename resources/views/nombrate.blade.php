@extends('layouts.app')

@section('content')
    @if ($nombre)
        <h2>Vos sos {{ $nombre }}</h2>
        <button class="btn btn-primary">Mi boton</button>
    @else
        <h2>no se quien sos</h2>
    @endif
@endsection
