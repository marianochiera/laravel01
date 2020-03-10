@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        <div class="card">
            <div class="card-header navbar">
                Lista de Peliculas
                <ul class="nav  ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('peliculas.create')}}">Nueva pelicula</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h3>Peliculas</h3>
                <ul>
                    @forelse ($peliculas as $pelicula)
                    <li> <a href="{{route('peliculas.show',$pelicula)}}">{{ $pelicula->titulo }}</a></li>
                    @empty
                    <p>Aca no cargaste nada</p>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
