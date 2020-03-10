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
                Vista de la pelicula
                 <ul class="nav  ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('peliculas.edit',$pelicula)}}">Editar Película</a>
                </li>

                <li class="nav-item">
                    <form action="{{ route('peliculas.destroy',$pelicula) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-link" type="submit">Borrar Película</a>
                    </form>
                </li>
                </ul>
            </div>
            @if ($pelicula->foto)
            <img class="card-img-top" src="{{ Storage::url($pelicula->foto)}}" alt="Card image cap">
            @endif
            <div class="card-body">
                <h1>Película: {{ $pelicula->titulo }}</h1>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
