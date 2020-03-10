

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif --}}
            <div class="card">
                <div class="card-header navbar">
                    Vista de actor
                    {{-- <ul class="nav  ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('actores.edit',$actor)}}">Editar Actor</a>
                        </li>
                        <li class="nav-item">
                        <form action="{{ route('actores.destroy',$actor) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-link" type="submit">Borrar Actor</a>
                        </form>
                        </li>
                    </ul> --}}
                </div>
                {{-- @if ($actor->foto)
                    <img class="card-img-top" src="{{ Storage::url($actor->foto)}}" alt="Card image cap">
                @endif --}}
                <div class="card-body">
                    <h1>Actor: {{ $actor->nombre }}</h1>
                    <p><strong>Edad: </strong>{{ $actor->edad}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
